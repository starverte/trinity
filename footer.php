<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Flint/Trinity
 * @since 0.5.2
 */
?>

<div class="footer-row">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 text-center">
        <img src="https://sharethelife.org/wp-content/themes/trinity/img/lifepointe-church-front.png">
        <h3>Sunday Worship @ 9:30am</h3>
        <p>900 E Prospect Rd<br>
        Fort Collins, CO 80524<br>
        970.484.4053</p>
      </div>
      <div class="col-xs-6 col-sm-2">
        <?php wp_nav_menu( array( 'theme_location' => 'footer1', 'container' => false, 'fallback_cb' => false ) ); ?>
      </div>
      <div class="col-xs-6 col-sm-2">
        <?php wp_nav_menu( array( 'theme_location' => 'footer2', 'container' => false, 'fallback_cb' => false ) ); ?>
      </div>
      <div class="clearfix hidden-md hidden-lg"></div>
      <div class="col-xs-6 col-sm-2">
        <?php wp_nav_menu( array( 'theme_location' => 'footer3', 'container' => false, 'fallback_cb' => false ) ); ?>
        <iframe frameborder="0" height="150" marginheight="0" marginwidth="0" scrolling="no" src="//maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=LifePointe+Church,+Fort+Collins,+CO&amp;aq=0&amp;sll=40.573674,-105.082834&amp;sspn=0.017733,0.046735&amp;vpsrc=6&amp;ie=UTF8&amp;hq=LifePointe+Church,&amp;hnear=Fort+Collins,+Larimer,+Colorado&amp;t=m&amp;cid=10123672826086679675&amp;ll=40.576282,-105.059509&amp;spn=0.019558,0.055704&amp;z=14&amp;iwloc=A&amp;output=embed" width="300"></iframe>
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

