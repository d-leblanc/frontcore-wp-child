<?php
// Get the child theme main stylesheet
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 999 );

function theme_enqueue_styles() {
    wp_register_style('child_style', get_stylesheet_directory_uri().'/style.css', array(), '1.0', 'all');
    wp_enqueue_style('child_style'); // Enqueue it!
}

function assets(){
    return get_stylesheet_directory_uri().'/assets';
}

/*
* Your functions goes here...
*/