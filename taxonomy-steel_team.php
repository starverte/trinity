<?php
/**
 * The template for displaying Staff and Elder pages
 *
 * @package Flint/Trinity
 * @since 0.5.1
 */

get_header(); ?>
<?php flint_get_sidebar('header'); ?>

  <section id="primary" class="content-area container">

    <?php
      flint_get_sidebar('left');

      $content_class = 'site-content';
      if ( is_active_sidebar( 'left' ) | is_active_sidebar( 'right' ) ) {
        if ( is_active_sidebar( 'left' ) && is_active_sidebar( 'right' ) ) {
          $content_class .= ' col-lg-6 col-md-6 wa-both';
        }
        else {
          if ( is_active_sidebar( 'left' ) ) {
            $content_class .= ' col-lg-9 col-md-9 wa-left';
          }
          elseif ( is_active_sidebar( 'right' ) ) {
            $content_class .= ' col-lg-9 col-md-9 wa-right';
          }
        }
      }
      else {
        $content_class .= ' col-lg-12 col-md-12';
      }
    ?>

    <div id="content" class="<?php echo $content_class; ?>" role="main">

    <?php if ( have_posts() ) : ?>

      <header class="page-header">
        <h1 class="page-title">
          <?php
            /**
             * Template actions before title
             */
            if  ( is_tax() ) { do_action('flint_open_' . single_term_title( '', false ) . '_title'); }
            else             { do_action('flint_open_archive_title'); }

            /**
             * Title of archive page
             */
            if ( is_tax() ) { printf( __( '%s', 'flint' ), '<span>' . single_term_title( '', false ) . '</span>' ); }

            else { _e( '<span>' . 'Archives' . '</span>', 'flint' ); }

            /**
             * Template actions after title
             */
            if  ( is_tax() ) { do_action('flint_close_' . single_term_title( '', false ) . '_title'); }
            else             { do_action('flint_close_archive_title'); }
          ?>
        </h1>
        <?php
          /**
           * Term Description
           */
          if ( is_tax() ) {
            $term_description = term_description();
            if ( ! empty( $term_description ) ) { echo apply_filters( 'tag_archive_meta', '<p class="taxonomy-description">' . $term_description . '</p>' ); }
          }
        ?>
      </header><!-- .page-header -->

      <?php global $wp_query;
        $args = array_merge( $wp_query->query, array( 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'ASC' ) );
        query_posts( $args ); ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'type', 'steel_profile' ); ?>

      <?php endwhile; ?>

      <?php flint_content_nav( 'nav-below' ); ?>

    <?php else : ?>

      <?php get_template_part( 'no-results', 'archive' ); ?>

    <?php endif; ?>

    </div><!-- #content -->

    <?php flint_get_sidebar('right'); ?>

  </section><!-- #primary -->

<?php flint_get_sidebar('footer'); ?>
<?php get_footer(); ?>
