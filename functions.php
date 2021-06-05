<?php

// Theme assets
function freelancer_assets() {
   // Load fonts
   wp_enqueue_style('montserrat-font', '//fonts.googleapis.com/css?family=Montserrat:400,700');
   wp_enqueue_style('lato-font', '//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');

   // Styles
   wp_enqueue_style('font-awesome', get_template_directory_uri() . '/vendor/fontawesome-free/css/all.min.css');
   wp_enqueue_style('styles', get_template_directory_uri() . '/css/freelancer.min.css');

   // Scripts
   wp_deregister_script('jquery');

   wp_enqueue_script('jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array(), '1.0', true);

   wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0', true);

   wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/vendor/jquery-easing/jquery.easing.min.js', array(), '1.0', true);

   wp_enqueue_script('bootstrap-validator', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array(), '1.0', true);

   wp_enqueue_script('contact-me', get_template_directory_uri() . '/js/contact_me.js', array(), '1.0', true);

   wp_enqueue_script('scripts', get_template_directory_uri() . '/js/freelancer.min.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'freelancer_assets');

// Theme supports
function freelancer_features() {
   // Post thumbnail (Featured image)
   add_theme_support('post-thumbnails');

   // Post formats
   add_theme_support( 'post-formats', [ 'image', 'video' ] );
}

add_action('after_setup_theme', 'freelancer_features');

// Custom Post Types
function freelancer_post_types() {
   // Profile Post Type
   register_post_type('profile', array(
      'supports' => array('title'),
      'public' => true,
      'labels' => array(
          'name' => 'Profile',
          'add_new_item' => 'Add New Profile',
          'edit_item' => 'Edit Profile',
          'singular_name' => 'Profile'
      ),
      'menu_icon' => 'dashicons-businesswoman'
  ));

  // Portfolio Post Type
  register_post_type('portfolio', array(
   'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'post-formats'),
   // 'rewrite' => array('slug' => 'portfolio'),
   'has_archive' => true,
   'public' => true,
   'labels' => array(
       'name' => 'Portfolio',
       'add_new_item' => 'Add New Portfolio',
       'edit_item' => 'Edit Portfolio',
       'all_items' => 'All Portfolio Items',
       'singular_name' => 'Portfolio'
      ),
      'menu_icon' => 'dashicons-forms'
   ));

   // About Post Type
   register_post_type('about', array(
      'supports' => array('title', 'editor', 'excerpt'),
      'public' => true,
      'labels' => array(
          'name' => 'About',
          'add_new_item' => 'Add About You',
          'edit_item' => 'Edit About',
          'singular_name' => 'About'
      ),
      'menu_icon' => 'dashicons-text-page'
  ));

  // Social Media Post Type
  register_post_type('contact-info', array(
     'supports' => array('title'),
      'public' => true,
      'labels' => array(
         'name' => 'Contact Info',
         'add_new_item' => 'Add Contact Info',
         'edit_item' => 'Edit Contact Info',
         'singular_name' => 'Contact Info'
      ),
      'menu_icon' => 'dashicons-twitter'
  ));
}

add_action('init', 'freelancer_post_types');

// Adding video support (Featured video thumbnail)
function custom_upload_mimes ( $existing_mimes = array() ) {

$existing_mimes['.mp4'] = 'video/mp4';
$existing_mimes['mp4'] = 'video/mp4';

// Add docx (msword) file type support
// $existing_mimes['doc'] = 'application/msword';

return $existing_mimes;

}

add_filter('mime_types', 'custom_upload_mimes');