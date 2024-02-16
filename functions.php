<?php

// Enqueue scripts and styles
function university_files() {
	// Enqueue the main JavaScript file
	wp_enqueue_script( 'main-university-js', get_theme_file_uri( '/build/index.js' ), array( 'jquery' ), '1.0', true );

	// Enqueue custom Google Fonts
	wp_enqueue_style( 'custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );

	// Enqueue Font Awesome icons
	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );

	// Enqueue main and extra stylesheet
	wp_enqueue_style( 'university_main_styles', get_theme_file_uri( '/build/style-index.css' ) );
	wp_enqueue_style( 'university_extra_styles', get_theme_file_uri( '/build/index.css' ) );
}

// Hook the function to the wp_enqueue_scripts action
add_action( 'wp_enqueue_scripts', 'university_files' );

// Define a custom function named university_features
function university_features() {
	// Add theme support for dynamic title tags
	// This enables WordPress to manage the document title tag
	// based on the content being viewed
	add_theme_support( 'title-tag' );
}

// Hook the university_features function to the after_setup_theme action
// This ensures that the function is executed after the theme is setup
add_action( 'after_setup_theme', 'university_features' );
