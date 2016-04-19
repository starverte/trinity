<?php
/**
 * Template Name: Mission Trip (support)
 *
 * @package Flint/Trinity
 * @since 0.7
 */

get_header();
flint_get_sidebar( 'header' );
$meta = get_post_meta( $post->ID );
$raised_percent = $meta['funds_raised'][0] / $meta['funds_goal'][0];
$trip_category = 'category_name=' . $meta['trip_category'][0];
?>

  <div id="primary" class="content-area">

    <?php flint_the_post_thumbnail( 'full' ); ?>

    <div class="banner">
      <p><?php echo get_post_meta( get_the_ID(), 'mission_trip_banner', true ); ?></p>
      <a class="btn btn-link" href="#meet-the-team">Meet the Team</a> <a class="btn btn-link" href="#pledge-support">Pledge Support</a> <a class="btn btn-link" href="#follow">Follow Us</a>
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
                  <button class="btn btn-blue btn-block btn-support" data-support="<?php the_title(); ?>">Pledge support</button>
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
        <h2 class="col-xs-12" id="pledge-support">Pledge Support</h2>
      </div>

      <?php

        $raised  = get_post_meta( get_the_ID(), 'mission_trip_raised', true );
        $goal = get_post_meta( get_the_ID(), 'mission_trip_goal', true );
        $raised_percent = floatval( $raised ) / floatval( $goal ) * 100;
      ?>

      <div class="progress" id="mt-progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo round( $raised_percent ); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $raised_percent; ?>%;">
          <?php echo round( $raised_percent, 1 ); ?>% <span class="hidden-xs">funds </span>raised
        </div>
      </div>

      <div class="row">
        <h4 class="col-xs-12">Give through PayPal</h4>
        <p class="col-xs-12">Please fill out the following form and complete the transaction via PayPal. You do not have to have a PayPal account. <strong>Approximately 2.5% of your donation will go to transaction fees.</strong> You can use <a href="https://www.paypal-donations.com/pp-charity/web.us/charity_i.jsp?id=72286&amp;s=3" target="_gift">PayPal Giving Fund</a> to send <strong>100% of your donation</strong> to LifePointe. Just send us an <a href="mailto:give@sharethelife.org?subject=Gift%20Designation">email</a> to let us know the designation.</p>
        <form action="https://www.paypal.com/cgi-bin/webscr" class="form-horizontal col-xs-12" id="paypal_giving" method="post" name="paypal_giving">
          <input name="business" type="hidden" value="UTZXJBMHW42LL">
          <input name="cmd" type="hidden" value="_donations">
          <input name="add" type="hidden" value="1">
          <input name="item_name" type="hidden" value="<?php echo get_post_meta( get_the_ID(), 'mission_trip_country', true ); ?> Mission Trip">
          <input name="currency_code" type="hidden" value="USD">
          <div class="form-group">
            <h4 class="col-xs-6 col-sm-4 col-md-5 col-lg-4"></h4>
            <h4 class="col-xs-6 col-sm-4 col-md-5 col-lg-4">Donation Amount</h4>
          </div>
          <div class="form-group">
            <?php
            $benefactors = new WP_Query(
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
            <label for="os0" class="col-xs-6 col-sm-4 col-md-5 col-lg-4">I would love to support</label>
            <div class="col-xs-6 col-sm-4 col-md-5 col-lg-4">
              <input name="on0" type="hidden" value="Benefactor">
              <select class="form-control" id="os0" name="os0" required="">
                <option value="<?php echo get_post_meta( get_the_ID(), 'mission_trip_country', true ); ?> team">
                  the <?php echo get_post_meta( get_the_ID(), 'mission_trip_country', true ); ?> team
                </option>
                <?php if ( $benefactors->have_posts() ) : ?>
                  <?php while ( $benefactors->have_posts() ) : $benefactors->the_post(); ?>
                    <option id="support-<?php the_ID(); ?>" value="<?php the_title(); ?>">
                      <?php the_title(); ?>
                    </option>
                  <?php endwhile; ?>
                <?php endif; // $benefactors->have_posts(). ?>
                <?php wp_reset_query(); ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-xs-6 col-sm-4 col-md-5 col-lg-4" for="total">with a one-time gift of</label>
            <div class="col-xs-6 col-sm-4 col-md-5 col-lg-4">
              <div class="input-group">
                <span class="input-group-addon">$</span><input class="form-control disabled" id="amount" name="amount" type="number" placeholder="150.00">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-12" for="notes">Additional Notes</label>
            <div class="col-sm-12">
              <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-6">
              <button class="btn btn-blue btn-block" type="submit">Submit</button>
            </div>
            <div class="col-sm-6">
              <button class="btn btn-default btn-block" type="reset">Cancel</button>
            </div>
          </div>
        </form>
      </div>

      <div class="row">
        <h2 class="col-xs-12" id="follow">Follow Us</h2>
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
            <p><em>Nothing here yet. Check back soon.</em></p>
          <?php endif; ?>
          <?php wp_reset_query(); ?>
        </div><!-- #content -->

      </div><!-- .row -->

    </div><!-- .container -->

  </div><!-- #primary -->

</div><!-- #page -->

<?php flint_get_sidebar( 'footer' ); ?>
<?php get_footer(); ?>
