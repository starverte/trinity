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

}
add_action( 'after_setup_theme', 'trinity_after_setup_theme', 20 );
