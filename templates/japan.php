<?php
/**
 * Template Name: Japan
 *
 * @package Flint/Trinity
 * @since 0.5
 */

session_start();

$alert = '';

$benefactors = array( 
  'team'     => 'the Japan team',
  'josiah'   => 'Josiah Burke',
  'matt'     => 'Matt Beall',
  'megan'    => 'Megan Spiegel',
  'whitney'  => 'Whitney Paxton',
  'wilaiwan' => 'Wilaiwan Northrop',
);

if ( !empty( $_POST['session'] ) ) {
  if ( $_POST['session'] == $_SESSION['session'] ) {

    $first_name = !empty( $_POST['first_name'] ) ? sanitize_text_field( $_POST['first_name'] ) : null;
    $last_name  = !empty( $_POST['last_name'] )  ? sanitize_text_field( $_POST['last_name'] )  : '';

    if ( !empty( $_POST['benefactor'] ) && array_key_exists( $_POST['benefactor'], $benefactors ) ) {
      $benefactor = $_POST['benefactor'];
    } else {
      $benefactor = 'team';
    }

    if ( !empty( $_POST['paypal_account'] ) ) {
      if ( $_POST['paypal_account'] == 'true' ) {
        $paypal_account = true;
        $paypal_link = 'https://www.paypal-donations.com/pp-charity/web.us/charity_i.jsp?id=72286&s=3';
      }
      else {
        $paypal_account = false;
        $paypal_link = 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=H6KBD6DUY38LE';
      }
    }
    else {
      $paypal_account = false;
      $paypal_link = 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=H6KBD6DUY38LE';
    }

    $amt_dec = !empty( $_POST['amt_dec'] ) ? floatval( $_POST['amt_dec'] ) : 0.00;

    $notes = !empty( $_POST['notes'] ) ? sanitize_text_field( $_POST['notes'] ) : '';

    $prayer_support    = !empty( $_POST['prayer_support'] )    ? true : false;
    $financial_support = !empty( $_POST['financial_support'] ) ? true : false;

    if ( !empty( $first_name ) && !empty( $last_name ) ) {

      if ( $prayer_support ) {
        $recipient = 'missionsdirector@sharethelife.org';

        $subject   = 'Japan 2015: ';
        $subject  .= $first_name . ' ' . $last_name . ' pledged to support ' . ucfirst( $benefactor );

        $message  = $first_name . ' ' . $last_name . ' pledged to support ' . ucfirst( $benefactor );
        $message .= ' through prayer before, during, and after the trip';

        if ( 0.00 < $amt_dec ) {
          $message   .= ' and with a one-time gift of $'.number_format( $amt_dec,2 );
          $recipient .= ',donations@sharethelife.org';
        }
        else {
          $message .= '.';
        }

        if ( !empty( $notes ) ) {
          $message .= "\r\n\r\nAdditional Notes:\r\n";
          $message .= $notes;
        }

        $headers = "From: wp@fortcollinscreative.com\r\nReply-To: missionsdirector@sharethelife.org\r\nX-Mailer: PHP/".phpversion();
        mail( $recipient, $subject, $message, $headers );

        if ( 0.00 < $amt_dec ) {
          if ( 'team' != $benefactor ) {
            $alert = '<div class="alert alert-info"><strong>Thank you for your support!</strong><p>The Japan team and '. ucfirst( $benefactor ) . ' will be notified of your pledge to pray for ' . ucfirst( $benefactor ) . ' and your one-time gift of $' . $amt_dec . '. You will now be redirected to PayPal to complete the transaction. Please enter $' . $amt_dec . ' as the amount on the PayPal form.</p><br>If you are not redirected within a few seconds, <a href="' . $paypal_link . '" target="_blank">click here</a>.</div><script type="text/javascript" async>setTimeout( function() {alert( "'.ucfirst( $benefactor ).' will be notified of your pledge to give a one-time gift of $' . $amt_dec . '. Please click OK to be redirected to PayPal and enter $' . $amt_dec . ' as the amount on the PayPal form." );window.open( "' . $paypal_link . '" )},1 );</script>';
          }
          else {
            $alert = '<div class="alert alert-info"><strong>Thank you for your support!</strong><p>The Japan team will be notified of your pledge to pray for the Japan team and your one-time gift of $' . $amt_dec . '. You will now be redirected to PayPal to complete the transaction. Please enter $' . $amt_dec . ' as the amount on the PayPal form.</p><br>If you are not redirected within a few seconds, <a href="' . $paypal_link . '" target="_blank">click here</a>.</div><script type="text/javascript" async>setTimeout( function() {alert( "The Japan team will be notified of your pledge to give a one-time gift of $' . $amt_dec . '. Please click OK to be redirected to PayPal and enter $' . $amt_dec . ' as the amount on the PayPal form." );window.open( "' . $paypal_link . '" )},1 );</script>';
          }
        }
        else {
          if ( 'team' != $benefactor ) {
            $alert = '<div class="alert alert-info"><strong>Thank you for your support!</strong><p>The Japan team and '. ucfirst( $benefactor ) . ' will be notified of your pledge to pray for ' . ucfirst( $benefactor ) . '.</div>';
          }
          else {
            $alert = '<div class="alert alert-info"><strong>Thank you for your support!</strong><p>The Japan team will be notified of your pledge to pray for the Japan team.</div>';
          }
        }
      }
      elseif ( 0.00 < $amt_dec ) {
        $recipient = 'missionsdirector@sharethelife.org,donations@sharethelife.org';

        $subject   = 'Japan 2015: ';
        $subject  .= $first_name . ' ' . $last_name . ' pledged to support ' . ucfirst( $benefactor );

        $message  = $first_name . ' ' . $last_name . ' pledged to support ' . ucfirst( $benefactor );
        $message .= ' with a one-time gift of $'.number_format( $amt_dec,2 );

        if ( !empty( $notes ) ) {
          $message .= "\r\n\r\nAdditional Notes:\r\n";
          $message .= $notes;
        }

        $headers = "From: wp@fortcollinscreative.com\r\nReply-To: missionsdirector@sharethelife.org\r\nX-Mailer: PHP/".phpversion();
        mail( $recipient, $subject, $message, $headers );

        if ( 'team' != $benefactor ) {
          $alert = '<div class="alert alert-info"><strong>Thank you for your support!</strong><p>The Japan team and '. ucfirst( $benefactor ) . ' will be notified of your pledge to give a one-time gift of $' . $amt_dec . '. You will now be redirected to PayPal to complete the transaction. Please enter $' . $amt_dec . ' as the amount on the PayPal form.</p><br>If you are not redirected within a few seconds, <a href="' . $paypal_link . '" target="_blank">click here</a>.</div><script type="text/javascript" async>setTimeout( function() {alert( "'.ucfirst( $benefactor ).' will be notified of your pledge to give a one-time gift of $' . $amt_dec . '. Please click OK to be redirected to PayPal and enter $' . $amt_dec . ' as the amount on the PayPal form." );window.open( "' . $paypal_link . '" )},1 );</script>';
        }
        else {
          $alert = '<div class="alert alert-info"><strong>Thank you for your support!</strong><p>The Japan team will be notified of your pledge to give a one-time gift of $' . $amt_dec . '. You will now be redirected to PayPal to complete the transaction. Please enter $' . $amt_dec . ' as the amount on the PayPal form.</p><br>If you are not redirected within a few seconds, <a href="' . $paypal_link . '" target="_blank">click here</a>.</div><script type="text/javascript" async>setTimeout( function() {alert( "The Japan team will be notified of your pledge to give a one-time gift of $' . $amt_dec . '. Please click OK to be redirected to PayPal and enter $' . $amt_dec . ' as the amount on the PayPal form." );window.open( "' . $paypal_link . '" )},1 );</script>';
        }
      }
    }
  }
  else {
    unset( $_SESSION['session'] );
    $_SESSION['session'] = bin2hex( openssl_random_pseudo_bytes( 10 ) );
    $first_name        = '';
    $last_name         = '';
    $benefactor        = 'team';
    $notes             = '';
    $prayer_support    = true;
    $financial_support = false;
  }
}
else {
  $_SESSION['session'] = bin2hex( openssl_random_pseudo_bytes( 10 ) );
  $first_name        = '';
  $last_name         = '';
  $benefactor        = 'team';
  $notes             = '';
  $prayer_support    = true;
  $financial_support = false;
}

get_header(); ?>
<?php flint_get_sidebar( 'header' ); ?>

  <div id="primary" class="content-area">

    <?php echo steel_slideshow( 5098 ); ?>

    <div class="banner">
      <p>LifePointe Church is sending a team to Tokyo, Japan<br>to serve alongside Janet Brown and the local Zao Church</p>
      <a class="btn btn-link" href="#meet-the-team">Meet the Team</a> <a class="btn btn-link" href="#pledge-support">Pledge Support</a> <a class="btn btn-link" href="#follow">Follow Us</a>
    </div>

    <div class="container">
      <div class="row">
        <h2 class="col-xs-12" id="meet-the-team">Meet the Team</h2>
      </div>
      <div class="row">
        <div class="jp-profile col-xs-12 col-md-6">
          <div class="row">
            <h3 class="col-xs-12">Matt Beall</h3>
            <div class="jp-profile-left col-xs-5 col-sm-4">
              <img class="jp-profile-img" src="//sharethelife.org/wp-content/uploads/jp15_matt_profile.jpg" alt="Matt Beall">
              <button class="btn btn-blue btn-block btn-support" data-support="matt">Pledge support</button>
            </div>
            <div class="jp-profile-content col-xs-7 col-sm-8">
              <p>Matt is a recent graduate from CSU, and the Founder and President of Star Verte LLC, a graphic design and website development firm. He loves others through service, and sees this trip as an opportunity for spiritual growth and extending God's love to Japan.</p>
              <p><strong>Prayer requests</strong>
                <ul>
                  <li>Self-discipline and spiritual growth</li>
                  <li>All barriers to going on the trip be removed</li>
                  <li>No problems arise with Star Verte LLC before or during the trip</li>
                </ul>
              </p>
            </div>
          </div>
        </div>
        <div class="jp-profile col-xs-12 col-md-6">
          <div class="row">
            <h3 class="col-xs-12">Josiah Burke</h3>
            <div class="jp-profile-left col-xs-5 col-sm-4">
              <img class="jp-profile-img" src="//sharethelife.org/wp-content/uploads/jp15_josiah_profile.jpg" alt="Josiah Burke">
              <button class="btn btn-blue btn-block btn-support" data-support="josiah">Pledge support</button>
            </div>
            <div class="jp-profile-content col-xs-7 col-sm-8">
              <p>Josiah is a 20 year old college student studying Criminal Justice. He is going to Japan, following Jesus' commission to make disciples in all nations. Josiah hopes to gain a new perspective on humanity in general and discover if God is calling him to lifelong missions.</p>
              <p><strong>Prayer requests</strong>
                <ul>
                  <li>Raise necessary funds</li>
                  <li>Finish spring semester well, allowing more time to prepare for trip</li>
                  <li>Be a good steward for Christ</li>
                </ul>
              </p>
            </div>
          </div>
        </div>
        <div class="jp-profile col-xs-12 col-md-6">
          <div class="row">
            <h3 class="col-xs-12">Wilaiwan Northrop</h3>
            <div class="jp-profile-left col-xs-5 col-sm-4">
              <img class="jp-profile-img" src="//sharethelife.org/wp-content/uploads/jp15_wilaiwan_profile.jpg" alt="Wilaiwan Northrop">
              <button class="btn btn-blue btn-block btn-support" data-support="wilaiwan">Pledge support</button>
            </div>
            <div class="jp-profile-content col-xs-7 col-sm-8">
              <p>Wilaiwan accepted Jesus Christ as her Savior in sixth grade, and loves teaching children about the gospel and serving the Lord. Her objective for Japan is to be obedient to God's calling, and learn to trust and depend on God.</p>
              <p><strong>Prayer requests</strong>
                <ul>
                  <li>Wisdom and favor from God to serve Him best</li>
                  <li>God's will be done in her life</li>
                </ul>
              </p>
            </div>
          </div>
        </div>
        <div class="jp-profile col-xs-12 col-md-6">
          <div class="row">
            <h3 class="col-xs-12">Whitney Paxton</h3>
            <div class="jp-profile-left col-xs-5 col-sm-4">
              <img class="jp-profile-img" src="//sharethelife.org/wp-content/uploads/jp15_whitney_profile.jpg" alt="Whitney Paxton">
              <button class="btn btn-blue btn-block btn-support" data-support="whitney">Pledge support</button>
            </div>
            <div class="jp-profile-content col-xs-7 col-sm-8">
              <p>Whitney is majoring in Humanities with an emphasis in Asian Studies at the University of Colorado in Boulder. The Japanese have one of the most beautiful countries and cultures. She wants to spread God's love, and let them know the hope and joy that comes from Jesus.</p>
              <p><strong>Prayer requests</strong>
                <ul>
                  <li>Be joyful and open to new experiences</li>
                  <li>Be brave and given the words from the Holy Spirit to share her faith</li>
                  <li>The Japanese will see God through her and the team</li>
                </ul>
              </p>
            </div>
          </div>
        </div>
        <div class="jp-profile col-xs-12 col-md-6">
          <div class="row">
            <h3 class="col-xs-12">Megan Spiegel</h3>
            <div class="jp-profile-left col-xs-5 col-sm-4">
              <img class="jp-profile-img" src="//sharethelife.org/wp-content/uploads/jp15_megan_profile.jpg" alt="Megan Spiegel">
              <button class="btn btn-blue btn-block btn-support" data-support="megan">Pledge support</button>
            </div>
            <div class="jp-profile-content col-xs-7 col-sm-8">
              <p>Megan married her husband, Josh, in 2007 and they have a daughter AdiLynn, who is a precious part of their family. They enjoy camping, snowboarding, hunting, fishing, playing games and photography. Megan loves and is certain God will change her life, and strengthen her relationship with Him through this trip.</p>
              <p><strong>Prayer requests</strong>
                <ul>
                  <li>Josh and AdiLynn</li>
                  <li>Humility, energy, and safety</li>
                  <li>God's presence and guidance</li>
                  <li>Inspiration from the Holy Spirit to explain the gospel clearly</li>
                  <li>Opportunities for the gospel to be heard</li>
                </ul>
              </p>
            </div>
          </div>
        </div>
      </div>

      <hr>

      <div class="row">
        <h2 class="col-xs-12" id="pledge-support">Pledge Support</h2>
      </div>

      <?php
        if ( function_exists( 'flint_options' ) ) {
          $options = flint_options();
        } else {
          $options = flint_get_options();
        }

        $raised  = $options['trinity_japan_raised'];
        $raised_percent = floatval( $raised ) / 15000 * 100;
      ?>

      <div class="progress" id="jp-progress">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo round( $raised_percent ); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $raised_percent; ?>%;">
          <?php echo round( $raised_percent, 1 ); ?>% <span class="hidden-xs">funds </span>raised
        </div>
      </div>
      <div class="row">
        <small class="col-xs-12 text-right">Last updated: <?php echo $options['trinity_japan_raised_updated']; ?></small>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <p><strong>This form is still under development. It requires JavaScript and will not work if pop-ups are blocked</strong>. If you have any problems, please <a href="http://sharethelife.org/im-new/contact-us/">let us know</a> with as much detail as possible.</p>
          <div id="form_alert"><?php echo $alert; ?></div>
          <form class="form-horizontal" id="paypal_giving" method="post" action="<?php echo get_permalink(); ?>#pledge-support" onsubmit="return steel_validate()">
            <div class="form-group form-validate" data-target="#first_name" data-required="true" data-type="text" data-title="First Name">
              <div class="col-xs-12">
                <label class="control-label" for="first_name">First Name</label>
              </div>
              <div class="col-xs-12">
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" value="<?php echo $first_name; ?>" required>
              </div>
            </div>
            <div class="form-group form-validate" data-target="#last_name" data-required="true" data-type="text" data-title="Last Name">
              <div class="col-xs-12">
                <label class="control-label" for="last_name">Last Name</label>
              </div>
              <div class="col-xs-12">
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="<?php echo $last_name; ?>" required>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
                <label class="control-label" for="benefactor">I would love to support</label>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
                <select class="form-control" id="benefactor" name="benefactor" required>
                <?php foreach( $benefactors as $key => $value ) { ?>
                  <option value="<?php echo $key; ?>" <?php selected( $benefactor, $key ) ?>><?php echo $value; ?></option>
                <?php } ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-12">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="prayer_support" id="prayer_support" value="true" <?php checked( $prayer_support ); ?>>
                    <strong>through prayer before, during, and after the trip.</strong>
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-xs-12">
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="financial_support" id="financial_support" value="true" <?php checked( $financial_support ); ?>>
                    <strong>with a one-time gift of:</strong>
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group" id="amt_dec_group">
              <div class="col-xs-offset-1 col-xs-3">
                <div class="input-group">
                  <span class="input-group-addon">$</span>
                  <input type="number" class="form-control" id="amt_dec" name="amt_dec" value="<?php echo $amt_dec; ?>" placeholder="150.00">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-xs-offset-1 col-xs-11">
                <div class="radio">
                  <label>
                    <input type="radio" name="paypal_account" id="paypal_account_true" value="true" required>
                    <strong>I have a PayPal account</strong> or will create one<br>
                    <small>100% of your donation will go to LifePointe Church</small>
                  </label>
                </div>
              </div>
              <div class="col-xs-offset-1 col-xs-11">
                <div class="radio">
                  <label>
                    <input type="radio" name="paypal_account" id="paypal_account_false" value="false" required>
                    <strong>I do not have a PayPal account</strong><br>
                    <small>Approximately 2.5% of your donation will go to transaction fees</small>
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group" data-target="#notes" data-parent="other">
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
      </div>

      <hr>

      <div class="row">
        <?php flint_get_sidebar( 'left' ); ?>

        <div id="content" role="main" <?php flint_content_class(); ?>>

          <div class="col-xs-12">

            <h2 id="follow">Follow Us</h2>

            <?php $japan_posts = new WP_Query( 'category_name=jp15' ); ?>

            <?php if ( $japan_posts->have_posts() ) : ?>

              <div class="row">

                <?php while ( $japan_posts->have_posts() ) : $japan_posts->the_post(); ?>

                  <div class="col-md-4">

                      <?php flint_post_thumbnail(); ?>
                      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                          <?php $type = get_post_type(); ?>
                          <?php do_action( 'flint_open_entry_header_'.$type ); ?>

                          <h2><?php
                            if ( is_single() ) {
                              echo the_title();
                            } else {
                              echo '<a href="' . get_permalink() .'" rel="bookmark">' . get_the_title() . '</a>';
                            }
                          ?></h2>

                          <div class="entry-meta">
                            <?php do_action( 'flint_entry_meta_above_'.$type ); ?>
                          </div><!-- .entry-meta -->

                          <?php do_action( 'flint_close_entry_header_'.$type ); ?>

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

                        <div class="clearfix"></div>

                        <footer class="entry-meta clearfix">
                          <?php do_action( 'flint_entry_meta_below_post' ); ?>
                        </footer><!-- .entry-meta -->
                      </article><!-- #post-<?php the_ID(); ?> -->

                    </div><!-- .col-md-4 -->

                <?php endwhile; ?>

                <?php flint_content_nav( 'nav-below' ); ?>

                <?php wp_reset_postdata(); ?>

              </div><!-- .row -->

            <?php else : ?>

              <div class="row">

                <?php get_template_part( 'no-results', 'archive' ); ?>

              </div><!-- .row -->

            <?php endif; ?>

          </div>

        </div><!-- #content -->

        <?php flint_get_sidebar( 'right' ); ?>
      </div>
    </div>

  </div><!-- #primary -->

<?php flint_get_sidebar( 'footer' ); ?>
<?php get_footer(); ?>
