<?php
/*
Plugin Name: Widget Visibility
Plugin URI: http://www.codefleet.net/widget-visibility/
Description: Control which pages your widgets appear on WordPress
Version: 1.0.1
Author: Nico Amarilla
Author URI: http://www.codefleet.net/
License: GPL-2.0+
License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

if(!defined('WIDVIS_PATH')){
    define('WIDVIS_PATH', realpath(plugin_dir_path(__FILE__)) . DIRECTORY_SEPARATOR );
}
if(!defined('WIDVIS_URL')){
    define('WIDVIS_URL', plugin_dir_url(__FILE__) );
}

// Common classes
if( !class_exists('Codefleet_Common_View') ) {
    require_once(WIDVIS_PATH.'vendor/Codefleet_Common_View.php');
}

// Plugin classes
require_once(WIDVIS_PATH.'vendor/Codefleet_Widvis_Main.php');

$codefleet_widvis_main = new Codefleet_Widvis_Main( new Codefleet_Common_View() );