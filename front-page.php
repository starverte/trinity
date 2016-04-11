<?php
/**
 * The template for displaying the front page
 *
 * Template file used to render the Site Front Page,
 * whether the front page displays the Blog Posts Index
 * or a static page.
 *
 * @package Flint/Trinity
 * @since 0.4.1
 */

get_header();
flint_get_sidebar( 'header' ); ?>

  <div id="primary" class="content-area">

    <div class="container">

      <?php
        if ( function_exists( 'flint_options' ) ) {
          $options = flint_options();
        } else {
          $options = flint_get_options();
        }
      ?>

      <div class="row">
        <div class="col-xs-12 col-md-9">
          <?php
            if ( function_exists( 'msx_card_deck_carousel' ) ) {
              echo msx_card_deck_carousel(
              $options['trinity_front_page_hero'],
              array( 'container_class' => 'msx-card-deck-hero', 'image_size' => 'trinity-hero-card' )
            );
            } else {
              echo steel_slideshow( $options['trinity_front_page_hero'], 'front-slides' );
            }
          ?>
        </div>

        <div class="col-xs-12 col-md-3">
          <?php
            if ( function_exists( 'msx_card_deck_display' ) ) {
              echo msx_card_deck_display( $options['trinity_front_page_featured'], array( 'container_class' => 'msx-card-deck-featured' ) );
            } else {
              echo steel_slideshow( $options['trinity_front_page_featured'] );
            }
          ?>
        </div>
      </div>

      <div id="content" role="main" <?php flint_content_class(); ?>>

        <?php while ( have_posts() ) : the_post(); ?>

          <?php
            if ( function_exists( 'flint_post_width' ) ) {
              get_template_part( 'templates/' . flint_post_width(), 'content' );
            } else {
              get_template_part( 'templates/' . flint_get_template(), 'content' );
            }
          ?>

          <?php if ( comments_open() || '0' != get_comments_number() ) { comments_template(); } ?>

        <?php endwhile; ?>

      </div><!-- #content -->

    </div><!-- .container -->

  </div><!-- #primary -->

<?php flint_get_sidebar( 'footer' ); ?>
<?php get_footer(); ?>
