<?php
add_action("admin_menu","add_menu_speed_website");

function add_menu_speed_website() {
    add_menu_page("speed_website","speed website","manage_options","add_submenu_speed","speed_website_test");}

    function speed_website_test() {
        $active_tab=$_GET['tab'];
?>
<div class="wrap">
<h2 class="nav-tab-wrapper">
    <a href="admin.php?page=add_submenu_speed&tab=tab1" 
    class="nav-tab <?php echo $active_tab=="tab1"?'nav-tab-active':'' ?>">tab 1</a>
    <a href="admin.php?page=add_submenu_speed&tab=tab2" 
    class="nav-tab <?php echo $active_tab=="tab2"?'nav-tab-active':''?>">tab 2</a>
</h2>
</div>
<?php 
if($active_tab=="tab1"){
    ?>
    <form action="" method="post" style="width:150px">
    <div style="display: block; margin-top:20px;">
        <label for="">active cache</label>
        <input type="checkbox" name="active_cache" value="1">
    </div>
    <div style="display: block; margin-top:10px;">
        <label for="">clear cache</label>
        <input type="checkbox" name="clear_cache" value="1">

    </div>
    <input type="submit" style="background-color:green; 
    padding:3px 10px; margin-top:20px; border:none;
     color:aliceblue;" name="submit" value="submit">

</form>
<?php
}
else if ($active_tab=="tab2"){
    echo "tab 2 content";
}
    }