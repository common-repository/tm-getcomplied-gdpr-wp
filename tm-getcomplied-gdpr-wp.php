<?php

/*
Plugin Name:  GetComplied with GDPR for WordPress
Description:  Get Complied with GDPR for WordPress inserts GetComplied code into your WordPress Blog/Website to connect with GetComplied Platform ( https://www.getcomplied.com/ ).
Version:      1.1.0
Author:       Rúben Martins
Author URI:   https://rubenmartins.pt/
Text Domain:  tm-getcomplied-gdpr-wp
Domain Path:  /languages
License:      GPLv2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

if( ! defined('ABSPATH') ) exit;

if( ! defined( 'TM_GETCOMPLIED_GDPR_WP_INIT' ) ) {

	define( 'TM_GETCOMPLIED_GDPR_WP_DIR', 		plugin_dir_path( __FILE__ ));
	define( 'TM_GETCOMPLIED_GDPR_WP_BASENAME', 	plugin_basename( __FILE__ ));

	require_once TM_GETCOMPLIED_GDPR_WP_DIR.'/includes/define.inc.php';
	
	require_once TM_GETCOMPLIED_GDPR_WP_INC_DIR.'/tm_getcomplied_gdpr_wp.class.php';
	
	function tm_getcomplied_run() {
		if( $tm_getcomplied = new TMGetCompliedWP( TM_GETCOMPLIED_GDPR_WP_VERSION ) ){
			return $tm_getcomplied;
		} else {
			return false;
		}
	}

	$tm_getcomplied = tm_getcomplied_run();
}