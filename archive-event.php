<?php

// Include the header template
get_header(); ?>

<!-- Page Banner Section -->
<div class="page-banner">
  <!-- Background image for the page banner -->
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
  
  <!-- Content within the page banner -->
  <div class="page-banner__content container container--narrow">
    <!-- Title of the page banner -->
    <h1 class="page-banner__title">All Events</h1>
    
    <!-- Introduction text for the page banner -->
    <div class="page-banner__intro">
      <p>See what is going on in our world.</p>
    </div>
  </div>  
</div>

<!-- Main Content Section -->
<div class="container container--narrow page-section">
  <?php
    // Loop through the available posts/pages
    while(have_posts()) {
      the_post(); ?>
      
      <!-- Event Summary Section -->
      <div class="event-summary">
        <!-- Date of the event -->
        <a class="event-summary__date t-center" href="#">
          <span class="event-summary__month"><?php the_time( 'M' ); ?></span>
          <span class="event-summary__day"><?php the_time( 'd' ); ?></span>  
        </a>
        
        <!-- Content of the event summary -->
        <div class="event-summary__content">
          <!-- Title of the event summary with a link to the full post -->
          <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
          
          <!-- Shortened content of the event with a link to the full post -->
          <p><?php echo wp_trim_words(get_the_content(), 18); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
        </div>
      </div>
    <?php }
    
    // Display pagination links
    echo paginate_links();
  ?>
</div>

<?php 

// Include the footer template
get_footer();

?>
