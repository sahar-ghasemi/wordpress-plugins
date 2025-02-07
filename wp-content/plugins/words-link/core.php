<?php

/*
Plugin Name: Words link
Plugin URI: http://wordpress.org/plugins/words-link
Description: Create Link with words
Author: Sahar Ghasemi
Version: 1.0.0
Author URI: http://saharghasemi@gmail.com
*/

add_filter('the_content','change_words_to_link');

function change_words_to_link($content) {
    $words=['WordPress','CMS'];
    foreach($words as $ $word){
        $replace='<a href="http://localhost/category/$word/">$word</a>';
      $content=  str_replace($word,$replace,$content);

    }
    return $content;
}