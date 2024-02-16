<?php

// Include the header template
get_header();

// Start the WordPress loop to display pages
while ( have_posts() ) {
	// Setup the current page data
	the_post(); ?>

	<!-- Page Banner Section -->
	<div class="page-banner">
		<!-- Background Image -->
		<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri( '/images/ocean.jpg' ); ?>);"></div>
		
		<!-- Content Container -->
		<div class="page-banner__content container container--narrow">
			<!-- Page Title -->
			<h1 class="page-banner__title"><?php the_title(); ?></h1>
			<!-- Intro Text (to be replaced later) -->
			<div class="page-banner__intro">
				<p>DONT FORGET TO REPLACE ME LATER</p>
			</div>
		</div>
	</div>

	<!-- Main Content Section -->
	<div class="container container--narrow page-section">

		<!-- Metabox for Navigation Links -->
		<div class="metabox metabox--position-up metabox--with-home-link">
			<!-- Back to About Us Link and Current Page Title -->
			<p><a class="metabox__blog-home-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Back to About Us</a> <span class="metabox__main">Our History</span></p>
		</div>

		<!-- Page Links Section -->
		<div class="page-links">
			<!-- About Us Section Title -->
			<h2 class="page-links__title"><a href="#">About Us</a></h2>
			<!-- Navigation Links -->
			<ul class="min-list">
				<li class="current_page_item"><a href="#">Our History</a></li>
				<li><a href="#">Our Goals</a></li>
			</ul>
		</div>

		<!-- Generic Content Section -->
		<div class="generic-content">
			<!-- Display the content of the page -->
			<?php the_content(); ?>
		</div>

	</div>

<?php }

// Include the footer template
get_footer();

?>
