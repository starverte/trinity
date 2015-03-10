<?php
/**
 * Trinity functions and definitions
 *
 * @package Flint/Trinity
 * @since 0.1
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

/**
 * Enqueue scripts
 */
function trinity_enqueue_scripts() {
  /**
   * If using Give page template, loads Javascript
   */
  if (is_page_template('templates/give.php')) {
    wp_enqueue_script( 'give-form', get_stylesheet_directory_uri() . '/js/give.js', array('jquery') );
  }
}
add_action( 'wp_enqueue_scripts', 'trinity_enqueue_scripts' );
