<?php

if( ! defined('ABSPATH') || defined('TM_GETCOMPLIED_GDPR_WP_INIT') ){
	exit;
}

// Define constants
define( 'TM_GETCOMPLIED_GDPR_WP_INIT',				true);
define( 'TM_GETCOMPLIED_GDPR_WP_VERSION',			'1.1.0');
define( 'TM_GETCOMPLIED_GDPR_WP_TEXTDOMAIN',		'tm-getcomplied-gdpr-wp' );
define( 'TM_GETCOMPLIED_GDPR_WP_NAME',				__('GetComplied', TM_GETCOMPLIED_GDPR_WP_TEXTDOMAIN) );

define( 'TM_GETCOMPLIED_GDPR_WP_INC_DIR',			TM_GETCOMPLIED_GDPR_WP_DIR.'includes');
define( 'TM_GETCOMPLIED_GDPR_WP_LANG_DIR',			TM_GETCOMPLIED_GDPR_WP_DIR.'languages/');

define( 'TM_GETCOMPLIED_GDPR_WP_ADMIN_DIR',			TM_GETCOMPLIED_GDPR_WP_DIR . 'admin');
	define( 'TM_GETCOMPLIED_GDPR_WP_ADMIN_CSS_DIR',	plugins_url( '../admin/css', __FILE__ ) );
	define( 'TM_GETCOMPLIED_GDPR_WP_ADMIN_IMG_DIR',	plugins_url( '../admin/images', __FILE__ ) );

define( 'TM_GETCOMPLIED_GDPR_WP_PUBLIC_DIR',		TM_GETCOMPLIED_GDPR_WP_DIR . 'public');
	define( 'TM_GETCOMPLIED_GDPR_WP_PUBLIC_JS_DIR',	plugin_dir_url( __FILE__ ) . '/js');
