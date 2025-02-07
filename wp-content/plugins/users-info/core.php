<?php
/*
Plugin Name: show vip users
Plugin URI: http://wordpress.org/plugins/show-user/
Description: users api- customify theme
Author: Sahar Ghasemi
Version: 1.0.0
Author URI: http://saharghasemi.com/
*/

define("PLUGIN_PATH",plugin_dir_path(__FILE__));
define("PLUGIN_INC",PLUGIN_PATH."inc/");
define("PLUGIN_VIEW",PLUGIN_PATH."view/");


if(is_admin()){
require PLUGIN_INC."admin/user-lists.php";

}

include PLUGIN_INC."role/role.php";