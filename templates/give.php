<?php
/**
 * Template Name: Give
 *
 * @package Flint/Trinity
 * @since 0.2
 */

session_start();

if (!empty($_POST['session'])) {
  if ($_POST['session'] == $_SESSION['session']) {

    $first_name = !empty($_POST['first_name']) ? sanitize_text_field($_POST['first_name']) : '';
    $last_name  = !empty($_POST['last_name'])  ? sanitize_text_field($_POST['last_name'])  : '';

    if (!empty($_POST['paypal_account'])) {
      if ($_POST['paypal_account'] == 'true')
        $paypal_account = true;
      else
        $paypal_account = false;
    }
    else {
      $paypal_account = false;
    }

    $general_fund   = !empty($_POST['general_fund'])   ? floatval($_POST['general_fund'])   : 0.00;
    $imagine        = !empty($_POST['imagine'])        ? floatval($_POST['imagine'])        : 0.00;
    $benevolence    = !empty($_POST['benevolence'])    ? floatval($_POST['benevolence'])    : 0.00;
    $new            = !empty($_POST['new'])            ? floatval($_POST['new'])            : 0.00;
    $other          = !empty($_POST['other'])          ? floatval($_POST['other'])          : 0.00;
    $total          = $general_fund + $imagine + $benevolence + $new + $other;

    $notes = !empty($_POST['notes']) ? sanitize_text_field($_POST['notes']) : '';

    if (!empty($first_name) && !empty($last_name) && $total > 0) {

      $recipient = 'stevepaxton@sharethelife.org';
      $subject   = $first_name . ' ' . $last_name . ' pledged to donate $' . $total;
      $subject  .= $paypal_account == true ? ' through the PayPal Giving Fund' : ' with PayPal';

      $message  = $subject.'.'."\r\n"."\r\n";
      $message .= 'General Fund: $'.number_format($general_fund,2)."\r\n"."\r\n";
      $message .= 'Building Fund (Imagine): $'.number_format($imagine,2)."\r\n"."\r\n";
      $message .= 'Benevolence Fund: $'.number_format($benevolence,2)."\r\n"."\r\n";
      $message .= 'New Ministries: $'.number_format($new,2)."\r\n"."\r\n";
      $message .= 'Other: $'.number_format($other,2)."\r\n"."\r\n";
      $message .= 'Total: $'.number_format($total,2);

      if (!empty($notes)) {
        $message .= "\r\n"."\r\n".'Additional Notes:'."\r\n";
        $message .= $notes;
      }

      $headers = 'From: wp@fortcollinscreative.com'."\r\n".'Reply-To: mbeall@starverte.com'."\r\n".'X-Mailer: PHP/'.phpversion();
      mail($recipient, $subject, $message, $headers);

      if ($paypal_account == true) {
        header("Location: https://www.paypal-donations.com/pp-charity/web.us/charity_i.jsp?id=72286&s=3");
        exit;
      }
      else {
        header("Location: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=H6KBD6DUY38LE");
        exit;
      }

    }
  }
  else {
    unset($_SESSION['session']);
    $_SESSION['session'] = bin2hex(openssl_random_pseudo_bytes(10));
    $first_name = '';
    $last_name  = '';
    $notes      = '';
  }
}
else {
  $_SESSION['session'] = bin2hex(openssl_random_pseudo_bytes(10));
  $first_name = '';
  $last_name  = '';
  $notes      = '';
}

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
                    <form class="form-horizontal" id="paypal_giving" method="post" action="<?php echo get_permalink(); ?>" onsubmit="return steel_validate()">
                      <div class="form-group validate" data-target="first_name" data-required="true" data-validate="text">
                        <div class="col-xs-12">
                          <label class="control-label" for="first_name">First Name</label>
                        </div>
                        <div class="col-xs-12">
                          <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="<?php echo $first_name; ?>" required>
                        </div>
                      </div>
                      <div class="form-group validate" data-target="last_name" data-required="true" data-validate="text">
                        <div class="col-xs-12">
                          <label class="control-label" for="last_name">Last Name</label>
                        </div>
                        <div class="col-xs-12">
                          <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="<?php echo $last_name; ?>" required>
                        </div>
                      </div>
                      <div class="validate" data-target="paypal_account" data-required="true" data-validate="boolean">
                        <div class="form-group">
                          <div class="col-xs-12">
                            <div class="radio">
                              <label>
                                <input type="radio" name="paypal_account" id="paypal_account_true" value="true" required>
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
                                <input type="radio" name="paypal_account" id="paypal_account_false" value="false" required>
                                <strong>I do not have a PayPal account</strong><br>
                                <small>Approximately 2.5% of your donation will go to transaction fees</small>
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <h4 class="col-xs-6 col-sm-4 col-md-5 col-lg-4"></h4>
                        <h4 class="col-xs-6 col-sm-4 col-md-5 col-lg-4">Donation Amount</h4>
                      </div>
                      <div class="form-group validate" data-target="general_fund" data-validate="currency">
                        <div class="col-xs-6 col-sm-4 col-md-5 col-lg-4">
                          <label class="control-label" for="general_fund">General Fund</label>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-5 col-lg-4">
                          <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input class="form-control donation" type="number" name="general_fund" id="general_fund" value="<?php echo $general_fund; ?>">
                          </div>
                        </div>
                      </div>
                      <div class="form-group validate" data-target="imagine" data-validate="currency">
                        <div class="col-xs-6 col-sm-4 col-md-5 col-lg-4">
                          <label class="control-label" for="imagine">Building Fund (Imagine)</label>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-5 col-lg-4">
                          <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input class="form-control donation" type="number" name="imagine" id="imagine" value="<?php echo $imagine; ?>">
                          </div>
                        </div>
                      </div>
                      <div class="form-group validate" data-target="benevolence" data-validate="currency">
                        <div class="col-xs-6 col-sm-4 col-md-5 col-lg-4">
                          <label class="control-label" for="benevolence">Benevolence Fund</label>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-5 col-lg-4">
                          <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input class="form-control donation" type="number" name="benevolence" id="benevolence" value="<?php echo $benevolence; ?>">
                          </div>
                        </div>
                      </div>
                      <div class="form-group validate" data-target="new" data-validate="currency">
                        <div class="col-xs-6 col-sm-4 col-md-5 col-lg-4">
                          <label class="control-label" for="new">New Ministries</label>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-5 col-lg-4">
                          <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input class="form-control donation" type="number" name="new" id="new" value="<?php echo $new; ?>">
                          </div>
                        </div>
                      </div>
                      <div class="form-group validate" data-target="other" data-validate="currency">
                        <div class="col-xs-6 col-sm-4 col-md-5 col-lg-4">
                          <label class="control-label" for="other">Other (please specify below)</label>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-5 col-lg-4">
                          <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input class="form-control donation" type="number" name="other" id="other" value="<?php echo $other; ?>">
                          </div>
                        </div>
                      </div>

                      <div class="form-group validate" data-target="total" data-required="true" data-validate="currency">
                        <div class="col-xs-6 col-sm-4 col-md-5 col-lg-4">
                          <label class="control-label" for="total">Total</label>
                        </div>
                        <div class="col-xs-6 col-sm-4 col-md-5 col-lg-4">
                          <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input class="form-control" type="number" name="total" id="total" value="<?php echo $total; ?>" disabled required>
                          </div>
                        </div>
                      </div>
                      <div class="form-group" data-target="notes" data-parent="other">
                        <div class="col-xs-12">
                          <label class="control-label" for="notes">Additional Notes</label>
                        </div>
                        <div class="col-xs-12">
                          <textarea class="form-control" name="notes" id="notes" rows="3"><?php echo $notes; ?></textarea>
                        </div>
                      </div>
                      <input type="hidden" name="session" id="session" value="<?php echo $_SESSION['session']; ?>">
                      <div class="form-group">
                        <div class="col-xs-6">
                          <button type="submit" class="btn btn-blue btn-block steel-tooltip" data-toggle="tooltip" data-placement="top" title="Please verify that you have entered all required information correctly.">Submit Pledge</a>
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
