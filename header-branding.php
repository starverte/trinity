<?php
/**
 * The Header for our theme.
 *
 * Displays the branding header element
 *
 * @package Flint/Trinity
 * @since 0.1
 */
?>

  <div id="masthead" class="site-header" role="banner">
    <?php if (current_theme_supports('custom-header')) { ?>
      <div class="paper container">
        <?php $header_image = get_header_image(); ?>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
            <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
          </a>
          <div class="col-lg-4 col-md-4 col-sm-2"></div>
          <div class="site-branding col-lg-5 col-md-5 col-sm-6 col-xs-6">
            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
            <h3 class="hidden-xs address"><?php flint_get_address(); ?></h3>
            <h3 class="hidden-xs phone"><?php echo flint_get_options( 'tel' ); ?></h3>
          </div><!-- .site-branding -->
      </div><!-- .container -->
    <?php } /* if (current_theme_supports('custom-header')) */ ?>
  </div><!-- #masthead -->
