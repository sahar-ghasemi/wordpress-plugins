<?php

/*
Plugin Name: plugin structure
Plugin URI: http://wordpress.org/plugins/plugin-structure/
Description: structure of a plugin
Author: Sahar Ghasemi
Version: 1.0.0
Author URI: http://saharghasemi.com
*/

define("PLUGIN_PATH",plugin_dir_path(__FILE__));
define("PLUGIN_URL",plugin_dir_url(__FILE__));
define("PLUGIN_INC",PLUGIN_PATH."inc/");
define("PLUGIN_ASSETS",PLUGIN_PATH."assets/");


if (is_admin()){
    include PLUGIN_INC."admin/welcome.php";
}