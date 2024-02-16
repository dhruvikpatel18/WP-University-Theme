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

	<?php
	// Get the ID of the parent post (if it exists) for the current post
	$theParent = wp_get_post_parent_id( get_the_ID() );

	// Check if the current post has a parent
	if ( $theParent ) {
		?>
		<!-- Metabox for Navigation Links -->
		<div class="metabox metabox--position-up metabox--with-home-link">
			<!-- Link to navigate back to the parent post -->
			<p><a class="metabox__blog-home-link" href="<?php echo get_permalink( $theParent ); ?>">
					<!-- Home icon -->
					<i class="fa fa-home" aria-hidden="true"></i> 
					<!-- Link text: "Back to" followed by the parent post title -->
					Back to <?php echo get_the_title( $theParent ); ?>
				</a> 
				<!-- Main content of the metabox: Current post title -->
				<span class="metabox__main"><?php the_title(); ?></span>
			</p>
		</div>
		<?php
	}
	?>

	<?php
	// Get the ID of the parent post (if it exists) for the current post
	$theParent = wp_get_post_parent_id( get_the_ID() );

	// Get an array of child pages for the current post
	$testArray = get_pages(
		array(
			'child_of' => get_the_ID(),
		)
	);

	// Check if the current post has a parent or child pages
	if ( $theParent or $testArray ) {
		?>
		<!-- Page Links Section -->
		<div class="page-links">
			<!-- Heading with a link to the parent post (if it exists) -->
			<h2 class="page-links__title"><a href="<?php echo get_permalink( $theParent ); ?>"><?php echo get_the_title( $theParent ); ?></a></h2>
			<!-- Unordered list for child pages -->
			<ul class="min-list">
				<?php
				// Determine the ID to find children of
				if ( $theParent ) {
					$findChildrenOf = $theParent;
				} else {
					$findChildrenOf = get_the_ID();
				}

				// List child pages with specified parameters
				wp_list_pages(
					array(
						'title_li'    => null,             // Exclude the default title list item
						'child_of'    => $findChildrenOf,  // Show children of the specified ID
						'sort_column' => 'menu_order',   // Sort by menu order
					)
				);
				?>
			</ul>
		</div>
		<?php } ?>

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
