<?php
/*
Plugin Name: Disable Wp Updates & Notifications
Description: Easy way to disable all wordpress, themes, plugins, core updates & notifications in wordpress. 
Plugin URI:  http://wordpress.org/plugins/disable-wp-updates/
Version:     1.0 
Author:      Abhay Yadav
Author URI:  http://abhayyadav.com
License:     GPL2
License URI: http://www.gnu.org/licenses/gpl-2.0.html 
*/         
 
class DISABLE_ALL_WP_UPDATES {
   
	function __construct() {   
			
	add_action('init', create_function('$a', "remove_action( 'init', 'wp_version_check' );"), 2); 
	add_filter('pre_option_update_core', '__return_null');
	add_filter( 'auto_update_core', '__return_false' );
	add_filter('pre_site_transient_update_core', '__return_null');
	add_filter( 'auto_update_translation', '__return_false' );
	add_filter( 'automatic_updater_disabled', '__return_true' );
	add_filter( 'allow_minor_auto_core_updates', '__return_false' );
	add_filter( 'allow_major_auto_core_updates', '__return_false' );
	add_filter( 'allow_dev_auto_core_updates', '__return_false' );
	add_filter( 'auto_update_core', '__return_false' );
	add_filter( 'wp_auto_update_core', '__return_false' );
	add_filter( 'auto_core_update_send_email', '__return_false' );
	add_filter( 'send_core_update_notification_email', '__return_false' );
	add_filter( 'auto_update_plugin', '__return_false' );
	add_filter( 'auto_update_theme', '__return_false' );
	add_filter( 'automatic_updates_send_debug_email', '__return_false' );
	add_filter( 'automatic_updates_is_vcs_checkout', '__return_true' );
	add_filter('pre_site_transient_update_plugins','__return_null');
	remove_action('load-update-core.php','wp_update_plugins');
	add_filter( 'allow_dev_auto_core_updates', '__return_false' );
	// Disable All Automatic Updates 
    add_filter( 'automatic_updater_disabled', '__return_true' );
	// Disable Automatic Update Result Emails
    add_filter( 'auto_core_update_send_email', '__return_false' );

}


}

if ( class_exists('DISABLE_ALL_WP_UPDATES') ) {
	
	$DISABLE_ALL_WP_UPDATES = new DISABLE_ALL_WP_UPDATES();
	
}



?>