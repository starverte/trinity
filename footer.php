<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Flint/Trinity
 * @since 0.2.1
 */
?>

<div class="footer-row">
  <div class="container">
    <div class="row">

      <div class="col-xs-6 col-sm-2">
        <?php wp_nav_menu( array( 'theme_location' => 'footer1', 'container' => false, 'fallback_cb' => false ) ); ?>
      </div>

      <div class="col-xs-6 col-sm-2">
        <?php wp_nav_menu( array( 'theme_location' => 'footer2', 'container' => false, 'fallback_cb' => false ) ); ?>
      </div>

      <div class="clearfix hidden-md hidden-lg"></div>

      <div class="col-sm-4 text-center">
        <h3>Sunday Worship @ 9:30am</h3>
        <p>900 E Prospect Rd<br>
        Fort Collins, CO 80524<br>
        970.484.4053</p>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=LifePointe+Church,+Fort+Collins,+CO&amp;aq=0&amp;sll=40.573674,-105.082834&amp;sspn=0.017733,0.046735&amp;vpsrc=6&amp;ie=UTF8&amp;hq=LifePointe+Church,&amp;hnear=Fort+Collins,+Larimer,+Colorado&amp;t=m&amp;cid=10123672826086679675&amp;ll=40.576282,-105.059509&amp;spn=0.019558,0.055704&amp;z=14&amp;iwloc=A&amp;output=embed" width="300" height="150" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>
          <div class="clearfix"></div>
          <p></p>
        </div>
      </div>

      <div class="col-xs-6 col-sm-2">
        <h3>Affiliations</h3>
        <p class="affiliated">
          <a href="http://rmcn.org"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/rmcnlogo.png" alt="Rocky Mountain Church Network"></a>
        </p>
        <p class="affiliated">
          <a href="http://fortcollinschurchnetwork.org"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/fccnlogo.png" alt="Fort Collins Church Network"></a>
        </p>
        <p class="affiliated">
          <a href="http://www.fcgov.com/climatewise/"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/cwlogo.png" alt="ClimateWise"></a>
        </p>
      </div>

      <div class="col-xs-6 col-sm-2">
        <?php wp_nav_menu( array( 'theme_location' => 'footer3', 'container' => false, 'fallback_cb' => false ) ); ?>
      </div>

    </div><!-- .row -->
  </div><!-- .container -->
</div><!-- .footer-row -->

</div><!-- #page -->

<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="site-info container">
    <div id="custom-footer" class="col-xs-12 col-md-6">
      <?php flint_custom_footer(); ?>
    </div>
    <div id="credits" class="col-xs-12 col-md-6">
      <?php $theme = wp_get_theme(); ?>
      Powered by <a href="http://wordpress.org/" title="A Semantic Personal Publishing Platform">WordPress</a><br />
      Theme: <a href="<?php echo $theme->get( 'ThemeURI' ) ?>"><?php echo $theme ?></a> by <?php echo $theme->get( 'Author' ) ?>
    </div>
  </div><!-- .site-info -->
</footer><!-- #colophon -->

<?php get_footer( 'close' );

