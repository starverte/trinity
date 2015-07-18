<?php
/**
* Template Name: Japan 2
*
* @package Flint\Trinity
* @since 0.5
*/
get_header();
flint_get_widgets('header');
?>

  <div id="primary" class="content-area container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10" id="content" role="main">
        <img src="//lifepointe.starvertellc.netdna-cdn.com/wp-content/uploads/jp15_banner_online_japan.png" alt="Japan 2015">
        <h2 class="jumbotron">LifePointe Church is sending a team to Yamagata, Japan to serve alongside Janet Brown and the local Zao Church</h2>
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

      <h2 class="col-xs-12 col-sm-4 col-md-3 col-lg-2" id="events">Up Next</h2>

      <div class="jp-profile col-xs-12 col-sm-4 col-md-3 col-lg-2">
        <h4>Sunday, July 19</h4>
        <p>During the worship service, the LifePointe Church congregation will send-off Japan team</p>
        <h4>Monday, July 20</h4>
        <p>At 2:45am, the Japan team will meet at LifePointe Church and drive down to Denver International Airport</p>
      </div>

      <h2 class="col-xs-12 col-sm-4 col-md-3 col-lg-2" id="meet-the-team">Meet the Team</h2>

      <div class="jp-profile col-xs-6 col-md-3 col-lg-2">
        <h3>Matt Beall</h3>
        <img class="jp-profile-img" src="//lifepointe.starvertellc.netdna-cdn.com/wp-content/uploads/jp15_matt_profile.jpg" alt="Matt Beall">
      </div>

      <div class="jp-profile col-xs-6 col-md-3 col-lg-2">
        <h3>Josiah Burke</h3>
        <img class="jp-profile-img" src="//lifepointe.starvertellc.netdna-cdn.com/wp-content/uploads/jp15_josiah_profile.jpg" alt="Josiah Burke">
      </div>

      <div class="jp-profile col-xs-6 col-md-3 col-lg-2">
        <h3>Wilaiwan Northrop</h3>
        <img class="jp-profile-img" src="//lifepointe.starvertellc.netdna-cdn.com/wp-content/uploads/jp15_wilaiwan_profile.jpg" alt="Wilaiwan Northrop">
      </div>

      <div class="jp-profile col-xs-6 col-md-3 col-lg-2">
        <h3>Whitney Paxton</h3>
        <img class="jp-profile-img" src="//lifepointe.starvertellc.netdna-cdn.com/wp-content/uploads/jp15_whitney_profile.jpg" alt="Whitney Paxton">
      </div>

      <div class="jp-profile col-xs-6 col-md-3 col-lg-2">
        <h3>Megan Spiegel</h3>
        <img class="jp-profile-img" src="//lifepointe.starvertellc.netdna-cdn.com/wp-content/uploads/jp15_megan_profile.jpg" alt="Megan Spiegel">
      </div>

    </div><!-- .row -->

  </div><!-- #primary -->

</div><!-- #page -->

<?php flint_get_widgets('footer'); ?>
<?php get_footer(); ?>
