<?php

add_action("init","add_new_role");
function add_new_role() {
    add_role("vip","vip", array(
        "read"=> true,
    ));
}

$role=get_role("vip");
// default capabilities
$role->add_cap("edit_posts");
$role->add_cap("edit_published_post");
$role->add_cap("edit_other_posts");

// custom capabilities
$role->add_cap("read_vip_content");