<?php
/**
 * Template Name: Mission Trip (archive)
 *
 * @package Flint/Trinity
 * @since 0.7
 */

get_header();
flint_get_sidebar( 'header' );
$trip_category = 'category_name=' . $meta['trip_category'][0];
?>

  <div id="primary" class="content-area">

    <?php flint_the_post_thumbnail( 'full' ); ?>

    <div class="banner">
      <p><?php echo get_post_meta( get_the_ID(), 'mission_trip_banner', true ); ?></p>
      <a class="btn btn-link" href="#meet-the-team">Meet the Team</a> <a class="btn btn-link" href="#pledge-support">Pledge Support</a> <a class="btn btn-link" href="#follow">Trip Log</a>
    </div>

    <div class="container">

      <div class="row">
        <h2 class="col-xs-12" id="meet-the-team">Meet the Team</h2>
      </div>

      <div class="row">
        <?php
        $mt_team = new WP_Query(
          array(
            'order' => 'ASC',
            'orderby' => 'title',
            'post_type' => 'steel_profile',
            'tax_query' => array(
              array(
                'taxonomy' => 'steel_team',
                'field' => 'slug',
                'terms' => get_post_meta( get_the_ID(), 'mission_trip_team', true ),
              ),
            ),
          )
        );
        ?>
      <?php if ( $mt_team->have_posts() ) : ?>
          <?php while ( $mt_team->have_posts() ) : $mt_team->the_post(); ?>

            <div class="mt-profile col-xs-12 col-md-6" id="profile-<?php the_ID(); ?>">
              <div class="row">
                <h3 class="col-xs-12 profile-title"><?php echo the_title(); ?></h3>

                <div class="mt-profile-left col-xs-5 col-sm-4">
                  <?php flint_the_post_thumbnail( 'trinity-mt-profile', array( 'class' => 'mt-profile-img' ) ); ?>
                </div>

                <div class="mt-profile-content col-xs-7 col-sm-8">
                  <?php the_content(); ?>
                </div>
              </div>
            </div>

          <?php endwhile; ?>
          <?php flint_content_nav( 'nav-below' ); ?>
        <?php else : ?>
          <?php get_template_part( 'no-results', 'index' ); ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>


      </div>

      <div class="row">
        <h2 class="col-xs-12" id="follow">Trip Log</h2>
      </div>

      <div class="row">

        <div class="col-xs-12" id="content" role="main">
          <?php
          $mt_posts = new WP_Query(
            array(
              'category_name' => get_post_meta( get_the_ID(), 'mission_trip_category', true ),
            )
          );
          ?>
          <?php if ( $mt_posts->have_posts() ) : ?>
            <?php while ( $mt_posts->have_posts() ) : $mt_posts->the_post(); ?>
              <div class="row">
                <article id="post-<?php the_ID(); ?>" <?php flint_post_class(); ?>>
                  <header class="entry-header">
                    <?php do_action( 'flint_open_entry_header_' . $type ); ?>

                    <h1 class="entry-title"><?php
                      if ( is_single() ) {
                        echo the_title();
                      } else {
                        echo '<a href="' . get_permalink() . '" rel="bookmark">' . get_the_title() . '</a>';
                      } ?></h1>
                    <?php edit_post_link( __( 'Edit Post', 'flint' ), '', '', 0, 'btn btn-default btn-sm btn-edit hidden-xs' ); ?>

                    <div class="entry-meta">
                      <?php do_action( 'flint_entry_meta_above_' . $type ); ?>
                    </div><!-- .entry-meta -->

                    <?php do_action( 'flint_close_entry_header_' . $type ); ?>

                  </header><!-- .entry-header -->

                  <?php if ( is_search() ) : ?>
                  <div class="entry-summary">
                    <?php the_excerpt(); ?>
                  </div><!-- .entry-summary -->
                  <?php else : ?>
                  <div class="entry-content">
                    <?php flint_the_content(); ?>
                    <?php
                    flint_link_pages( array(
                      'before' => '<ul class="pagination">',
                      'after'  => '</ul>',
                    ) ); ?>
                  </div><!-- .entry-content -->
                  <?php endif; ?>

                  <footer class="entry-meta clearfix">
                    <?php do_action( 'flint_entry_meta_below_post' ); ?>
                  </footer><!-- .entry-meta -->
                </article><!-- #post-<?php the_ID(); ?> -->
              </div><!-- .row -->
            <?php endwhile; ?>
            <?php flint_content_nav( 'nav-below' ); ?>
          <?php else : ?>
            <?php get_template_part( 'no-results' ); ?>
          <?php endif; ?>
          <?php wp_reset_query(); ?>
        </div><!-- #content -->

      </div><!-- .row -->

    </div><!-- .container -->

  </div><!-- #primary -->

</div><!-- #page -->

<?php flint_get_sidebar( 'footer' ); ?>
<?php get_footer(); ?>
