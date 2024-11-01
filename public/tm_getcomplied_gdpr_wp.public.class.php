<?php

if( ! defined('ABSPATH') ) exit;

class TMGetCompliedWPPublic {

	// Version
	protected $version;

	// Construct
	public function __construct( $version ) {
		$this->version = $version;
	}
	
	/**
	 * Add script js code to html head
	 *
	 * Add script from GetComplied to the Blog/Website
	 *
	 * @since 0.1.0
	 */
	public function tm_add_getcomplied_code() {
		
		$settings = get_option( 'tm_getcomplied_wp_settings' );
		if ( empty($settings) || !is_array($settings) || empty($settings['getcomplied_id'])) {
			return;
		}

		// Register the script
		wp_register_script( 'tm_getcomplied_gdpr_wp-script', plugin_dir_url( __FILE__ ) . 'js/tm_getcomplied_gdpr_wp.js', array(), TM_GETCOMPLIED_GDPR_WP_VERSION, true );

		// Localize the script with new data
		wp_localize_script( 'tm_getcomplied_gdpr_wp-script', 'tmgdprwp_getcomplied', array( 'id' => trim( $settings['getcomplied_id'] ) ) );

		// Enqueued script with localized data.
		wp_enqueue_script( 'tm_getcomplied_gdpr_wp-script' );
		
	}
	
}