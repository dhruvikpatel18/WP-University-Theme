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

// Define a custom function to register a custom post type for 'event'
function university_post_types() {
	// Register the custom post type 'event'
	register_post_type('event', array(
	  'rewrite' => array('slug' => 'events'), // Set the URL slug to 'events'
	  'has_archive' => true, // Enable archive page for this custom post type
	  'public' => true, // Make the custom post type publicly accessible
	  'show_in_rest' => true, // Enable support for the Gutenberg block editor and REST API
	  'labels' => array(
		'name' => 'Events', // Plural name for the custom post type in the admin menu
		'add_new_item' => 'Add New Event', // Label for adding a new event
		'edit_item' => 'Edit Event', // Label for editing an event
		'all_items' => 'All Events', // Label for displaying all events
		'singular_name' => 'Event' // Singular name for the custom post type
	  ),
	  'menu_icon' => 'dashicons-calendar' // Specify a Dashicon as the menu icon (calendar icon in this case)
	));
  }
  
  // Hook the university_post_types function to the 'init' action to register the custom post type during WordPress initialization
  add_action('init', 'university_post_types');
  