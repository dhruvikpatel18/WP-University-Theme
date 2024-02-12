<?php

// Include the header template
get_header();

// Start the WordPress loop to display posts
while (have_posts()) {
    // Setup the current post data
    the_post(); ?>

    <!-- Display the post title -->
    <h2><?php the_title(); ?></h2>

    <!-- Display the post content -->
    <?php the_content(); ?>
    
<?php }

// Include the footer template
get_footer();

?>
