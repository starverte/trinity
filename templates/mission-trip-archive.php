<?php
/**
* Template Name: Mission Trip (archive)
*
* @package Flint\Trinity
* @since 0.5.1
*/
get_header();
flint_get_sidebar('header');
?>

  <div id="primary" class="content-area container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10" id="content" role="main">
        <img src="//sharethelife.org/wp-content/uploads/jp15_banner_online_japan.png" alt="Japan 2015">
        <?php $japan_posts = new WP_Query( 'category_name=jp15' ); ?>
        <?php if ( $japan_posts->have_posts() ) : ?>
          <?php while ( $japan_posts->have_posts() ) : $japan_posts->the_post(); ?>
            <div class="row">
              <article class="col-xs-12" id="post-<?php the_ID(); ?>">
                <header class="entry-header">
                  <?php $type = get_post_type(); ?>
                  <?php do_action('flint_open_entry_header_'.$type); ?>
                  <h1 class="entry-title"><?php echo the_title(); ?></h1>
                  <?php if ( current_user_can('edit_posts') ) { ?><a class="btn btn-default btn-sm btn-edit hidden-xs" href="<?php echo get_edit_post_link(); ?>">Edit</a><?php } ?>
                  <div class="entry-meta">
                  <?php do_action('flint_entry_meta_above_'.$type); ?>
                  </div><!-- .entry-meta -->
                  <?php do_action('flint_close_entry_header_'.$type); ?>
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
                  <?php do_action('flint_entry_meta_below_post'); ?>
                </footer><!-- .entry-meta -->
              </article><!-- #post-<?php the_ID(); ?> -->
            </div><!-- .row -->
          <?php endwhile; ?>
          <?php flint_content_nav( 'nav-below' ); ?>
        <?php else : ?>
          <?php get_template_part( 'no-results', 'index' ); ?>
        <?php endif; ?>
      </div><!-- #content -->

      <?php
        if ( function_exists( 'flint_options' ) ) {
          $options = flint_options();
        } else {
          $options = flint_get_options();
        }
      ?>

      <h2 class="col-xs-12 col-sm-4 col-md-3 col-lg-2" id="events">Up Next</h2>

      <div class="jp-profile col-xs-12 col-sm-4 col-md-3 col-lg-2">
        <?php echo $options['trinity_japan_up_next']; ?>
      </div>

      <h2 class="col-xs-12 col-sm-4 col-md-3 col-lg-2" id="meet-the-team">Meet the Team</h2>

      <div class="jp-profile col-xs-6 col-md-3 col-lg-2">
        <h3>Matt Beall</h3>
        <img class="jp-profile-img" src="//sharethelife.org/wp-content/uploads/jp15_matt_profile.jpg" alt="Matt Beall">
      </div>

      <div class="jp-profile col-xs-6 col-md-3 col-lg-2">
        <h3>Josiah Burk</h3>
        <img class="jp-profile-img" src="//sharethelife.org/wp-content/uploads/jp15_josiah_profile.jpg" alt="Josiah Burk">
      </div>

      <div class="jp-profile col-xs-6 col-md-3 col-lg-2">
        <h3>Wilaiwan Northrop</h3>
        <img class="jp-profile-img" src="//sharethelife.org/wp-content/uploads/jp15_wilaiwan_profile.jpg" alt="Wilaiwan Northrop">
      </div>

      <div class="jp-profile col-xs-6 col-md-3 col-lg-2">
        <h3>Whitney Paxton</h3>
        <img class="jp-profile-img" src="//sharethelife.org/wp-content/uploads/jp15_whitney_profile.jpg" alt="Whitney Paxton">
      </div>

      <div class="jp-profile col-xs-6 col-md-3 col-lg-2">
        <h3>Megan Spiegel</h3>
        <img class="jp-profile-img" src="//sharethelife.org/wp-content/uploads/jp15_megan_profile.jpg" alt="Megan Spiegel">
      </div>

    </div><!-- .row -->

  </div><!-- #primary -->

</div><!-- #page -->

<?php flint_get_sidebar('footer'); ?>
<?php get_footer(); ?>
