<?php

//Styles and Scripts
function custom_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri());
  wp_enqueue_style( 'Font Awesome', get_bloginfo('template_url') . '/css/font-awesome.min.css');
  wp_enqueue_style( 'Themify Icons', get_bloginfo('template_url') . '/css/themify-icons.css');
  wp_enqueue_style( 'Bootstrap-css', get_bloginfo('template_url') . '/css/bootstrap.css');
  wp_enqueue_style( 'Theme', get_bloginfo('template_url') . '/css/theme.css');
  wp_enqueue_style( 'Custom', get_bloginfo('template_url') . '/css/custom.css');
  wp_enqueue_style( 'Fonts', 'http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' );
  wp_enqueue_style( 'FlexSlider-css', get_bloginfo('template_url') . '/css/flexslider.css');

  wp_enqueue_script( 'jQuery', get_bloginfo('template_url') . '/js/jquery.min.js');
  wp_enqueue_script( 'Bootstrap-js', get_bloginfo('template_url') . '/js/bootstrap.min.js');
  wp_enqueue_script( 'Scripts', get_bloginfo('template_url') . '/js/scripts.js');
  wp_enqueue_script( 'FlexSlider-js', get_bloginfo('template_url') . '/js/flexslider.min.js');
}

add_action('wp_enqueue_scripts','custom_scripts');

//Menu Registration
function register_my_menus() {
  register_nav_menus(
    array(
      'navigation-menu' => __( 'Navigation Menu' )
    )
  );
}

add_action( 'init', 'register_my_menus' );

 ?>
