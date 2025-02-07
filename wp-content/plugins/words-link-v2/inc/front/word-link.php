<?php

add_filter('the_content','change_words_to_link');

function change_words_to_link($content) {
    $words=get_option("_wl_words_links");

    foreach($words as $ $word){
        $replace='<a href="http://localhost/category/$word/">$word</a>';
      $content=  str_replace($word,$replace,$content);

    }
    return $content;
}