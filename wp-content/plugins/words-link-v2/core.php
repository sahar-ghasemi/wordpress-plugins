<?php

/*
Plugin Name: Words link v2
Plugin URI: http://wordpress.org/plugins/words-link
Description: Create Link with words
Author: Sahar Ghasemi
Version: 1.0.1
Author URI: http://saharghasemi@gmail.com
*/

define("PLUGIN_PATH",plugin_dir_path(__FILE__));
define("PLUGIN_INC",PLUGIN_PATH."inc/");
define("PLUGIN_VIEW",PLUGIN_PATH."view/");

// Include necessary files
if (is_admin()){
    include PLUGIN_INC."admin/menu.php";
}
include PLUGIN_INC."front/word-link.php";