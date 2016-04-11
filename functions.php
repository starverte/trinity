<?php
/**
 * Trinity functions and definitions
 *
 * @package Flint/Trinity
 * @since 0.5.1
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

  add_image_size( 'trinity-hero-card', 825, 465, true );
}
add_action( 'after_setup_theme', 'trinity_after_setup_theme', 20 );

/**
 * Enqueue scripts
 */
function trinity_enqueue_scripts() {
  if (is_front_page()) {
    wp_enqueue_script( 'front-display', get_stylesheet_directory_uri() . '/js/front-page.js', array('jquery'), '0.3.0', true );
  }

  /**
   * If using Give page template, loads Javascript
   */
  if (is_page_template( 'templates/give.php' )) {
    wp_enqueue_script( 'give-form', get_stylesheet_directory_uri() . '/js/give.js', array('jquery'), '0.2.1', true );
    wp_enqueue_script( 'validation', get_stylesheet_directory_uri() . '/js/validation.js', array('jquery'), '0.2.1', true );
  }

  /**
   * If using Japan page template, loads Javascript
   */
  if (is_page_template( 'templates/japan.php' )) {
    wp_enqueue_script( 'japan-form', get_stylesheet_directory_uri() . '/js/japan.js', array('jquery'), '0.2.1', true );
    wp_enqueue_script( 'validation', get_stylesheet_directory_uri() . '/js/validation.js', array('jquery'), '0.2.1', true );
  }
}
add_action( 'wp_enqueue_scripts', 'trinity_enqueue_scripts' );

/**
 * Get option defaults
 *
 * @since 0.4.4
 *
 * @param array $flint_defaults The option defaults for the parent theme.
 */
function trinity_option_defaults( $flint_defaults ) {
  $defaults = array(
    'trinity_front_page_featured'  => 0,
    'trinity_front_page_hero'      => 0,
    'trinity_japan_raised'         => 0,
    'trinity_japan_raised_updated' => '',
    'trinity_japan_up_next'        => '',
  );

  return wp_parse_args( $flint_defaults, $defaults );
}
add_filter( 'flint_option_defaults','trinity_option_defaults' );

/**
 * Register customization options for Trinity
 *
 * @since 0.4.4
 *
 * @param object $wp_customize An instance of the WP_Customize_Manager class.
 */
function trinity_customize_register( $wp_customize ) {

  if ( function_exists( 'flint_options_defaults' ) ) {
    $defaults = flint_options_defaults();
  } else {
    $defaults = flint_get_option_defaults();
  }

  if ( function_exists( 'msx_card_deck_list' ) ) {
    $card_decks = msx_card_deck_list();
  } else {
    $card_decks = steel_get_slides();
  }

  /**
   * Static Front Page section
   */

    /**
     * Hero slider setting
     */
    if ( function_exists( 'msx_sanitize_card_deck_list' ) ) {
      $wp_customize->add_setting('flint_options[trinity_front_page_hero]', array(
        'default'           => $defaults['trinity_front_page_hero'],
        'sanitize_callback' => 'msx_sanitize_card_deck_list',
        'capability'        => 'edit_theme_options',
        'type'              => 'option',
        'transport'         => 'postMessage',
      ));
    } else {
      $wp_customize->add_setting('flint_options[trinity_front_page_hero]', array(
        'default'           => $defaults['trinity_front_page_hero'],
        'sanitize_callback' => 'steel_sanitize_get_slides',
        'capability'        => 'edit_theme_options',
        'type'              => 'option',
        'transport'         => 'postMessage',
      ));
    }
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'trinity_front_page_hero', array(
      'label'    => __( 'Hero slider', 'flint' ),
      'section'  => 'static_front_page',
      'settings' => 'flint_options[trinity_front_page_hero]',
      'priority' => 20,
      'type'     => 'select',
      'choices'  => $card_decks,
    )));

    /**
     * Featured events setting
     */
    if ( function_exists( 'msx_sanitize_card_deck_list' ) ) {
      $wp_customize->add_setting('flint_options[trinity_front_page_featured]', array(
        'default'           => $defaults['trinity_front_page_featured'],
        'sanitize_callback' => 'msx_sanitize_card_deck_list',
        'capability'        => 'edit_theme_options',
        'type'              => 'option',
        'transport'         => 'postMessage',
      ));
    } else {
      $wp_customize->add_setting('flint_options[trinity_front_page_featured]', array(
        'default'           => $defaults['trinity_front_page_featured'],
        'sanitize_callback' => 'steel_sanitize_get_slides',
        'capability'        => 'edit_theme_options',
        'type'              => 'option',
        'transport'         => 'postMessage',
      ));
    }
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'trinity_front_page_featured', array(
      'label'    => __( 'Featured Events', 'flint' ),
      'section'  => 'static_front_page',
      'settings' => 'flint_options[trinity_front_page_featured]',
      'priority' => 30,
      'type'     => 'select',
      'choices'  => $card_decks,
    )));

  /**
   * Japan section
   */
  $wp_customize->add_section( 'trinity_section_japan' , array(
    'title'       => __( 'Japan', 'flint' ),
    'description' => 'Japan 2015 page',
    'priority'    => 200,
  ));

    /**
     * Amount raised setting
     */
    $wp_customize->add_setting('flint_options[trinity_japan_raised]', array(
      'default'           => $defaults['trinity_japan_raised'],
      'capability'        => 'edit_theme_options',
      'type'              => 'option',
      'transport'         => 'postMessage',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'trinity_japan_raised', array(
      'label'    => __( 'Amount Raised', 'flint' ),
      'section'  => 'trinity_section_japan',
      'settings' => 'flint_options[trinity_japan_raised]',
      'priority' => 30,
      'type'     => 'text',
    )));

    /**
     * Last updated setting
     */
    $wp_customize->add_setting('flint_options[trinity_japan_raised_updated]', array(
      'default'           => $defaults['trinity_japan_raised_updated'],
      'capability'        => 'edit_theme_options',
      'type'              => 'option',
      'transport'         => 'postMessage',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'trinity_japan_raised_updated', array(
      'label'    => __( 'Last updated', 'flint' ),
      'section'  => 'trinity_section_japan',
      'settings' => 'flint_options[trinity_japan_raised_updated]',
      'priority' => 40,
      'type'     => 'text',
    )));

    /**
     * Up Next setting
     */
    $wp_customize->add_setting('flint_options[trinity_japan_up_next]', array(
      'default'           => $defaults['trinity_japan_up_next'],
      'capability'        => 'edit_theme_options',
      'type'              => 'option',
      'transport'         => 'postMessage',
    ));
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'trinity_japan_up_next', array(
      'label'    => __( 'Up Next', 'flint' ),
      'section'  => 'trinity_section_japan',
      'settings' => 'flint_options[trinity_japan_up_next]',
      'priority' => 40,
      'type'     => 'textarea',
    )));
}
add_action( 'customize_register', 'trinity_customize_register', 20 );
