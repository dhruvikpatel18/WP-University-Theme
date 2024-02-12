<?php

// Define a function to enqueue the main stylesheet
function university_files() {
    // Enqueue the 'university_main_styles' stylesheet using get_stylesheet_uri()
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}

// Hook the 'university_files' function into the 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'university_files');
