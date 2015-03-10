<?php
/**
 * Template Name: Give
 *
 * @package Flint/Trinity
 * @since 0.2
 */
get_header(); ?>
<?php flint_get_widgets('header'); ?>

  <div id="primary" class="content-area container">

    <div class="row">

      <?php flint_get_widgets('left'); ?>

      <div id="content" role="main" <?php flint_content_class(); ?>>

        <?php while ( have_posts() ) : the_post(); ?>

          <div class="row">
            <article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-12'); ?>>
              <header class="entry-header">
                <?php do_action('flint_open_entry_header_page'); ?>

                <h1 class="entry-title"><?php if (is_singular()) { echo the_title(); } else { echo '<a href="' . get_permalink() .'" rel="bookmark">' . get_the_title() . '</a>'; } ?></h1>
                <?php if ( current_user_can('edit_pages') ) { ?><a class="btn btn-default btn-sm btn-edit hidden-xs" href="<?php echo get_edit_post_link(); ?>">Edit</a><?php } ?>

                <div class="entry-meta">
                  <?php do_action('flint_entry_meta_above_page'); ?>
                </div><!-- .entry-meta -->

                <?php do_action('flint_close_entry_header_page'); ?>

              </header><!-- .entry-header -->

              <?php if ( is_search() ) : ?>
              <div class="entry-summary">
                <?php the_excerpt(); ?>
              </div><!-- .entry-summary -->
              <?php else : ?>
              <div class="entry-content">
                <h3>Thank you for your donation to LifePointe Church!</h3>
                <p>We appreciate your generosity and commit to use your gifts in a God honoring way. We are excited about how God is working in our church body as we focus on our mission to make gospel-centered disciples of Jesus Christ.</p>
                <div class="row">
                  <div class="col-md-8">
                    <h3>Give through PayPal</h3>
                    <p class="text-muted">We utilize PayPal for online donations, but you do not have to have a PayPal account to make a donation.</p>
                    <form class="form-horizontal" id="paypal_giving" action="<?php echo get_permalink(); ?>" method="post">
                      <div class="form-group">
                        <label class="col-xs-12" for="first_name">First Name</label>
                        <div class="col-xs-12">
                          <input type="text" class="form-control" id="first_name" placeholder="First Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-xs-12" for="last_name">Last Name</label>
                        <div class="col-xs-12">
                          <input type="text" class="form-control" id="last_name" placeholder="Last Name">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-12">
                          <div class="radio">
                            <label>
                              <input type="radio" name="paypal_account" id="paypal_account_true" value="true">
                              <strong>I have a PayPal account</strong> or will create one<br>
                              <small>100% of your donation will go to LifePointe Church</small>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-12">
                          <div class="radio">
                            <label>
                              <input type="radio" name="paypal_account" id="paypal_account_false" value="false">
                              <strong>I do not have a PayPal account</strong><br>
                              <small>Approximately 2.5% of your donation will go to transaction fees</small>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div id="log"></div>
                      <div class="form-group text-right">
                        <h4 class="col-xs-8"></h4>
                        <h4 class="col-xs-4">Donation Amount</h4>
                      </div>
                      <div class="form-group text-right">
                        <label class="col-xs-8" for="general_fund">General Fund</label>
                        <div class="col-xs-4">
                          <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input class="form-control donation" type="number" name="general_fund" id="general_fund">
                          </div>
                        </div>
                      </div>
                      <div class="form-group text-right">
                        <label class="col-xs-8" for="puerto_penasco">College Mission Trip<br> to Puerto Penasco over Spring Break</label>
                        <div class="col-xs-4">
                          <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input class="form-control donation" type="number" name="puerto_penasco" id="puerto_penasco">
                          </div>
                        </div>
                      </div>
                      <div class="form-group text-right">
                        <label class="col-xs-8" for="imagine">Building Fund (Imagine)</label>
                        <div class="col-xs-4">
                          <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input class="form-control donation" type="number" name="imagine" id="imagine">
                          </div>
                        </div>
                      </div>
                      <div class="form-group text-right">
                        <label class="col-xs-8" for="benevolence">Benevolence Fund</label>
                        <div class="col-xs-4">
                          <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input class="form-control donation" type="number" name="benevolence" id="benevolence">
                          </div>
                        </div>
                      </div>
                      <div class="form-group text-right">
                        <label class="col-xs-8" for="new">New Ministries</label>
                        <div class="col-xs-4">
                          <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input class="form-control donation" type="number" name="new" id="new">
                          </div>
                        </div>
                      </div>
                      <div class="form-group text-right">
                        <label class="col-xs-8" for="other">Other (please specify below)</label>
                        <div class="col-xs-4">
                          <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input class="form-control donation" type="number" name="other" id="other">
                          </div>
                        </div>
                      </div>

                      <div class="form-group text-right">
                        <label class="col-xs-8" for="total">Total</label>
                        <div class="col-xs-4">
                          <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input class="form-control" type="number" name="total" id="total" disabled>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-xs-12" for="notes">Additional Notes</label>
                        <div class="col-xs-12">
                          <textarea class="form-control" rows="3"></textarea>
                        </div>
                      </div>
                      <input type="hidden" name="redirect_url" id="redirect_url">
                      <div class="form-group">
                        <div class="col-xs-6">
                          <button type="submit" class="btn btn-blue btn-block disabled">Submit</a>
                        </div>
                        <div class="col-xs-6">
                          <button type="reset" class="btn btn-default btn-block">Cancel</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <div class="col-md-4">
                    <?php flint_the_content(); ?>
                  </div>
                </div>

                <?php
                flint_link_pages( array(
                  'before' => '<ul class="pagination">',
                  'after'  => '</ul>',
                ) ); ?>
              </div><!-- .entry-content -->
              <?php endif; ?>
            </article><!-- #page-<?php the_ID(); ?> -->

          </div><!-- .row -->

          <?php if ( comments_open() || '0' != get_comments_number() ) { comments_template(); } ?>

        <?php endwhile; ?>

      </div><!-- #content -->

      <?php flint_get_widgets('right'); ?>

    </div><!-- .row -->

  </div><!-- #primary -->

</div><!-- #page -->

<?php flint_get_widgets('footer'); ?>
<?php get_footer(); ?>
