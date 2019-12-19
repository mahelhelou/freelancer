<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="This is a WordPress theme for any kind of freelancers who want to show his or her works to the world.">
  <meta name="author" content="Mahmoud El Helou">

  <title>Freelancer Theme</title>

  <!-- Custom fonts for this theme -->
  <!-- Font-awesome, Montserrat font, Lato font -->

  <!-- Theme CSS -->
  <!-- freelancer.min.js -->
  <?php wp_head(); ?>
</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">WordPress Developer</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <?php
        $args = array(
          'post_type' => 'profile',
          'posts_per_page' => 1
        );

        $profile = new WP_Query($args);
        
        while ($profile->have_posts()) {
          $profile->the_post(); ?>

          <!-- Masthead Avatar Image -->
          <img class="masthead-avatar mb-5 rounded-circle" src="<?php echo get_field('profile_image')['url']; ?>" alt="Profile Image">
          <!-- <span class="mb-2"><?php // the_field('slogan'); ?></span> -->

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

          <!-- Masthead Subheading -->
          <p class="masthead-subheading font-weight-bold mb-0"> 
            <?php echo get_field('skill_1') . ' - ' . get_field('skill_2') . ' - ' . get_field('skill_3'); ?>
          </p>
        <?php }
        wp_reset_postdata();
      ?>

    </div>
  </header>

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
      <div class="row">

        <!-- Portfolio Items -->
        <?php
          $args = array(
            'post_type' => 'portfolio',
            'posts_per_page' => 6
          );
          $portfolio = new WP_Query($args);

          while ($portfolio->have_posts()) {
            $portfolio->the_post(); ?>

            <div class="col-md-6 col-lg-4">
              <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal<?php the_ID(); ?>">
                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                  <div class="portfolio-item-caption-content text-center text-white">
                    <i class="fas fa-plus fa-3x"></i>
                  </div>
                </div>
                <img class="img-fluid" src="<?php echo get_field('portfolio_image')['url']; ?>" alt="">
              </div>
            </div>

            <!-- Portfolio Modals -->
            <!-- Portfolio Modal 1 -->
            <div class="portfolio-modal modal fade" id="portfolioModal<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
              <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">
                      <i class="fas fa-times"></i>
                    </span>
                  </button>
                  <div class="modal-body text-center">
                    <div class="container">
                      <div class="row justify-content-center">
                        <div class="col-lg-8">
                          <!-- Portfolio Modal - Title -->
                          <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"><?php the_title(); ?></h2>
                          <!-- Icon Divider -->
                          <div class="divider-custom">
                            <div class="divider-custom-line"></div>
                            <div class="divider-custom-icon">
                              <i class="fas fa-star"></i>
                            </div>
                            <div class="divider-custom-line"></div>
                          </div>
                          <!-- Portfolio Modal - Image -->
                          <img class="img-fluid rounded mb-5" src="<?php echo get_field('portfolio_image')['url']; ?>" alt="">
                          <!-- Portfolio Modal - Text -->
                          <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                          <button class="btn btn-primary" href="#" data-dismiss="modal">
                            <i class="fas fa-times fa-fw"></i>
                            Close Window
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php }
          wp_reset_postdata();
        ?>

      </div>
      <!-- /.row -->
    </div>
  </section>

  <!-- About Section -->
  <section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white">About Me</h2>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- About Section Content -->
      <div class="row">
        <?php
          $args = array(
            'post_type' => 'about',
            'posts_per_page' => 2
          );

          $about = new WP_Query($args);

          while ($about->have_posts()) {
            $about->the_post(); ?>

            <div class="col-lg-4 ml-auto">
                <p class="lead">
                  <?php the_field('first_paragraph'); ?>
                </p>
              </div>
              <div class="col-lg-4 mr-auto">
                <p class="lead">
                  <?php the_field('second_paragraph'); ?>
                </p>
              </div>
            </div>

            <!-- About Section Button -->
            <div class="text-center mt-4">
              <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/themes/freelancer/">
                <i class="fas fa-download mr-2"></i>
                Free Download!
              </a>
            </div>

          <?php }
        ?>

    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <form name="sentMessage" id="contactForm" novalidate="novalidate">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Name</label>
                <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email Address</label>
                <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Phone Number</label>
                <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Message</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </section>

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
            <br><?php the_field('building'); ?></p>
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
            <a target="_blank" href="<?php the_field('hiring_profile'); ?>">Upwork Profile</a>.</p>
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
      <small> <?php $startYear = 2019; if (date('Y') == $startYear) echo 'Copyright - &copy;' . date('Y'); else echo 'Copyright - &copy; ' . $startYear .  ' - ' . date('Y'); ?></small>
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