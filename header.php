<!DOCTYPE html>
<html>

<head>
	<!-- WordPress hook for adding elements in the head section -->
	<?php wp_head(); ?>
</head>

<body>
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
						<li><a href="<?php echo site_url( '/about-us' ); ?>">About Us</a></li>
						<li><a href="#">Programs</a></li>
						<li><a href="#">Events</a></li>
						<li><a href="#">Campuses</a></li>
						<li><a href="#">Blog</a></li>
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
