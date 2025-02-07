<?php

add_action('wp_dashboard_setup','add_widget_for_general_information');

function add_widget_for_general_information(){
//add custom widget
wp_add_dashboard_widget("general_widget","General Info","add_value_in_general_information_widget");

// Removing default Dashboard Widgets
remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
}
function add_value_in_general_information_widget(){
    $users=count_users();
  ?>
  <p>Number of website users: <?php echo $users['total_users'] ?></p>  
  <?php

}