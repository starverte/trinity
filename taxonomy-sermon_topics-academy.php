<?php
/**
 * Template Name: Academy Audio
 *
 * @package Flint/Trinity
 * @since 0.2
 */

get_header(); ?>
<?php flint_get_sidebar( 'header' ); ?>

  <section id="primary" class="content-area container">

    <?php
      flint_get_sidebar( 'left' );

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
        <h1 class="page-title">Academy</h1>
      </header><!-- .page-header -->

      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'type', 'sermon' ); ?>

      <?php endwhile; ?>

      <?php flint_content_nav( 'nav-below' ); ?>

    <?php else : ?>

      <?php get_template_part( 'no-results', 'archive' ); ?>

    <?php endif; ?>

    </div><!-- #content -->

    <?php flint_get_sidebar( 'right' ); ?>

  </section><!-- #primary -->

<?php flint_get_sidebar( 'footer' ); ?>
<?php get_footer(); ?>

