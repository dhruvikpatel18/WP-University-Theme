<?php get_header(); ?>

<div class="page-banner">
    <!-- Background image for the page banner -->
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg') ?>);"></div>

    <!-- Content for the page banner -->
    <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>
        <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
        <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3>
        <a href="#" class="btn btn--large btn--blue">Find Your Major</a>
    </div>
</div>

<div class="full-width-split group">
    <div class="full-width-split__one">
        <div class="full-width-split__inner">
            <!-- Upcoming Events Section -->
            <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>

            <!-- Individual Event Summary -->
            <div class="event-summary">
                <!-- Event date and link -->
                <a class="event-summary__date t-center" href="#">
                    <span class="event-summary__month">Mar</span>
                    <span class="event-summary__day">25</span>
                </a>

                <!-- Event content -->
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="#">Poetry in the 100</a></h5>
                    <p>Bring poems you&rsquo;ve written to the 100 building this Tuesday for an open mic and snacks.
                        <a href="#" class="nu gray">Learn more</a>
                    </p>
                </div>
            </div>

            <!-- Another Event Summary -->
            <div class="event-summary">
            <a class="event-summary__date t-center" href="#">
              <span class="event-summary__month">Apr</span>
              <span class="event-summary__day">02</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Quad Picnic Party</a></h5>
              <p>Live music, a taco truck and more can found in our third annual quad picnic day. <a href="#" class="nu gray">Learn more</a></p>
            </div>
          </div>

            <!-- Button to view all events -->
            <p class="t-center no-margin"><a href="#" class="btn btn--blue">View All Events</a></p>
        </div>
    </div>

    <!-- Second Column for Blog Section -->
    <div class="full-width-split__two">
        <div class="full-width-split__inner">
            <!-- From Our Blogs Section -->
            <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>

            <!-- Individual Blog Post Summary -->
            <div class="event-summary">
                <!-- Blog post date and link -->
                <a class="event-summary__date event-summary__date--beige t-center" href="#">
                    <span class="event-summary__month">Jan</span>
                    <span class="event-summary__day">20</span>
                </a>

                <!-- Blog post content -->
                <div class="event-summary__content">
                    <h5 class="event-summary__title headline headline--tiny"><a href="#">We Were Voted Best School</a></h5>
                    <p>For the 100th year in a row, we are voted #1.
                        <a href="#" class="nu gray">Read more</a>
                    </p>
                </div>
            </div>

            <!-- Another Blog Post Summary-->
            <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="#">
              <span class="event-summary__month">Feb</span>
              <span class="event-summary__day">04</span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="#">Professors in the National Spotlight</a></h5>
              <p>Two of our professors have been in national news lately. <a href="#" class="nu gray">Read more</a></p>
            </div>
          </div>

            <!-- Button to view all blog posts -->
            <p class="t-center no-margin"><a href="#" class="btn btn--yellow">View All Blog Posts</a></p>
        </div>
    </div>
</div>

<!-- Hero Slider Section -->
<div class="hero-slider">
    <!-- Glide Track for Slider -->
    <div data-glide-el="track" class="glide__track">
        <!-- Individual Slides -->
        <div class="glide__slides">
            <!-- Slide 1 -->
            <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bus.jpg') ?>);">
                <div class="hero-slider__interior container">
                    <div class="hero-slider__overlay">
                        <h2 class="headline headline--medium t-center">Free Transportation</h2>
                        <p class="t-center">All students have free unlimited bus fare.</p>
                        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/apples.jpg') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">An Apple a Day</h2>
                <p class="t-center">Our dentistry program recommends eating apples.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
          
            <!-- Slide 3 -->
            <div class="hero-slider__slide" style="background-image: url(<?php echo get_theme_file_uri('/images/bread.jpg') ?>);">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center">Free Food</h2>
                <p class="t-center">Fictional University offers lunch plans for those in need.</p>
                <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
        </div>

        <!-- Bullets for Slider Navigation -->
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
    </div>
</div>

<?php get_footer(); ?>
