<?php
require_once('bs4navwalker.php');

$logo_width  = 100;
$logo_height = 84;
add_theme_support(
  'custom-logo',
  array(
    'height'               => $logo_height,
    'width'                => $logo_width,
    'flex-width'           => true,
    'flex-height'          => true,
    'unlink-homepage-logo' => true,
  )
);

// Register a new navigation menu
function add_Main_Nav() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
// Hook to the init action hook, run our navigation menu function
add_action( 'init', 'add_Main_Nav' );

function themebs_enqueue_styles() {
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/libraries/bootstrap/css/bootstrap.min.css' );
  wp_enqueue_style( 'lineicons', get_template_directory_uri() . '/assets/libraries/LineIcons/WebFont/font-css/LineIcons.css' );
  wp_enqueue_style( 'uiicons', get_template_directory_uri() . '/assets/libraries/uicons/css/uicons-regular-rounded.css' );
  wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles');

function themebs_enqueue_scripts() {
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/libraries/bootstrap/js/bootstrap.bundle.min.js',
  array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');