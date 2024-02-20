<?php
  // Include the header template
  get_header();

  // Loop through the available posts/pages
  while(have_posts()) {
    the_post(); ?>
    
    <!-- Page Banner Section -->
    <div class="page-banner">
      <!-- Background image for the page banner -->
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
      
      <!-- Content within the page banner -->
      <div class="page-banner__content container container--narrow">
        <!-- Title of the page -->
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        
        <!-- Introduction text for the page banner -->
        <div class="page-banner__intro">
          <p>DONT FORGET TO REPLACE ME LATER</p>
        </div>
      </div>
    </div>

    <!-- Main Content Section -->
    <div class="container container--narrow page-section">
      
      <!-- Metabox for displaying a link to the Events Home page and the current page title -->
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <!-- Link to Events Home page -->
          <a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('event'); ?>">
            <i class="fa fa-home" aria-hidden="true"></i> Events Home
          </a> 
          
          <!-- Separator -->
          <span class="metabox__main"><?php the_title(); ?></span>
        </p>
      </div>

      <!-- Content of the post/page -->
      <div class="generic-content"><?php the_content(); ?></div>

    </div>
  <?php }

  // Include the footer template
  get_footer();
?>
