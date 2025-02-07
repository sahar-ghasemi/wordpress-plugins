<h1> All USERS</h1>

<table class="widefat">
    <thead>
        <tr>
        <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Role</th>
            <th>Operation</th>
        </tr>
    </thead>
    <?php
    $args=[
        "orderby"=>"ID",
        "order"=>"ASC",
    ];
$userLists=get_users($args);
?>
    <tbody>
   <?php     
   foreach($userLists as $user):
?>
<tr>
    <td><?php echo esc_html($user->ID); ?></td>
    <td> <?php echo esc_html($user->user_login); ?></td>
    <td><?php echo esc_html($user->user_email); ?></td>
    <td><?php echo get_user_meta($user->ID,"_phone",true);?></td>
    <td>
        <?php 
        $getuser=new wp_user($user->ID);
        echo $getuser->roles[0];
        ?>
    </td>
    <td>
       <a href="<?php echo $_SERVER["REQUEST_URI"] ."&action=delete&id=".$user->ID; ?>">
     <span class="dashicons dashicons-trash"></span>
    </a>
       <a href="<?php echo $_SERVER["REQUEST_URI"]."&action=update&id=".$user->ID; ?> ">
        <span class="dashicons dashicons-update"></span></td>
   </a>
</tr>
<?php endforeach; ?>
    </tbody>
</table>



