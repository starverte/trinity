<?php
/**
 * The Header for our theme.
 *
 * Displays the navigation menu
 *
 * @package Flint/Trinity
 * @since 1.0
 */
?>
  <div class="nav-trinity">

    <nav class="visible-xs-block menu" role="navigation">
      <h1 class="screen-reader-text"><?php _e( 'Menu', 'flint' ); ?></h1>
      <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'flint' ); ?>"><?php _e( 'Skip to content', 'flint' ); ?></a></div>
      <?php wp_nav_menu( array( 'theme_location' => 'screen-xs', 'container' => false, 'menu_class' => 'nav menu-nav', 'fallback_cb' => false, 'walker' => new Flint_Bootstrap_Menu ) ); ?>
    </nav><!-- .navbar -->

    <nav class="visible-sm-block navbar navbar-trinity container" role="navigation">
      <h1 class="screen-reader-text"><?php _e( 'Menu', 'flint' ); ?></h1>
      <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'flint' ); ?>"><?php _e( 'Skip to content', 'flint' ); ?></a></div>
      <?php wp_nav_menu( array( 'theme_location' => 'screen-sm', 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => false, 'walker' => new Flint_Bootstrap_Menu ) ); ?>
    </nav><!-- .navbar -->

    <nav class="visible-md-block navbar navbar-trinity container" role="navigation">
      <h1 class="screen-reader-text"><?php _e( 'Menu', 'flint' ); ?></h1>
      <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'flint' ); ?>"><?php _e( 'Skip to content', 'flint' ); ?></a></div>
      <?php wp_nav_menu( array( 'theme_location' => 'screen-md', 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => false, 'walker' => new Flint_Bootstrap_Menu ) ); ?>
    </nav><!-- .navbar -->

    <nav class="visible-lg-block navbar navbar-trinity container" role="navigation">
      <h1 class="screen-reader-text"><?php _e( 'Menu', 'flint' ); ?></h1>
      <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'flint' ); ?>"><?php _e( 'Skip to content', 'flint' ); ?></a></div>
      <?php wp_nav_menu( array( 'theme_location' => 'screen-lg', 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => false, 'walker' => new Flint_Bootstrap_Menu ) ); ?>
    </nav><!-- .navbar -->

  </div><!-- .container -->