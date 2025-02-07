
<?php
/*
Plugin Name: shortcode api
Plugin URI: http://wordpress.org/plugins/shortcode-api/
Description: shortcode api 
Author: Sahar Ghasemi
Version: 1.0.0
Author URI: http://saharghasemi.com/
*/

define("PLUGIN_PATH",plugin_dir_path(__FILE__));
define("PLUGIN_INC",PLUGIN_PATH."inc/");

if(is_admin()){
}
require PLUGIN_INC."front/shortcode.php";
