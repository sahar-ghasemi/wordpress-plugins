<?php

add_action("add_meta_boxes","add_meta_box_video");

function add_meta_box_video(){
    add_meta_box(
        "meta_box_id",
        "Video",
        "add_data_to_video_box",
        "post",
        "side",
        "high"
    );
}
function add_data_to_video_box($post){
   ?>
   <label for="video_url">video</label>
    <input type="text" value="<?php echo get_metadata('post',$post->ID,'_video',true); ?>" id="video_url" 
    name="video_url" placeholder="Enter video URL">
<br >
    <label for="video_id" style="margin-top: 10px;">id</label>
    <input type="text" id="video_id" value="<?php echo get_metadata('post',$post->ID,'_video_ID',true); ?>"
    name="video_id" placeholder="Enter video id" style="margin-top: 10px; margin-left:20px;" >
   <?php 
}
function add_metadata_video($post_id){
    $url=sanitize_text_field($_POST['video_url']);
   $id= sanitize_text_field($_POST['video_id']);
    if(!get_metadata('post',$post_id,'_video',$url))
    {
        if(!empty($_POST['video_url'] && $_POST['video_id'])){
        add_metadata('post',$post_id,'_video',$url);
        add_metadata('post',$post_id,'_video_ID',$id);
    }


    }else{
            update_metadata('post',$post_id,'_video',$url);
            update_metadata('post',$post_id,'_video_ID',$id);
    }
}
add_action('save_post', 'add_metadata_video');
