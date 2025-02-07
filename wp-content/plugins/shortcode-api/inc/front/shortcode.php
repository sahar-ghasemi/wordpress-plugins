<?php

add_shortcode("text","add_text_to_the_site");

// //use [text] code 
// function add_text_to_the_site() {
//     return "<h2>welcome to the site</h2>";
// }


//use [text]welcome to the site[/text] code 
// function add_text_to_the_site($attr,$content) {
//     return '<h2>'.$content.'</h2>';
// }

//use [text href="http://example.com"]welcome to the site[/text] code 
function add_text_to_the_site($attr,$content) {
    return '<a href="'.$attr["href"].'">'.$content.'</a>';
}