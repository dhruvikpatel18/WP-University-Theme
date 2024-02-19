<?php

// Include the header template
get_header();

// Start the WordPress loop to display content
while (have_posts()) {
    // Setup the current post data
    the_post(); ?>
    
    <!-- Page Banner Section -->
    <div class="page-banner">
        <!-- Background Image -->
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg'); ?>);"></div>
        
        <!-- Content Container -->
        <div class="page-banner__content container container--narrow">
            <!-- Page Title -->
            <h1 class="page-banner__title"><?php the_title(); ?></h1>
            
            <!-- Page Banner Introduction (To be replaced later) -->
            <div class="page-banner__intro">
                <p>DONT FORGET TO REPLACE ME LATER</p>
            </div>
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="container container--narrow page-section">
        <!-- Metabox for Navigation Links -->
        <div class="metabox metabox--position-up metabox--with-home-link">
            <!-- Link to navigate back to the Blog Home -->
            <p><a class="metabox__blog-home-link" href="<?php echo site_url('/blog'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Blog Home</a> 
                
                <!-- Metabox Main Content: Post information -->
                <span class="metabox__main">Posted by <?php the_author_posts_link(); ?> on <?php the_time('n-j-y'); ?> in <?php echo get_the_category_list(', '); ?></span>
            </p>
        </div>

        <!-- Generic Content Section -->
        <div class="generic-content">
            <!-- Display the content of the post -->
            <?php the_content(); ?>
        </div>
    </div>

<?php }

// Include the footer template
get_footer();

?>
