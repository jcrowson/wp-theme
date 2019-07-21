<?php

  function main_script_create() {
    wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/assets/code.css', array(), '1.0.3', 'all');
  }

  add_action('wp_enqueue_scripts', 'main_script_create');

  function disable_emojis() {
   remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  }
  add_action( 'init', 'disable_emojis' );

  function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

  function check_active_menu( $menu_item ) {
    $actual_link = ( isset( $_SERVER['HTTPS'] ) ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    if ( $actual_link == $menu_item->url ) {
        return 'active';
    }
    return '';
  }
