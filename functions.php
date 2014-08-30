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

  register_nav_menus( array(
    'footer1'   => __( 'Sitemap Left' , 'trinity' ),
    'footer2'   => __( 'Sitemap Right', 'trinity' ),
    'footer3'   => __( 'Social Links' , 'trinity' ),
  ) );

}
add_action( 'after_setup_theme', 'trinity_after_setup_theme', 20 );

