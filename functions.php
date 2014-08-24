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
    'footer1'   => __( 'Footer 1'      , 'trinity' ),
    'footer2'   => __( 'Footer 2'      , 'trinity' ),
  ) );

}
add_action( 'after_setup_theme', 'trinity_after_setup_theme', 20 );

/**
 * Enqueue scripts and styles
 */
function trinity_enqueue_scripts() {

  /**
   * Load scriptaculous
   */
  wp_enqueue_script('scriptaculous');
  wp_enqueue_script('scriptaculous-effects');

}
add_action( 'wp_enqueue_scripts', 'trinity_enqueue_scripts', 20 );
