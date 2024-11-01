<?php

if( ! defined('ABSPATH') ) exit;

class TMGetCompliedWP {

	// Version
	protected $version;

	// Construct
	public function __construct( $version ) {
		
		$this->version = $version;
		$this->load_dependencies();
		// $this->set_locale();
		add_action( 'plugins_loaded', array( $this, 'set_locale' ) );
		
		if ( is_admin() ) $this->call_admin_hooks();
		if ( ! is_admin() ) $this->call_public_hooks();
		
	}
	
	// Dependencies
	private function load_dependencies() {
		
		if ( is_admin() ) require_once TM_GETCOMPLIED_GDPR_WP_ADMIN_DIR . '/tm_getcomplied_gdpr_wp.admin.class.php';
		if ( ! is_admin() ) require_once TM_GETCOMPLIED_GDPR_WP_PUBLIC_DIR . '/tm_getcomplied_gdpr_wp.public.class.php';
		
	}
	
	// Translations
	public function set_locale() {
		load_plugin_textdomain( TM_GETCOMPLIED_GDPR_WP_TEXTDOMAIN, false, TM_GETCOMPLIED_GDPR_WP_LANG_DIR );
	}
	
	/**
	 * Admin Hooks
	 *
	 * @since 0.1.0
	 */
	private function call_admin_hooks() {
		
		$plugin_admin = new TMGetCompliedWPAdmin( $this->version );
		
		add_action( 'admin_enqueue_scripts', array( $plugin_admin, 'tm_getcomplied_admin_enqueue_scripts' ) );
		
		// Add Menu
		add_action( 'admin_menu', array( $plugin_admin, 'create_admin_menu' ) );
		
		// Register settings
		add_action( 'admin_init', array( $plugin_admin, 'options_init' ) );
		
		// Add filter for action links on plugin list page
		add_filter( 'plugin_action_links_' . TM_GETCOMPLIED_GDPR_WP_BASENAME, array( $plugin_admin, 'tm_my_plugin_action_links' ) );
		
	}
	
	/**
	 * Public Hooks
	 *
	 * @since 0.1.0
	 */
	private function call_public_hooks() {
		
		$plugin_public = new TMGetCompliedWPPublic( $this->version );
		
		// Add script code
		add_action( 'wp_enqueue_scripts',  array( $plugin_public, 'tm_add_getcomplied_code' ) );
	}
	
}