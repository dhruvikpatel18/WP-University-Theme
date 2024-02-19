<?php

// Include the header template
get_header(); ?>

<!-- Page Banner Section -->
<div class="page-banner">
    <!-- Background Image -->
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg'); ?>);"></div>
    
    <!-- Content Container -->
    <div class="page-banner__content container container--narrow">
        <!-- Page Title (Reflects the archive title) -->
        <h1 class="page-banner__title"><?php the_archive_title(); ?></h1>
        
        <!-- Page Banner Introduction (Reflects the archive description) -->
        <div class="page-banner__intro">
            <p><?php the_archive_description(); ?></p>
        </div>
    </div>
</div>

<!-- Main Content Section -->
<div class="container container--narrow page-section">
    <?php
    // Start the WordPress loop to display posts in the archive
    while (have_posts()) {
        // Setup the current post data
        the_post(); ?>
        
        <!-- Individual Post Item -->
        <div class="post-item">
            <!-- Post Title with Link to Full Post -->
            <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            
            <!-- Metabox for Post Information -->
            <div class="metabox">
                <!-- Post Author, Date, and Categories -->
                <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('n.j.y'); ?> in <?php echo get_the_category_list(', '); ?></p>
            </div>

            <!-- Post Excerpt -->
            <div class="generic-content">
                <?php the_excerpt(); ?>
                <!-- "Continue Reading" Button with Link to Full Post -->
                <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p>
            </div>
        </div>
    <?php }
    // Pagination links for navigating through the archive pages
    echo paginate_links();
    ?>
</div>

<?php
// Include the footer template
get_footer();
?>
