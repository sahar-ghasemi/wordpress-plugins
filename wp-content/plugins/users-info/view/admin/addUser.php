<h1>Add New User</h1>

<!--send data to this page-->
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]."?page=add_new_user" ?>">

    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <input type="email" name="email" placeholder="email">
    <!-- phone is going to save in usermeta table -->
<input type="text" name="phone" placeholder="phone" >
<select name="role">
<?php 
$roles=get_editable_roles();
foreach($roles as $role => $details){
    echo '<option value="' . esc_attr($role) . '">' . esc_html($details['name']) . '</option>';
}
?></select>

<button name="submit">Add</button>
</form>


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