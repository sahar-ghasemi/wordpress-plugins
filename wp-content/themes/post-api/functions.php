<?php 
function excerpt_limit(){
    $excerpt=get_the_excerpt();
    
    return substr($excerpt,0,150)."...";
}

 add_theme_support("post-thumbnails");