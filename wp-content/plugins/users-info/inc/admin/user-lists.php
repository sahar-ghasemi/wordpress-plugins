<?php
ob_start();

add_action("admin_menu","add_menu_for_show_users");
function add_menu_for_show_users(){
    add_menu_page("show_users","Show vip users","manage_options","show_users","show_user_list","");
    add_submenu_page("show_users","add_new_user","Add new user","manage_options","add_new_user","add_new_user");
}
function show_user_list(){
    if(isset($_GET["id"])&& isset($_GET["action"])){
        $id=$_GET["id"];
        switch($_GET["action"]){
            case "delete":
                wp_delete_user($id);
                wp_redirect(admin_url("?page=show_user_list"));
                break;
            case "update":
                include PLUGIN_VIEW."admin/updateUser.php";
                exit();
                break;
        }
    }
include PLUGIN_VIEW."admin/userList.php";
include PLUGIN_VIEW."admin/vipUserList.php";

}
function add_new_user(){
    if(isset($_POST["submit"]) ){
        $userdata = array(
            'user_login'    => sanitize_text_field($_POST["username"],),
            'user_pass'     => sanitize_text_field($_POST["password"]),
            'user_email'    => sanitize_email($_POST["email"]),
            'role' => sanitize_text_field($_POST["role"]),
        );         
        $id=wp_insert_user( $userdata );//need to work more check empty and ...
        add_user_meta($id,"_phone",$_POST["phone"]);
      }
include PLUGIN_VIEW."admin/addUser.php";
}


// add_action("init","insert_user_to_database");

// function insert_user_to_database(){
//     $pass=wp_generate_password(12,true ,true   );
//     wp_create_user("sima",$pass,"sima@gmail.com");
// }