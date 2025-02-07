<?php
/*
Plugin Name: first plugin
Plugin URI: http://wordpress.org/plugins/first-plugin/
Description: the first plugin in the list of plugins
Author: Sahar Ghasemi
Version: 1.0.0
Author URI: http://saharghasemi.com/
*/

function welcome() {
    echo "<script>alert('welcome to the site')</script>";
}
welcome();