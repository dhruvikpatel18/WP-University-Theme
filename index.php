<?php
// Include the header template
get_header();

// Start the WordPress loop to display posts
while (have_posts()) {
    // Setup the current post data
    the_post(); ?>

    <!-- Display the post title as a clickable link to the post -->
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <!-- Display the post content -->
    <?php the_content(); ?>

    <!-- Horizontal line to separate posts -->
    <hr>

<?php
}

// Include the footer template
get_footer();
?>
