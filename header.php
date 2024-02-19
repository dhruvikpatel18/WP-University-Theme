<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Set the character set based on WordPress settings -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	
	<!-- Set the viewport for responsive design -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- WordPress hook for adding elements in the head section -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Header Section -->
	<header class="site-header">
		<div class="container">
			<!-- School Logo -->
			<h1 class="school-logo-text float-left">
				<a href="<?php echo site_url(); ?>"><strong>WP</strong> University</a>
			</h1>

			<!-- Search Trigger -->
			<span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>

			<!-- Menu Trigger -->
			<i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>

			<!-- Site Menu -->
			<div class="site-header__menu group">
				<!-- Main Navigation -->
				<nav class="main-navigation">
				<ul>
					<!-- About Us Menu Item -->
					<li 
					<?php
					if ( is_page( 'about-us' ) or wp_get_post_parent_id( 0 ) == 16 ) {
						echo 'class="current-menu-item"';}
					?>
					>
						<a href="<?php echo site_url( '/about-us' ); ?>">About Us</a>
					</li>

					<!-- Programs Menu Item -->
					<li><a href="#">Programs</a></li>

					<!-- Events Menu Item -->
					<li><a href="#">Events</a></li>

					<!-- Campuses Menu Item -->
					<li><a href="#">Campuses</a></li>

					<!-- Blog Menu Item -->
					<li 
					<?php
					if ( get_post_type() == 'post' ) {
						echo 'class="current-menu-item"';}
					?>
					>
						<a href="<?php echo site_url( '/blog' ); ?>">Blog</a>
					</li>
				</ul>

				</nav>

				<!-- Utility Links (Login, Sign Up, Search) -->
				<div class="site-header__util">
					<a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
					<a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
					<span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
				</div>
			</div>
		</div>
	</header>
