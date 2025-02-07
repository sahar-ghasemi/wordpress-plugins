<?php

add_action("admin_menu","add_menu_item");

function add_menu_item(){
    add_menu_page("words_links","word links","manage_options","wl-links","word_link_item","",6);
    add_submenu_page("wl-links","words-links-setting","setting","manage_options",
    "wl-links-setting","word_link_item_setting");
}
function word_link_item() {
    echo "<h1>Words Links</h2>";
}
function word_link_item_setting(){
    include PLUGIN_VIEW."admin/adminmenu.php";

    if(isset($_POST['btn-submit'])) {
       $array=explode("/", $_POST['words']); 
       if(!get_option("_wl_word_links")
       ){
        add_option('_wl_word_links', $array);
       }else{
        update_option('_wl_word_links', $array);
       }
    }
}