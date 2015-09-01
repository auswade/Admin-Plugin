<?php
/*
Plugin Name:    TS3's Admin Menu
Plugin URI:		http://www.techstudio3.com/downloads/dev/plugins/TS3AdminPlugin/
Description:    
Version: 1.1
Author: Wade Hextell
Author URI: http://www.techstudio3.com
*/ 

// The line below stops this script / file from being called directly from the script kids.
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


// START of the application //
add_action('admin_menu', 'my_plugin_menu');

function my_plugin_menu() {
	add_menu_page('My Site Settings', 'TS3 Settings', 'administrator', 'my-plugin-settings', 'my_plugin_settings_page', 'dashicons-admin-generic');
}

function my_plugin_settings_page() {
  // 
}

?>