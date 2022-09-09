<?php 
  add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles');

  function add_scripts_and_styles() {
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', null, 'footer');

    wp_enqueue_style( 'fonts', get_template_directory_uri(  ) . '/assets/css/fonts.css');
    wp_enqueue_style( 'main', get_stylesheet_uri(), array('fonts') );
  }
?>