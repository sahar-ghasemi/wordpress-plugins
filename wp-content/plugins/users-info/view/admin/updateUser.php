<h1>Update User</h1>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]."?page=show_users&action=update&id=".$_GET["id"] ?>">
<?php $user=get_user_by("ID",$_GET["id"]); ?>
    <input type="text" name="username"  placeholder="username" value="<?php echo $user->user_login;?>" disabled>
    <input type="text" name="password" placeholder="password" value="<?php echo $user->user_pass; ?>">
    <input type="text" name="email" placeholder="email" value="<?php echo $user->user_email ;?>">
    <input type="text" name="phone" placceholder="phone" value="<?php echo get_user_meta($_GET["id"],"_phone",true)?>">
    <select name="role">
<?php 
$roles=get_editable_roles();
$current_role = $user->roles[0]; 
foreach($roles as $role => $details){
    $selected = ($role == $current_role) ? 'selected' : '';
    echo '<option value="' . esc_attr($role) . '" ' . $selected . '>' . esc_html($details['name']) . '</option>';
}
?></select>
<button name="submit-update">Update</button>
</form>

<?php 
  if(isset($_POST["submit-update"]) ){
    $userdata = array(
        'ID'=>$_GET["id"],
        'user_login'    => sanitize_text_field($_POST["username"],),
        'user_pass'     => sanitize_text_field($_POST["password"]),
        'user_email'    => sanitize_email($_POST["email"]),
    );
    wp_update_user( $userdata );//need to work more check empty and ...

    $user=get_user_by("ID",$_GET["id"]);
    $user->set_role(sanitize_text_field($_POST["role"]));
    update_user_meta($_GET["id"],"_phone",$_POST["phone"]);
    
wp_redirect(admin_url("?page=show_users"));
exit();
  }
?>



<style>
    div{
        background-color: while;
    }
    form{
        width: 400px;
        margin: 30px auto;
box-shadow: 1px 5px 20px gray;
padding: 20px;
border-radius: 5px;
    }
    input{
        width: 100%;
        display: block;
        margin-bottom: 10px;
        height: 40px;
    }
    button{
        width:50%;
        background-color: green;
        color: white;
        font-weight: bold;
        display: block;
        margin: 30px auto;
        border-radius: 5px;
        border: none;
        padding: 7px 10px;
        cursor: pointer;
    }
</style>