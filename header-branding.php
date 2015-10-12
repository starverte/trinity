<?php
/**
 * The Header for our theme.
 *
 * Displays the branding header element
 *
 * @package Flint/Trinity
 * @since 0.4.0
 */

if ( function_exists( 'flint_options' ) ) {
  $options = flint_options();
} else {
  $options = flint_get_options();
}
?>

  <div id="masthead" class="site-header" role="banner">
    <?php if (current_theme_supports('custom-header')) { ?>
      <div class="paper container">
        <?php $header_image = get_header_image(); ?>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
            <!-- <img id="logo" src="<?php header_image(); ?>" alt="<?php echo get_bloginfo('name'); ?> Logo" /> -->
            <img class="visible-xs visible-sm" id="logo-xs" src="//sharethelife.org/wp-content/uploads/LifePointeChurch_Blue.svg" alt="LifePointe Church Logo" />
            <img class="visible-md visible-lg" id="logo-md" src="//sharethelife.org/wp-content/uploads/LifePointeChurch_Negative.svg" alt="LifePointe Church Logo" />
          </a>
          <div class="col-lg-4 col-md-4 col-sm-2"></div>
          <div class="site-branding col-lg-5 col-md-5 col-sm-6 col-xs-6">
            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
            <h3 class="hidden-xs address"><?php flint_get_address(); ?></h3>
            <h3 class="hidden-xs phone"><?php echo $options['org_tel']; ?></h3>
          </div><!-- .site-branding -->
      </div><!-- .container -->
    <?php } /* if (current_theme_supports('custom-header')) */ ?>
  </div><!-- #masthead -->

