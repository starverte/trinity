<?php
/**
 * The Header for our theme.
 *
 * Displays the navigation menu
 *
 * @package Flint/Trinity
 * @since 0.1
 */

?>

  <nav class="navbar navbar-trinity" role="navigation">
    <h1 class="screen-reader-text"><?php _e( 'Menu', 'flint' ); ?></h1>
    <div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'flint' ); ?>"><?php _e( 'Skip to content', 'flint' ); ?></a></div>
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand visible-xs-block" href="#" data-toggle="collapse" data-target=".navbar-primary-collapse">Menu</a>
      </div><!-- .navbar-header -->

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-primary-collapse">
        <?php
          if ( class_exists( 'Flint_Walker_Nav_Menu_Navbar' ) ) {
            wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => false, 'walker' => new Flint_Walker_Nav_Menu_Navbar ) );
          } else {
            wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'fallback_cb' => false, 'walker' => new Flint_Bootstrap_Menu ) );
          }
        ?>
      </div><!-- .navbar-collapse -->
    </div><!-- .container -->
  </nav><!-- .navbar -->

