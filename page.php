<?php

// Include the header template
get_header();

// Start the WordPress loop to display pages
while (have_posts()) {
    // Setup the current page data
    the_post(); ?>

    <!-- Display a static heading for all pages -->
    <h1>This is a page not a post</h1>

    <!-- Display the dynamic page title -->
    <h2><?php the_title(); ?></h2>

    <!-- Display the dynamic page content -->
    <?php the_content(); ?>
    
<?php }

// Include the footer template
get_footer();

?>
