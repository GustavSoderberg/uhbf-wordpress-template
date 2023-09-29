<?php

//Function to add custom CSS for the block editor
function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );
add_theme_support('editor-styles');
add_editor_style( 'editor-style.css' );

//Creates a menu for the Header
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'belgotraffen-menu' => __( 'Belgotraffen Menu' ),
      'surolstraffen-menu' => __( 'Surolstraffen Menu' ),
      'fler-evenemang-menu' => __( 'Fler evenemang Menu' ),
      'for-medlemmar-menu' => __( 'For Medlemmar Menu' ),
      'bli-medlem-menu' => __( 'Bli Medlem Menu' ),
      'om-oss-menu' => __( 'Om Oss Menu' ),
     )
   );
 }
 add_action( 'init', 'register_my_menus' );