<?php

if( ! defined('ABSPATH') ) exit;

class TMGetCompliedWPAdmin {

	// Version
	protected $version;

	// Construct
	public function __construct( $version ) {
		$this->version = $version;
	}
	
	/**
	 * Admin Menu
	 *
	 * @since 0.1.0
	 */
	public function create_admin_menu() {
		
		add_options_page( TM_GETCOMPLIED_GDPR_WP_NAME, TM_GETCOMPLIED_GDPR_WP_NAME, 'manage_options', basename( __FILE__ ), array( $this, 'options_page' ) );
		
	}
	
	/**
	 * Options Page
	 *
	 * @since 0.1.0
	 */
	public function options_page() {
		
		require_once TM_GETCOMPLIED_GDPR_WP_ADMIN_DIR.'/options.page.php';
		
	}
	
	/**
	 * Register Settings
	 *
	 * @since 0.1.0
	 */
	public function options_init() {
		
		register_setting( 'tm_getcomplied_wp_settings', 'tm_getcomplied_wp_settings' );
	}
	
	/**
	 * Enqueue scripts on admin configuration page
	 *
	 * @since 0.2.0
	 */
	public function tm_getcomplied_admin_enqueue_scripts($hook) {
		
		if($hook != 'settings_page_tm_getcomplied_gdpr_wp.admin.class') {
			return;
		}

		wp_enqueue_style( 'getcomplied_bootstrap_min_css',	TM_GETCOMPLIED_GDPR_WP_ADMIN_CSS_DIR . '/bootstrap.min.css' );
		wp_enqueue_style( 'getcomplied_admin_css',			TM_GETCOMPLIED_GDPR_WP_ADMIN_CSS_DIR . '/getcomplied-admin.css' );

	}
	
	/**
	 * Add plugin action links.
	 *
	 * Add a link to the settings page on the plugins.php page.
	 *
	 * @since 0.1.0
	 *
	 * @param  array  $links List of existing plugin action links.
	 * @return array         List of modified plugin action links.
	 */
	public function tm_my_plugin_action_links( $links ) {
		
	   $links[] = '<a href="'. esc_url( get_admin_url( null, 'options-general.php?page=tm_getcomplied_gdpr_wp.admin.class.php' ) ) .'">'.__('Configure', 'tm_getcomplied_gdpr_wp').'</a>';
	   return $links;
	   
	}
	
}