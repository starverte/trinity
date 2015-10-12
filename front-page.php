<?php
/**
 * The template for displaying the front page
 *
 * Template file used to render the Site Front Page,
 * whether the front page displays the Blog Posts Index
 * or a static page.
 *
 * @package Flint/Trinity
 * @since 0.4.1
 *
 */

get_header(); ?>
<?php flint_get_sidebar('header'); ?>

  <div id="primary" class="content-area">

    <?php
    if ( function_exists( 'flint_options' ) ) {
      $options = flint_options();
    } else {
      $options = flint_get_options();
    }

    echo steel_slideshow( $options['trinity_front_page_hero'], 'front-slides' );
    ?>

    <div class="container">

      <?php echo steel_slideshow( $options['trinity_front_page_featured'] ); ?>

      <div id="content" class="<?php echo $content_class; ?>" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'templates/' . flint_get_template(), 'content' ); ?>

          <?php if ( comments_open() || '0' != get_comments_number() ) { comments_template(); } ?>

        <?php endwhile; ?>

      </div><!-- #content -->

    </div><!-- .container -->

    <div id="mission">
      <div class="container text-center">
        <h5>Our Mission</h5>
        <h1>To make gospel-centered disciples of Jesus Christ</h1>
        <h5>who</h5>
        <div class="row">
          <div class="col-xs-4">
            <h3>Glorify God</h3>
            <p class="hidden-xs">for who He is and what He has done</p>
          </div>
          <div class="col-xs-4">
            <h3>Grow together</h3>
            <p class="hidden-xs">in God's Word</p>
          </div>
          <div class="col-xs-4">
            <h3>Go to all people</h3>
            <p class="hidden-xs">near and far declaring the gospel of God's grace</p>
          </div>
        </div>
      </div>
    </div>

    <div id="next-steps">
      <div class="container">
        <div class="col-sm-4">
          <a class="ns" href="http://sharethelife.org/know-god/" title="" id="know-god-a">
            <img id="know_god_img" src="http://sharethelife.org/wp-content/uploads/Bible-with-Pen-S.jpg" alt="Become a Christian">
            <div class="ns-caption" data-img="#know_god_img" data-caption="#know_god_caption">
              <span id="know_god_caption">Become a Christian</span>
            </div>
          </a>
          <div class="clearfix"></div>
        </div>
        <div class="col-sm-4">
          <a class="ns" href="http://sharethelife.org/get-connected/lifegroups/" title="">
            <img id="lifegroups_img" src="http://sharethelife.org/wp-content/uploads/lifegroups.png" alt="Join a LifeGroup">
            <div class="ns-caption" data-img="#lifegroups_img" data-caption="#lifegroups_caption">
              <span id="lifegroups_caption">Join a LifeGroup</span>
            </div>
          </a>
          <div class="clearfix"></div>
        </div>
        <div class="col-sm-4">
          <a class="ns" href="http://sharethelife.org/get-connected/serve/" title="">
          <img id="serve_img" src="http://sharethelife.org/wp-content/uploads/serve.png" alt="Baptism2">
            <div class="ns-caption" data-img="#serve_img" data-caption="#serve_caption">
              <span id="serve_caption">Serve</span>
            </div>
          </a>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>

    <div id="church_profile_img">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lifepointe-church-front.png">
    </div>
    <div id="church_profile_container" class="container">
      <div id="church_profile_overlay" class="overlay col-xs-3">
        <h2>LifePointe Church</h2>
        <h3>900 E Prospect Rd<br>
          Fort Collins, CO 80524</h3>
      </div>
    </div>
    <div id="church_profile_clearfix" class="clearfix"></div>

  </div><!-- #primary -->

<?php flint_get_sidebar('footer'); ?>
<?php get_footer(); ?>
