<?php get_header(); ?>

<!-- This page made for testing and learning purposes... -->

<header class="masthead bg-primary text-white text-center">
  <div class="container d-flex align-items-center flex-column">

    <!-- Masthead Heading -->
    <h1 class="masthead-heading text-uppercase mb-0"><?php the_title(); ?></h1>

    <!-- Icon Divider -->
    <div class="divider-custom divider-light">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon">
        <i class="fas fa-star"></i>
      </div>
      <div class="divider-custom-line"></div>
    </div>

  </div>
</header>

<!-- Page content -->
<section class="py-5">
  <div class="container">
  <?php
    if ( have_posts() ) {
      while ( have_posts() ) {
        the_post();

        the_content();
      }
    } else {
      echo '<p>Sorry, no content found!</p>';
    }
  ?>
  </div>
</section>

<?php get_footer(); ?>