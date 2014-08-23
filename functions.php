<?php
/**
 * Trinity functions and definitions
 *
 * @package Flint/Trinity
 * @since 1.0
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function trinity_after_setup_theme() {

  unregister_nav_menu( 'primary' );

  register_nav_menus( array(
    'screen-lg' => __( 'Large Desktops', 'trinity' ),
    'screen-md' => __( 'Desktops'      , 'trinity' ),
    'screen-sm' => __( 'Tablets'       , 'trinity' ),
    'screen-xs' => __( 'Phones'        , 'trinity' ),
  ) );
  
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 150, 150 );
  
  add_image_size('small-icon',   32,  32, true);
  add_image_size('large-icon',   64,  64, true);
  add_image_size('profile',     120, 150, true);
  add_image_size('next-steps',  220, 125, true);
  add_image_size('podcast',     300, 300, true);
  add_image_size('small-title', 400, 225, true);
  add_image_size('large-title', 640, 360, true);

}
add_action( 'after_setup_theme', 'trinity_after_setup_theme', 20 );


