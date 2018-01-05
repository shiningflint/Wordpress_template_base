<?php
  function add_resources(){
    wp_enqueue_style('style', get_stylesheet_directory_uri().'/css/style.css');
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', true);
  }

// the function below removes the WYSIWYG editor
/*  function init_remove_support(){
    $post_type = 'post';
    remove_post_type_support( $post_type, 'editor');
  }*/

  /*add_action('init', 'init_remove_support',100);*/
  add_action('wp_enqueue_scripts', 'add_resources');
?>
