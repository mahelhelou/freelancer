<!-- Footer -->
<footer class="footer text-center">
  <div class="container">
    <div class="row">

      <?php
        $args = array(
          'post_type' => 'contact-info',
          'posts_per_page' => 1
        );

        $contactInfo = new WP_Query($args);

        while ($contactInfo->have_posts()) {
          $contactInfo->the_post(); ?>

      <!-- Footer Location -->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <h4 class="text-uppercase mb-4">Location</h4>
        <p class="lead mb-0"><?php the_field('town'); ?>
          <br><?php the_field('building'); ?>
        </p>
      </div>

      <!-- Footer Social Icons -->
      <div class="col-lg-4 mb-5 mb-lg-0">
        <h4 class="text-uppercase mb-4">Around the Web</h4>
        <a target="_blank" class="btn btn-outline-light btn-social mx-1" href="<?php the_field('facebook'); ?>">
          <i class="fab fa-fw fa-facebook-f"></i>
        </a>
        <a target="_blank" class="btn btn-outline-light btn-social mx-1" href="<?php the_field('twitter'); ?>">
          <i class="fab fa-fw fa-twitter"></i>
        </a>
        <a target="_blank" class="btn btn-outline-light btn-social mx-1" href="<?php the_field('linkedin'); ?>">
          <i class="fab fa-fw fa-linkedin-in"></i>
        </a>
        <a target="_blank" class="btn btn-outline-light btn-social mx-1" href="<?php get_field('behance'); ?>">
          <i class="fab fa-fw fa-behance"></i>
        </a>
      </div>

      <!-- Footer About Text -->
      <div class="col-lg-4">
        <h4 class="text-uppercase mb-4">See My Projects</h4>
        <p class="lead mb-0">You can see my projects and clients' feedback by visiting this link
          <a target="_blank" href="<?php the_field('hiring_profile'); ?>">Upwork Profile</a>.
        </p>
      </div>

      <?php }
          wp_reset_postdata();
        ?>
    </div>
  </div>
</footer>

<!-- Copyright Section -->
<section class="copyright py-4 text-center text-white">
  <div class="container">
    <small>
      <?php $startYear = 2019; if (date('Y') == $startYear) echo 'Copyright - &copy;' . date('Y'); else echo 'Copyright - &copy; ' . $startYear .  ' - ' . date('Y'); ?></small>
  </div>
</section>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
  <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
    <i class="fa fa-chevron-up"></i>
  </a>
</div>

<!-- Bootstrap core JavaScript -->
<!-- // ['vendor/jquery/jquery.min.js', 'vendor/bootstrap/js/bootstrap.bundle.min.js'] -->

<!-- Plugin JavaScript -->
<!-- vendor/jquery-easing/jquery.easing.min.js -->

<!-- Contact Form JavaScript -->
<!-- // ['js/jqBootstrapValidation.js', 'js/contact_me.js'] -->

<!-- Custom scripts for this template -->
<!-- js/freelancer.min.js -->
<?php wp_footer(); ?>
</body>

</html>