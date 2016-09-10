<?php
/**
 * The template used for displaying custom post type content
 *
 * @package Flint/Trinity
 * @since 0.3.0
 */

if ( get_post_meta( $post->ID, 'week1_date', true ) ) {
  $date_meta_1 = get_post_meta( $post->ID, 'week1_date', true );
  $week1_date = date( 'M. j', $date_meta_1 );
}
if ( get_post_meta( $post->ID, 'week2_date', true ) ) {
  $date_meta_2 = get_post_meta( $post->ID, 'week2_date', true );
  $week2_date = date( 'M. j', $date_meta_2 );
}
if ( get_post_meta( $post->ID, 'week3_date', true ) ) {
  $date_meta_3 = get_post_meta( $post->ID, 'week3_date', true );
  $week3_date = date( 'M. j', $date_meta_3 );
}
if ( get_post_meta( $post->ID, 'week4_date', true ) ) {
  $date_meta_4 = get_post_meta( $post->ID, 'week4_date', true );
  $week4_date = date( 'M. j', $date_meta_4 );
}
if ( get_post_meta( $post->ID, 'week5_date', true ) ) {
  $date_meta_5 = get_post_meta( $post->ID, 'week5_date', true );
  $week5_date = date( 'M. j', $date_meta_5 );
}
if ( get_post_meta( $post->ID, 'week6_date', true ) ) {
  $date_meta_6 = get_post_meta( $post->ID, 'week6_date', true );
  $week6_date = date( 'M. j', $date_meta_6 );
}
if ( get_post_meta( $post->ID, 'week7_date', true ) ) {
  $date_meta_7 = get_post_meta( $post->ID, 'week7_date', true );
  $week7_date = date( 'M. j', $date_meta_7 );
}
if ( get_post_meta( $post->ID, 'week8_date', true ) ) {
  $date_meta_8 = get_post_meta( $post->ID, 'week8_date', true );
  $week8_date = date( 'M. j', $date_meta_8 );
}
if ( get_post_meta( $post->ID, 'week9_date', true ) ) {
  $date_meta_9 = get_post_meta( $post->ID, 'week9_date', true );
  $week9_date = date( 'M. j', $date_meta_9 );
}
if ( get_post_meta( $post->ID, 'week10_date', true ) ) {
  $date_meta_10 = get_post_meta( $post->ID, 'week10_date', true );
  $week10_date = date( 'M. j', $date_meta_10 );
}
if ( get_post_meta( $post->ID, 'week11_date', true ) ) {
  $date_meta_11 = get_post_meta( $post->ID, 'week11_date', true );
  $week11_date = date( 'M. j', $date_meta_11 );
}
if ( get_post_meta( $post->ID, 'week12_date', true ) ) {
  $date_meta_12 = get_post_meta( $post->ID, 'week12_date', true );
  $week12_date = date( 'M. j', $date_meta_12 );
}
if ( get_post_meta( $post->ID, 'week13_date', true ) ) {
  $date_meta_13 = get_post_meta( $post->ID, 'week13_date', true );
  $week13_date = date( 'M. j', $date_meta_13 );
}
if ( get_post_meta( $post->ID, 'week14_date', true ) ) {
  $date_meta_14 = get_post_meta( $post->ID, 'week14_date', true );
  $week14_date = date( 'M. j', $date_meta_14 );
}
if ( get_post_meta( $post->ID, 'week15_date', true ) ) {
  $date_meta_15 = get_post_meta( $post->ID, 'week15_date', true );
  $week15_date = date( 'M. j', $date_meta_15 );
}
if ( get_post_meta( $post->ID, 'week16_date', true ) ) {
  $date_meta_16 = get_post_meta( $post->ID, 'week16_date', true );
  $week16_date = date( 'M. j', $date_meta_16 );
}
if ( get_post_meta( $post->ID, 'week17_date', true ) ) {
  $date_meta_17 = get_post_meta( $post->ID, 'week17_date', true );
  $week17_date = date( 'M. j', $date_meta_17 );
}
if ( get_post_meta( $post->ID, 'week18_date', true ) ) {
  $date_meta_18 = get_post_meta( $post->ID, 'week18_date', true );
  $week18_date = date( 'M. j', $date_meta_18 );
}
if ( get_post_meta( $post->ID, 'week19_date', true ) ) {
  $date_meta_19 = get_post_meta( $post->ID, 'week19_date', true );
  $week19_date = date( 'M. j', $date_meta_19 );
}
if ( get_post_meta( $post->ID, 'week20_date', true ) ) {
  $date_meta_20 = get_post_meta( $post->ID, 'week20_date', true );
  $week20_date = date( 'M. j', $date_meta_20 );
}
if ( get_post_meta( $post->ID, 'week21_date', true ) ) {
  $date_meta_21 = get_post_meta( $post->ID, 'week21_date', true );
  $week21_date = date( 'M. j', $date_meta_21 );
}

?>

  <article id="sermon-<?php the_ID(); ?>" <?php post_class( 'row' ); ?>>
    <div class="col-lg-4 col-md-4 col-sm-4">
      <?php flint_the_post_thumbnail( 'large' ); ?>
    </div>
    <div class="col-lg-8 col-md-8 col-sm-8">
      <header class="entry-header">
        <?php do_action( 'flint_open_entry_header_sermon' ); ?>

        <h1 class="entry-title"><?php
          if ( is_singular() ) {
            echo the_title();
          } else {
            $permalink = get_permalink();
            $title = get_the_title();
            echo '<a href="' . $permalink . '" rel="bookmark">' . $title . '</a>';
          }
        ?></h1>
        <?php if ( current_user_can( 'edit_posts' ) ) { ?><a class="btn btn-default btn-sm btn-edit hidden-xs" href="<?php echo get_edit_post_link(); ?>">Edit</a><?php } ?>

        <div class="entry-meta">
            <?php echo date( 'F j', $date_meta_1 ); ?>
            <?php if ( get_post_meta( $post->ID, 'week21_date', true ) ) {
                    echo ' through ';
                    echo date( 'F j, Y', $date_meta_21 );
                  } elseif ( get_post_meta( $post->ID, 'week20_date', true ) ) {
                    echo ' through ';
                    echo date( 'F j, Y', $date_meta_20 );
                  } elseif ( get_post_meta( $post->ID, 'week19_date', true ) ) {
                    echo ' through ';
                    echo date( 'F j, Y', $date_meta_19 );
                  } elseif ( get_post_meta( $post->ID, 'week18_date', true ) ) {
                    echo ' through ';
                    echo date( 'F j, Y', $date_meta_18 );
                  } elseif ( get_post_meta( $post->ID, 'week17_date', true ) ) {
                    echo ' through ';
                    echo date( 'F j, Y', $date_meta_17 );
                  } elseif ( get_post_meta( $post->ID, 'week16_date', true ) ) {
                    echo ' through ';
                    echo date( 'F j, Y', $date_meta_16 );
                  } elseif ( get_post_meta( $post->ID, 'week15_date', true ) ) {
                    echo ' through ';
                    echo date( 'F j, Y', $date_meta_15 );
                  } elseif ( get_post_meta( $post->ID, 'week14_date', true ) ) {
                    echo ' through ';
                    echo date( 'F j, Y', $date_meta_14 );
                  } elseif ( get_post_meta( $post->ID, 'week13_date', true ) ) {
                    echo ' through ';
                    echo date( 'F j, Y', $date_meta_13 );
                  } elseif ( get_post_meta( $post->ID, 'week12_date', true ) ) {
                    echo ' through ';
                    echo date( 'F j, Y', $date_meta_12 );
                  } elseif ( get_post_meta( $post->ID, 'week11_date', true ) ) {
                    echo ' through ';
                    echo date( 'F j, Y', $date_meta_11 );
                  } elseif ( get_post_meta( $post->ID, 'week10_date', true ) ) {
                    echo ' through ';
                    echo date( 'F j, Y', $date_meta_10 );
                  } elseif ( get_post_meta( $post->ID, 'week9_date', true ) ) {
                    echo ' through ';
                    echo date( 'F j, Y', $date_meta_9 );
                  } elseif ( get_post_meta( $post->ID, 'week8_date', true ) ) {
                    echo ' through ';
                    echo date( 'F j, Y', $date_meta_8 );
                  } elseif ( get_post_meta( $post->ID, 'week7_date', true ) ) {
                    echo ' through ';
                    echo date( 'F j, Y', $date_meta_7 );
                  } elseif ( get_post_meta( $post->ID, 'week6_date', true ) ) {
                    echo ' through ';
                    echo date( 'F j, Y', $date_meta_6 );
                  } elseif ( get_post_meta( $post->ID, 'week5_date', true ) ) {
                    echo ' through ';
                    echo date( 'F j, Y', $date_meta_5 );
                  } elseif ( get_post_meta( $post->ID, 'week4_date', true ) ) {
                    echo ' through ';
                    echo date( 'F j, Y', $date_meta_4 );
                  } elseif ( get_post_meta( $post->ID, 'week3_date', true ) ) {
                    echo ' through ';
                    echo date( 'F j, Y', $date_meta_3 );
                  } elseif ( get_post_meta( $post->ID, 'week2_date', true ) ) {
                    echo ' and ';
                    echo date( 'F j, Y', $date_meta_2 );
                  } elseif ( get_post_meta( $post->ID, 'week1_date', true ) ) {
                    echo date( ', Y', $date_meta_1 );
                  } ?>
          <?php do_action( 'flint_entry_meta_above_sermon' ); ?>
        </div><!-- .entry-meta -->

        <?php do_action( 'flint_close_entry_header_sermon' ); ?>

      </header><!-- .entry-header -->

      <?php if ( is_search() ) : ?>
      <div class="entry-summary">
        <?php the_excerpt(); ?>
      </div><!-- .entry-summary -->
      <?php else : ?>
      <div class="entry-content">
        <button class="btn btn-blue" data-toggle="collapse" data-target="#sermon-list-<?php the_ID(); ?>"><?php echo has_term( 'academy', 'sermon_topics' ) ? 'Sessions' : 'Sermon List'; ?></button>
        <div class="clearfix"></div>
        <p></p>
        <?php flint_the_content(); ?>
      </div><!-- .entry-content -->
      <?php endif; ?>

      <footer class="entry-meta clearfix">
      <?php do_action( 'flint_entry_meta_below_sermon' ); ?>
      </footer><!-- .entry-meta -->
    </div>
  </article><!-- #series-<?php the_ID(); ?> -->
  <div id="sermon-list-<?php the_ID(); ?>" class="sermon-list collapse">

    <?php if ( get_post_meta( $post->ID, 'week1_audio', true ) ) : ?>
    <div class="clearfix"></div>
    <div id="week1" class="sermons">
      <?php $audio_meta_1 = get_post_meta( $post->ID, 'week1_audio', true );
            $week1_audio_id = url_to_postid( $audio_meta_1 );
            $week1_audio_file = wp_get_attachment_url( $week1_audio_id );
            $pdf_meta_1 = get_post_meta( $post->ID, 'week1_pdf', true );
            $week1_pdf_id = url_to_postid( $pdf_meta_1 );
            $week1_pdf_file = wp_get_attachment_url( $week1_pdf_id );
            $week1_pdf_title = $week1_pdf_id->post_title; ?>

      <h4 class="title"><?php echo get_post_meta( $post->ID, 'week1_title', true ) ?></h4>
      <p class="sermon-details col-sm-8"><span class="date"><?php echo $week1_date; ?></span> | <span class="speaker"><?php echo get_post_meta( $post->ID, 'week1_speaker', true ) ?></span> | <span class="passage"><?php echo has_term( 'academy', 'sermon_topics' ) ? 'Assignment: ' : 'Scripture: '; ?><?php echo get_post_meta( $post->ID, 'week1_passage', true ) ?></span></p>

      <div class="sermon-media col-sm-4">
        <a class="col-xs-3" title="Listen to <?php echo get_post_meta( $post->ID, 'week1_title', true ) ?>" href="<?php echo $week1_audio_file; ?>" target="_blank"><i class="glyphicon glyphicon-music"></i></a>
        <a class="col-xs-3" title="Download <?php echo get_post_meta( $post->ID, 'week1_title', true ) ?>" href="<?php echo get_stylesheet_directory_uri(); ?>/download.php?file=<?php echo $week1_audio_file; ?>"><i class="glyphicon glyphicon-download"></i></a>
    <?php if ( ! empty( get_post_meta( $post->ID, 'week1_vimeo_id', true ) ) ) { ?><a title="<?php echo get_post_meta( $post->ID, 'week1_vimeo_title', true ) ?>" class="col-xs-3" target="_blank" href="http://player.vimeo.com/video/<?php echo get_post_meta( $post->ID, 'week1_vimeo_id', true ) ?>"><i class="glyphicon glyphicon-play-circle"></i></a><?php } ?>
    <?php if ( get_post_meta( $post->ID, 'week1_pdf', true ) ) { ?> <a title="<?php echo get_the_title( $week1_pdf_id ); ?>" class="col-xs-3" href="<?php echo $week1_pdf_file; ?>"><i class="glyphicon glyphicon-file"></i></a><?php } ?>
        <div class="clearfix"></div>
      </div><!-- .sermon-media -->
    </div><!-- #week1 -->
    <div class="clearfix"></div>
    <?php endif; ?>

    <?php if ( get_post_meta( $post->ID, 'week2_audio', true ) ) : ?>
    <div id="week2" class="sermons">
      <?php $audio_meta_2 = get_post_meta( $post->ID, 'week2_audio', true );
            $week2_audio_id = url_to_postid( $audio_meta_2 );
            $week2_audio_file = wp_get_attachment_url( $week2_audio_id );
            $pdf_meta_2 = get_post_meta( $post->ID, 'week2_pdf', true );
            $week2_pdf_id = url_to_postid( $pdf_meta_2 );
            $week2_pdf_file = wp_get_attachment_url( $week2_pdf_id );
            $week2_pdf_title = $week2_pdf_id->post_title; ?>

      <h4 class="title"><?php echo get_post_meta( $post->ID, 'week2_title', true ) ?></h4>
      <p class="sermon-details col-sm-8"><span class="date"><?php echo $week2_date; ?></span> | <span class="speaker"><?php echo get_post_meta( $post->ID, 'week2_speaker', true ) ?></span> | <span class="passage"><?php echo has_term( 'academy', 'sermon_topics' ) ? 'Assignment: ' : 'Scripture: '; ?><?php echo get_post_meta( $post->ID, 'week2_passage', true ) ?></span></p>

      <div class="sermon-media col-sm-4">
        <a class="col-xs-3" title="Listen to <?php echo get_post_meta( $post->ID, 'week2_title', true ) ?>" href="<?php echo $week2_audio_file; ?>" target="_blank"><i class="glyphicon glyphicon-music"></i></a>
        <a class="col-xs-3" title="Download <?php echo get_post_meta( $post->ID, 'week2_title', true ) ?>" href="<?php echo get_stylesheet_directory_uri(); ?>/download.php?file=<?php echo $week2_audio_file; ?>"><i class="glyphicon glyphicon-download"></i></a>
    <?php if ( get_post_meta( $post->ID, 'week2_vimeo_id', true ) ) { ?><a title="<?php echo get_post_meta( $post->ID, 'week2_vimeo_title', true ) ?>" class="col-xs-3" target="_blank" href="http://player.vimeo.com/video/<?php echo get_post_meta( $post->ID, 'week2_vimeo_id', true ) ?>"><i class="glyphicon glyphicon-play-circle"></i></a><?php } ?>
    <?php if ( get_post_meta( $post->ID, 'week2_pdf', true ) ) { ?> <a title="<?php echo get_the_title( $week2_pdf_id ); ?>" class="col-xs-3" href="<?php echo $week2_pdf_file; ?>"><i class="glyphicon glyphicon-file"></i></a><?php } ?>
        <div class="clearfix"></div>
      </div><!-- .sermon-media -->
    </div><!-- #week2 -->
    <div class="clearfix"></div>
    <?php endif; ?>

    <?php if ( get_post_meta( $post->ID, 'week3_audio', true ) ) : ?>
    <div id="week3" class="sermons">
      <?php $audio_meta_3 = get_post_meta( $post->ID, 'week3_audio', true );
            $week3_audio_id = url_to_postid( $audio_meta_3 );
            $week3_audio_file = wp_get_attachment_url( $week3_audio_id );
            $pdf_meta_3 = get_post_meta( $post->ID, 'week3_pdf', true );
            $week3_pdf_id = url_to_postid( $pdf_meta_3 );
            $week3_pdf_file = wp_get_attachment_url( $week3_pdf_id );
            $week3_pdf_title = $week3_pdf_id->post_title; ?>

      <h4 class="title"><?php echo get_post_meta( $post->ID, 'week3_title', true ) ?></h4>
      <p class="sermon-details col-sm-8"><span class="date"><?php echo $week3_date; ?></span> | <span class="speaker"><?php echo get_post_meta( $post->ID, 'week3_speaker', true ) ?></span> | <span class="passage"><?php echo has_term( 'academy', 'sermon_topics' ) ? 'Assignment: ' : 'Scripture: '; ?><?php echo get_post_meta( $post->ID, 'week3_passage', true ) ?></span></p>

      <div class="sermon-media col-sm-4">
        <a class="col-xs-3" title="Listen to <?php echo get_post_meta( $post->ID, 'week3_title', true ) ?>" href="<?php echo $week3_audio_file; ?>" target="_blank"><i class="glyphicon glyphicon-music"></i></a>
        <a class="col-xs-3" title="Download <?php echo get_post_meta( $post->ID, 'week3_title', true ) ?>" href="<?php echo get_stylesheet_directory_uri(); ?>/download.php?file=<?php echo $week3_audio_file; ?>"><i class="glyphicon glyphicon-download"></i></a>
    <?php if ( get_post_meta( $post->ID, 'week3_vimeo_id', true ) ) { ?><a title="<?php echo get_post_meta( $post->ID, 'week3_vimeo_title', true ) ?>" class="col-xs-3" target="_blank" href="http://player.vimeo.com/video/<?php echo get_post_meta( $post->ID, 'week3_vimeo_id', true ) ?>"><i class="glyphicon glyphicon-play-circle"></i></a><?php } ?>
    <?php if ( get_post_meta( $post->ID, 'week3_pdf', true ) ) { ?> <a title="<?php echo get_the_title( $week3_pdf_id ); ?>" class="col-xs-3" href="<?php echo $week3_pdf_file; ?>"><i class="glyphicon glyphicon-file"></i></a><?php } ?>
        <div class="clearfix"></div>
      </div><!-- .sermon-media -->
    </div><!-- #week3 -->
    <div class="clearfix"></div>
    <?php endif; ?>

    <?php if ( get_post_meta( $post->ID, 'week4_audio', true ) ) : ?>
    <div id="week4" class="sermons">
      <?php $audio_meta_4 = get_post_meta( $post->ID, 'week4_audio', true );
            $week4_audio_id = url_to_postid( $audio_meta_4 );
            $week4_audio_file = wp_get_attachment_url( $week4_audio_id );
            $pdf_meta_4 = get_post_meta( $post->ID, 'week4_pdf', true );
            $week4_pdf_id = url_to_postid( $pdf_meta_4 );
            $week4_pdf_file = wp_get_attachment_url( $week4_pdf_id );
            $week4_pdf_title = $week4_pdf_id->post_title; ?>

      <h4 class="title"><?php echo get_post_meta( $post->ID, 'week4_title', true ) ?></h4>
      <p class="sermon-details col-sm-8"><span class="date"><?php echo $week4_date; ?></span> | <span class="speaker"><?php echo get_post_meta( $post->ID, 'week4_speaker', true ) ?></span> | <span class="passage"><?php echo has_term( 'academy', 'sermon_topics' ) ? 'Assignment: ' : 'Scripture: '; ?><?php echo get_post_meta( $post->ID, 'week4_passage', true ) ?></span></p>

      <div class="sermon-media col-sm-4">
        <a class="col-xs-3" title="Listen to <?php echo get_post_meta( $post->ID, 'week4_title', true ) ?>" href="<?php echo $week4_audio_file; ?>" target="_blank"><i class="glyphicon glyphicon-music"></i></a>
        <a class="col-xs-3" title="Download <?php echo get_post_meta( $post->ID, 'week4_title', true ) ?>" href="<?php echo get_stylesheet_directory_uri(); ?>/download.php?file=<?php echo $week4_audio_file; ?>"><i class="glyphicon glyphicon-download"></i></a>
    <?php if ( get_post_meta( $post->ID, 'week4_vimeo_id', true ) ) { ?><a title="<?php echo get_post_meta( $post->ID, 'week4_vimeo_title', true ) ?>" class="col-xs-3" target="_blank" href="http://player.vimeo.com/video/<?php echo get_post_meta( $post->ID, 'week4_vimeo_id', true ) ?>"><i class="glyphicon glyphicon-play-circle"></i></a><?php } ?>
    <?php if ( get_post_meta( $post->ID, 'week4_pdf', true ) ) { ?> <a title="<?php echo get_the_title( $week4_pdf_id ); ?>" class="col-xs-3" href="<?php echo $week4_pdf_file; ?>"><i class="glyphicon glyphicon-file"></i></a><?php } ?>
        <div class="clearfix"></div>
      </div><!-- .sermon-media -->
    </div><!-- #week4 -->
    <div class="clearfix"></div>
    <?php endif; ?>

    <?php if ( get_post_meta( $post->ID, 'week5_audio', true ) ) : ?>
    <div id="week5" class="sermons">
      <?php $audio_meta_5 = get_post_meta( $post->ID, 'week5_audio', true );
            $week5_audio_id = url_to_postid( $audio_meta_5 );
            $week5_audio_file = wp_get_attachment_url( $week5_audio_id );
            $pdf_meta_5 = get_post_meta( $post->ID, 'week5_pdf', true );
            $week5_pdf_id = url_to_postid( $pdf_meta_5 );
            $week5_pdf_file = wp_get_attachment_url( $week5_pdf_id );
            $week5_pdf_title = $week5_pdf_id->post_title; ?>

      <h4 class="title"><?php echo get_post_meta( $post->ID, 'week5_title', true ) ?></h4>
      <p class="sermon-details col-sm-8"><span class="date"><?php echo $week5_date; ?></span> | <span class="speaker"><?php echo get_post_meta( $post->ID, 'week5_speaker', true ) ?></span> | <span class="passage"><?php echo has_term( 'academy', 'sermon_topics' ) ? 'Assignment: ' : 'Scripture: '; ?><?php echo get_post_meta( $post->ID, 'week5_passage', true ) ?></span></p>

      <div class="sermon-media col-sm-4">
        <a class="col-xs-3" title="Listen to <?php echo get_post_meta( $post->ID, 'week5_title', true ) ?>" href="<?php echo $week5_audio_file; ?>" target="_blank"><i class="glyphicon glyphicon-music"></i></a>
        <a class="col-xs-3" title="Download <?php echo get_post_meta( $post->ID, 'week5_title', true ) ?>" href="<?php echo get_stylesheet_directory_uri(); ?>/download.php?file=<?php echo $week5_audio_file; ?>"><i class="glyphicon glyphicon-download"></i></a>
    <?php if ( get_post_meta( $post->ID, 'week5_vimeo_id', true ) ) { ?><a title="<?php echo get_post_meta( $post->ID, 'week5_vimeo_title', true ) ?>" class="col-xs-3" target="_blank" href="http://player.vimeo.com/video/<?php echo get_post_meta( $post->ID, 'week5_vimeo_id', true ) ?>"><i class="glyphicon glyphicon-play-circle"></i></a><?php } ?>
    <?php if ( get_post_meta( $post->ID, 'week5_pdf', true ) ) { ?> <a title="<?php echo get_the_title( $week5_pdf_id ); ?>" class="col-xs-3" href="<?php echo $week5_pdf_file; ?>"><i class="glyphicon glyphicon-file"></i></a><?php } ?>
        <div class="clearfix"></div>
      </div><!-- .sermon-media -->
    </div><!-- #week5 -->
    <div class="clearfix"></div>
    <?php endif; ?>

    <?php if ( get_post_meta( $post->ID, 'week6_audio', true ) ) : ?>
    <div id="week6" class="sermons">
      <?php $audio_meta_6 = get_post_meta( $post->ID, 'week6_audio', true );
            $week6_audio_id = url_to_postid( $audio_meta_6 );
            $week6_audio_file = wp_get_attachment_url( $week6_audio_id );
            $pdf_meta_6 = get_post_meta( $post->ID, 'week6_pdf', true );
            $week6_pdf_id = url_to_postid( $pdf_meta_6 );
            $week6_pdf_file = wp_get_attachment_url( $week6_pdf_id );
            $week6_pdf_title = $week6_pdf_id->post_title; ?>

      <h4 class="title"><?php echo get_post_meta( $post->ID, 'week6_title', true ) ?></h4>
      <p class="sermon-details col-sm-8"><span class="date"><?php echo $week6_date; ?></span> | <span class="speaker"><?php echo get_post_meta( $post->ID, 'week6_speaker', true ) ?></span> | <span class="passage"><?php echo has_term( 'academy', 'sermon_topics' ) ? 'Assignment: ' : 'Scripture: '; ?><?php echo get_post_meta( $post->ID, 'week6_passage', true ) ?></span></p>

      <div class="sermon-media col-sm-4">
        <a class="col-xs-3" title="Listen to <?php echo get_post_meta( $post->ID, 'week6_title', true ) ?>" href="<?php echo $week6_audio_file; ?>" target="_blank"><i class="glyphicon glyphicon-music"></i></a>
        <a class="col-xs-3" title="Download <?php echo get_post_meta( $post->ID, 'week6_title', true ) ?>" href="<?php echo get_stylesheet_directory_uri(); ?>/download.php?file=<?php echo $week6_audio_file; ?>"><i class="glyphicon glyphicon-download"></i></a>
    <?php if ( get_post_meta( $post->ID, 'week6_vimeo_id', true ) ) { ?><a title="<?php echo get_post_meta( $post->ID, 'week6_vimeo_title', true ) ?>" class="col-xs-3" target="_blank" href="http://player.vimeo.com/video/<?php echo get_post_meta( $post->ID, 'week6_vimeo_id', true ) ?>"><i class="glyphicon glyphicon-play-circle"></i></a><?php } ?>
    <?php if ( get_post_meta( $post->ID, 'week6_pdf', true ) ) { ?> <a title="<?php echo get_the_title( $week6_pdf_id ); ?>" class="col-xs-3" href="<?php echo $week6_pdf_file; ?>"><i class="glyphicon glyphicon-file"></i></a><?php } ?>
        <div class="clearfix"></div>
      </div><!-- .sermon-media -->
    </div><!-- #week6 -->
    <div class="clearfix"></div>
    <?php endif; ?>

    <?php if ( get_post_meta( $post->ID, 'week7_audio', true ) ) : ?>
    <div id="week7" class="sermons">
      <?php $audio_meta_7 = get_post_meta( $post->ID, 'week7_audio', true );
            $week7_audio_id = url_to_postid( $audio_meta_7 );
            $week7_audio_file = wp_get_attachment_url( $week7_audio_id );
            $pdf_meta_7 = get_post_meta( $post->ID, 'week7_pdf', true );
            $week7_pdf_id = url_to_postid( $pdf_meta_7 );
            $week7_pdf_file = wp_get_attachment_url( $week7_pdf_id );
            $week7_pdf_title = $week7_pdf_id->post_title; ?>

      <h4 class="title"><?php echo get_post_meta( $post->ID, 'week7_title', true ) ?></h4>
      <p class="sermon-details col-sm-8"><span class="date"><?php echo $week7_date; ?></span> | <span class="speaker"><?php echo get_post_meta( $post->ID, 'week7_speaker', true ) ?></span> | <span class="passage"><?php echo has_term( 'academy', 'sermon_topics' ) ? 'Assignment: ' : 'Scripture: '; ?><?php echo get_post_meta( $post->ID, 'week7_passage', true ) ?></span></p>

      <div class="sermon-media col-sm-4">
        <a class="col-xs-3" title="Listen to <?php echo get_post_meta( $post->ID, 'week7_title', true ) ?>" href="<?php echo $week7_audio_file; ?>" target="_blank"><i class="glyphicon glyphicon-music"></i></a>
        <a class="col-xs-3" title="Download <?php echo get_post_meta( $post->ID, 'week7_title', true ) ?>" href="<?php echo get_stylesheet_directory_uri(); ?>/download.php?file=<?php echo $week7_audio_file; ?>"><i class="glyphicon glyphicon-download"></i></a>
    <?php if ( get_post_meta( $post->ID, 'week7_vimeo_id', true ) ) { ?><a title="<?php echo get_post_meta( $post->ID, 'week7_vimeo_title', true ) ?>" class="col-xs-3" target="_blank" href="http://player.vimeo.com/video/<?php echo get_post_meta( $post->ID, 'week7_vimeo_id', true ) ?>"><i class="glyphicon glyphicon-play-circle"></i></a><?php } ?>
    <?php if ( get_post_meta( $post->ID, 'week7_pdf', true ) ) { ?> <a title="<?php echo get_the_title( $week7_pdf_id ); ?>" class="col-xs-3" href="<?php echo $week7_pdf_file; ?>"><i class="glyphicon glyphicon-file"></i></a><?php } ?>
        <div class="clearfix"></div>
      </div><!-- .sermon-media -->
    </div><!-- #week7 -->
    <div class="clearfix"></div>
    <?php endif; ?>

    <?php if ( get_post_meta( $post->ID, 'week8_audio', true ) ) : ?>
    <div id="week8" class="sermons">
      <?php $audio_meta_8 = get_post_meta( $post->ID, 'week8_audio', true );
            $week8_audio_id = url_to_postid( $audio_meta_8 );
            $week8_audio_file = wp_get_attachment_url( $week8_audio_id );
            $pdf_meta_8 = get_post_meta( $post->ID, 'week8_pdf', true );
            $week8_pdf_id = url_to_postid( $pdf_meta_8 );
            $week8_pdf_file = wp_get_attachment_url( $week8_pdf_id );
            $week8_pdf_title = $week8_pdf_id->post_title; ?>

      <h4 class="title"><?php echo get_post_meta( $post->ID, 'week8_title', true ) ?></h4>
      <p class="sermon-details col-sm-8"><span class="date"><?php echo $week8_date; ?></span> | <span class="speaker"><?php echo get_post_meta( $post->ID, 'week8_speaker', true ) ?></span> | <span class="passage"><?php echo has_term( 'academy', 'sermon_topics' ) ? 'Assignment: ' : 'Scripture: '; ?><?php echo get_post_meta( $post->ID, 'week8_passage', true ) ?></span></p>

      <div class="sermon-media col-sm-4">
        <a class="col-xs-3" title="Listen to <?php echo get_post_meta( $post->ID, 'week8_title', true ) ?>" href="<?php echo $week8_audio_file; ?>" target="_blank"><i class="glyphicon glyphicon-music"></i></a>
        <a class="col-xs-3" title="Download <?php echo get_post_meta( $post->ID, 'week8_title', true ) ?>" href="<?php echo get_stylesheet_directory_uri(); ?>/download.php?file=<?php echo $week8_audio_file; ?>"><i class="glyphicon glyphicon-download"></i></a>
    <?php if ( get_post_meta( $post->ID, 'week8_vimeo_id', true ) ) { ?><a title="<?php echo get_post_meta( $post->ID, 'week8_vimeo_title', true ) ?>" class="col-xs-3" target="_blank" href="http://player.vimeo.com/video/<?php echo get_post_meta( $post->ID, 'week8_vimeo_id', true ) ?>"><i class="glyphicon glyphicon-play-circle"></i></a><?php } ?>
    <?php if ( get_post_meta( $post->ID, 'week8_pdf', true ) ) { ?> <a title="<?php echo get_the_title( $week8_pdf_id ); ?>" class="col-xs-3" href="<?php echo $week8_pdf_file; ?>"><i class="glyphicon glyphicon-file"></i></a><?php } ?>
        <div class="clearfix"></div>
      </div><!-- .sermon-media -->
    </div><!-- #week8 -->
    <div class="clearfix"></div>
    <?php endif; ?>

    <?php if ( get_post_meta( $post->ID, 'week9_audio', true ) ) : ?>
    <div id="week9" class="sermons">
      <?php $audio_meta_9 = get_post_meta( $post->ID, 'week9_audio', true );
            $week9_audio_id = url_to_postid( $audio_meta_9 );
            $week9_audio_file = wp_get_attachment_url( $week9_audio_id );
            $pdf_meta_9 = get_post_meta( $post->ID, 'week9_pdf', true );
            $week9_pdf_id = url_to_postid( $pdf_meta_9 );
            $week9_pdf_file = wp_get_attachment_url( $week9_pdf_id );
            $week9_pdf_title = $week9_pdf_id->post_title; ?>

      <h4 class="title"><?php echo get_post_meta( $post->ID, 'week9_title', true ) ?></h4>
      <p class="sermon-details col-sm-8"><span class="date"><?php echo $week9_date; ?></span> | <span class="speaker"><?php echo get_post_meta( $post->ID, 'week9_speaker', true ) ?></span> | <span class="passage"><?php echo has_term( 'academy', 'sermon_topics' ) ? 'Assignment: ' : 'Scripture: '; ?><?php echo get_post_meta( $post->ID, 'week9_passage', true ) ?></span></p>

      <div class="sermon-media col-sm-4">
        <a class="col-xs-3" title="Listen to <?php echo get_post_meta( $post->ID, 'week9_title', true ) ?>" href="<?php echo $week9_audio_file; ?>" target="_blank"><i class="glyphicon glyphicon-music"></i></a>
        <a class="col-xs-3" title="Download <?php echo get_post_meta( $post->ID, 'week9_title', true ) ?>" href="<?php echo get_stylesheet_directory_uri(); ?>/download.php?file=<?php echo $week9_audio_file; ?>"><i class="glyphicon glyphicon-download"></i></a>
    <?php if ( get_post_meta( $post->ID, 'week9_vimeo_id', true ) ) { ?><a title="<?php echo get_post_meta( $post->ID, 'week9_vimeo_title', true ) ?>" class="col-xs-3" target="_blank" href="http://player.vimeo.com/video/<?php echo get_post_meta( $post->ID, 'week9_vimeo_id', true ) ?>"><i class="glyphicon glyphicon-play-circle"></i></a><?php } ?>
    <?php if ( get_post_meta( $post->ID, 'week9_pdf', true ) ) { ?> <a title="<?php echo get_the_title( $week9_pdf_id ); ?>" class="col-xs-3" href="<?php echo $week9_pdf_file; ?>"><i class="glyphicon glyphicon-file"></i></a><?php } ?>
        <div class="clearfix"></div>
      </div><!-- .sermon-media -->
    </div><!-- #week9 -->
    <div class="clearfix"></div>
    <?php endif; ?>

    <?php if ( get_post_meta( $post->ID, 'week10_audio', true ) ) : ?>
    <div id="week10" class="sermons">
      <?php $audio_meta_10 = get_post_meta( $post->ID, 'week10_audio', true );
            $week10_audio_id = url_to_postid( $audio_meta_10 );
            $week10_audio_file = wp_get_attachment_url( $week10_audio_id );
            $pdf_meta_10 = get_post_meta( $post->ID, 'week10_pdf', true );
            $week10_pdf_id = url_to_postid( $pdf_meta_10 );
            $week10_pdf_file = wp_get_attachment_url( $week10_pdf_id );
            $week10_pdf_title = $week10_pdf_id->post_title; ?>

      <h4 class="title"><?php echo get_post_meta( $post->ID, 'week10_title', true ) ?></h4>
      <p class="sermon-details col-sm-8"><span class="date"><?php echo $week10_date; ?></span> | <span class="speaker"><?php echo get_post_meta( $post->ID, 'week10_speaker', true ) ?></span> | <span class="passage"><?php echo has_term( 'academy', 'sermon_topics' ) ? 'Assignment: ' : 'Scripture: '; ?><?php echo get_post_meta( $post->ID, 'week10_passage', true ) ?></span></p>

      <div class="sermon-media col-sm-4">
        <a class="col-xs-3" title="Listen to <?php echo get_post_meta( $post->ID, 'week10_title', true ) ?>" href="<?php echo $week10_audio_file; ?>" target="_blank"><i class="glyphicon glyphicon-music"></i></a>
        <a class="col-xs-3" title="Download <?php echo get_post_meta( $post->ID, 'week10_title', true ) ?>" href="<?php echo get_stylesheet_directory_uri(); ?>/download.php?file=<?php echo $week10_audio_file; ?>"><i class="glyphicon glyphicon-download"></i></a>
    <?php if ( get_post_meta( $post->ID, 'week10_vimeo_id', true ) ) { ?><a title="<?php echo get_post_meta( $post->ID, 'week10_vimeo_title', true ) ?>" class="col-xs-3" target="_blank" href="http://player.vimeo.com/video/<?php echo get_post_meta( $post->ID, 'week10_vimeo_id', true ) ?>"><i class="glyphicon glyphicon-play-circle"></i></a><?php } ?>
    <?php if ( get_post_meta( $post->ID, 'week10_pdf', true ) ) { ?> <a title="<?php echo get_the_title( $week10_pdf_id ); ?>" class="col-xs-3" href="<?php echo $week10_pdf_file; ?>"><i class="glyphicon glyphicon-file"></i></a><?php } ?>
        <div class="clearfix"></div>
      </div><!-- .sermon-media -->
    </div><!-- #week10 -->
    <div class="clearfix"></div>
    <?php endif; ?>

    <?php if ( get_post_meta( $post->ID, 'week11_audio', true ) ) : ?>
    <div id="week11" class="sermons">
      <?php $audio_meta_11 = get_post_meta( $post->ID, 'week11_audio', true );
            $week11_audio_id = url_to_postid( $audio_meta_11 );
            $week11_audio_file = wp_get_attachment_url( $week11_audio_id );
            $pdf_meta_11 = get_post_meta( $post->ID, 'week11_pdf', true );
            $week11_pdf_id = url_to_postid( $pdf_meta_11 );
            $week11_pdf_file = wp_get_attachment_url( $week11_pdf_id );
            $week11_pdf_title = $week11_pdf_id->post_title; ?>

      <h4 class="title"><?php echo get_post_meta( $post->ID, 'week11_title', true ) ?></h4>
      <p class="sermon-details col-sm-8"><span class="date"><?php echo $week11_date; ?></span> | <span class="speaker"><?php echo get_post_meta( $post->ID, 'week11_speaker', true ) ?></span> | <span class="passage"><?php echo has_term( 'academy', 'sermon_topics' ) ? 'Assignment: ' : 'Scripture: '; ?><?php echo get_post_meta( $post->ID, 'week11_passage', true ) ?></span></p>

      <div class="sermon-media col-sm-4">
        <a class="col-xs-3" title="Listen to <?php echo get_post_meta( $post->ID, 'week11_title', true ) ?>" href="<?php echo $week11_audio_file; ?>" target="_blank"><i class="glyphicon glyphicon-music"></i></a>
        <a class="col-xs-3" title="Download <?php echo get_post_meta( $post->ID, 'week11_title', true ) ?>" href="<?php echo get_stylesheet_directory_uri(); ?>/download.php?file=<?php echo $week11_audio_file; ?>"><i class="glyphicon glyphicon-download"></i></a>
    <?php if ( get_post_meta( $post->ID, 'week11_vimeo_id', true ) ) { ?><a title="<?php echo get_post_meta( $post->ID, 'week11_vimeo_title', true ) ?>" class="col-xs-3" target="_blank" href="http://player.vimeo.com/video/<?php echo get_post_meta( $post->ID, 'week11_vimeo_id', true ) ?>"><i class="glyphicon glyphicon-play-circle"></i></a><?php } ?>
    <?php if ( get_post_meta( $post->ID, 'week11_pdf', true ) ) { ?> <a title="<?php echo get_the_title( $week11_pdf_id ); ?>" class="col-xs-3" href="<?php echo $week11_pdf_file; ?>"><i class="glyphicon glyphicon-file"></i></a><?php } ?>
        <div class="clearfix"></div>
      </div><!-- .sermon-media -->
    </div><!-- #week11 -->
    <div class="clearfix"></div>
    <?php endif; ?>

    <?php if ( get_post_meta( $post->ID, 'week12_audio', true ) ) : ?>
    <div id="week12" class="sermons">
      <?php $audio_meta_12 = get_post_meta( $post->ID, 'week12_audio', true );
            $week12_audio_id = url_to_postid( $audio_meta_12 );
            $week12_audio_file = wp_get_attachment_url( $week12_audio_id );
            $pdf_meta_12 = get_post_meta( $post->ID, 'week12_pdf', true );
            $week12_pdf_id = url_to_postid( $pdf_meta_12 );
            $week12_pdf_file = wp_get_attachment_url( $week12_pdf_id );
            $week12_pdf_title = $week12_pdf_id->post_title; ?>

      <h4 class="title"><?php echo get_post_meta( $post->ID, 'week12_title', true ) ?></h4>
      <p class="sermon-details col-sm-8"><span class="date"><?php echo $week12_date; ?></span> | <span class="speaker"><?php echo get_post_meta( $post->ID, 'week12_speaker', true ) ?></span> | <span class="passage"><?php echo has_term( 'academy', 'sermon_topics' ) ? 'Assignment: ' : 'Scripture: '; ?><?php echo get_post_meta( $post->ID, 'week12_passage', true ) ?></span></p>

      <div class="sermon-media col-sm-4">
        <a class="col-xs-3" title="Listen to <?php echo get_post_meta( $post->ID, 'week12_title', true ) ?>" href="<?php echo $week12_audio_file; ?>" target="_blank"><i class="glyphicon glyphicon-music"></i></a>
        <a class="col-xs-3" title="Download <?php echo get_post_meta( $post->ID, 'week12_title', true ) ?>" href="<?php echo get_stylesheet_directory_uri(); ?>/download.php?file=<?php echo $week12_audio_file; ?>"><i class="glyphicon glyphicon-download"></i></a>
    <?php if ( get_post_meta( $post->ID, 'week12_vimeo_id', true ) ) { ?><a title="<?php echo get_post_meta( $post->ID, 'week12_vimeo_title', true ) ?>" class="col-xs-3" target="_blank" href="http://player.vimeo.com/video/<?php echo get_post_meta( $post->ID, 'week12_vimeo_id', true ) ?>"><i class="glyphicon glyphicon-play-circle"></i></a><?php } ?>
    <?php if ( get_post_meta( $post->ID, 'week12_pdf', true ) ) { ?> <a title="<?php echo get_the_title( $week12_pdf_id ); ?>" class="col-xs-3" href="<?php echo $week12_pdf_file; ?>"><i class="glyphicon glyphicon-file"></i></a><?php } ?>
        <div class="clearfix"></div>
      </div><!-- .sermon-media -->
    </div><!-- #week12 -->
    <div class="clearfix"></div>
    <?php endif; ?>

    <?php if ( get_post_meta( $post->ID, 'week13_audio', true ) ) : ?>
    <div id="week13" class="sermons">
      <?php $audio_meta_13 = get_post_meta( $post->ID, 'week13_audio', true );
            $week13_audio_id = url_to_postid( $audio_meta_13 );
            $week13_audio_file = wp_get_attachment_url( $week13_audio_id );
            $pdf_meta_13 = get_post_meta( $post->ID, 'week13_pdf', true );
            $week13_pdf_id = url_to_postid( $pdf_meta_13 );
            $week13_pdf_file = wp_get_attachment_url( $week13_pdf_id );
            $week13_pdf_title = $week13_pdf_id->post_title; ?>

      <h4 class="title"><?php echo get_post_meta( $post->ID, 'week13_title', true ) ?></h4>
      <p class="sermon-details col-sm-8"><span class="date"><?php echo $week13_date; ?></span> | <span class="speaker"><?php echo get_post_meta( $post->ID, 'week13_speaker', true ) ?></span> | <span class="passage"><?php echo has_term( 'academy', 'sermon_topics' ) ? 'Assignment: ' : 'Scripture: '; ?><?php echo get_post_meta( $post->ID, 'week13_passage', true ) ?></span></p>

      <div class="sermon-media col-sm-4">
        <a class="col-xs-3" title="Listen to <?php echo get_post_meta( $post->ID, 'week13_title', true ) ?>" href="<?php echo $week13_audio_file; ?>" target="_blank"><i class="glyphicon glyphicon-music"></i></a>
        <a class="col-xs-3" title="Download <?php echo get_post_meta( $post->ID, 'week13_title', true ) ?>" href="<?php echo get_stylesheet_directory_uri(); ?>/download.php?file=<?php echo $week13_audio_file; ?>"><i class="glyphicon glyphicon-download"></i></a>
    <?php if ( get_post_meta( $post->ID, 'week13_vimeo_id', true ) ) { ?><a title="<?php echo get_post_meta( $post->ID, 'week13_vimeo_title', true ) ?>" class="col-xs-3" target="_blank" href="http://player.vimeo.com/video/<?php echo get_post_meta( $post->ID, 'week13_vimeo_id', true ) ?>"><i class="glyphicon glyphicon-play-circle"></i></a><?php } ?>
    <?php if ( get_post_meta( $post->ID, 'week13_pdf', true ) ) { ?> <a title="<?php echo get_the_title( $week13_pdf_id ); ?>" class="col-xs-3" href="<?php echo $week13_pdf_file; ?>"><i class="glyphicon glyphicon-file"></i></a><?php } ?>
        <div class="clearfix"></div>
      </div><!-- .sermon-media -->
    </div><!-- #week13 -->
    <div class="clearfix"></div>
    <?php endif; ?>

    <?php if ( get_post_meta( $post->ID, 'week14_audio', true ) ) : ?>
    <div id="week14" class="sermons">
      <?php $audio_meta_14 = get_post_meta( $post->ID, 'week14_audio', true );
            $week14_audio_id = url_to_postid( $audio_meta_14 );
            $week14_audio_file = wp_get_attachment_url( $week14_audio_id );
            $pdf_meta_14 = get_post_meta( $post->ID, 'week14_pdf', true );
            $week14_pdf_id = url_to_postid( $pdf_meta_14 );
            $week14_pdf_file = wp_get_attachment_url( $week14_pdf_id );
            $week14_pdf_title = $week14_pdf_id->post_title; ?>

      <h4 class="title"><?php echo get_post_meta( $post->ID, 'week14_title', true ) ?></h4>
      <p class="sermon-details col-sm-8"><span class="date"><?php echo $week14_date; ?></span> | <span class="speaker"><?php echo get_post_meta( $post->ID, 'week14_speaker', true ) ?></span> | <span class="passage"><?php echo has_term( 'academy', 'sermon_topics' ) ? 'Assignment: ' : 'Scripture: '; ?><?php echo get_post_meta( $post->ID, 'week14_passage', true ) ?></span></p>

      <div class="sermon-media col-sm-4">
        <a class="col-xs-3" title="Listen to <?php echo get_post_meta( $post->ID, 'week14_title', true ) ?>" href="<?php echo $week14_audio_file; ?>" target="_blank"><i class="glyphicon glyphicon-music"></i></a>
        <a class="col-xs-3" title="Download <?php echo get_post_meta( $post->ID, 'week14_title', true ) ?>" href="<?php echo get_stylesheet_directory_uri(); ?>/download.php?file=<?php echo $week14_audio_file; ?>"><i class="glyphicon glyphicon-download"></i></a>
    <?php if ( get_post_meta( $post->ID, 'week14_vimeo_id', true ) ) { ?><a title="<?php echo get_post_meta( $post->ID, 'week14_vimeo_title', true ) ?>" class="col-xs-3" target="_blank" href="http://player.vimeo.com/video/<?php echo get_post_meta( $post->ID, 'week14_vimeo_id', true ) ?>"><i class="glyphicon glyphicon-play-circle"></i></a><?php } ?>
    <?php if ( get_post_meta( $post->ID, 'week14_pdf', true ) ) { ?> <a title="<?php echo get_the_title( $week14_pdf_id ); ?>" class="col-xs-3" href="<?php echo $week14_pdf_file; ?>"><i class="glyphicon glyphicon-file"></i></a><?php } ?>
        <div class="clearfix"></div>
      </div><!-- .sermon-media -->
    </div><!-- #week14 -->
    <div class="clearfix"></div>
    <?php endif; ?>

    <?php if ( get_post_meta( $post->ID, 'week15_audio', true ) ) : ?>
    <div id="week15" class="sermons">
      <?php $audio_meta_15 = get_post_meta( $post->ID, 'week15_audio', true );
            $week15_audio_id = url_to_postid( $audio_meta_15 );
            $week15_audio_file = wp_get_attachment_url( $week15_audio_id );
            $pdf_meta_15 = get_post_meta( $post->ID, 'week15_pdf', true );
            $week15_pdf_id = url_to_postid( $pdf_meta_15 );
            $week15_pdf_file = wp_get_attachment_url( $week15_pdf_id );
            $week15_pdf_title = $week15_pdf_id->post_title; ?>

      <h4 class="title"><?php echo get_post_meta( $post->ID, 'week15_title', true ) ?></h4>
      <p class="sermon-details col-sm-8"><span class="date"><?php echo $week15_date; ?></span> | <span class="speaker"><?php echo get_post_meta( $post->ID, 'week15_speaker', true ) ?></span> | <span class="passage"><?php echo has_term( 'academy', 'sermon_topics' ) ? 'Assignment: ' : 'Scripture: '; ?><?php echo get_post_meta( $post->ID, 'week15_passage', true ) ?></span></p>

      <div class="sermon-media col-sm-4">
        <a class="col-xs-3" title="Listen to <?php echo get_post_meta( $post->ID, 'week15_title', true ) ?>" href="<?php echo $week15_audio_file; ?>" target="_blank"><i class="glyphicon glyphicon-music"></i></a>
        <a class="col-xs-3" title="Download <?php echo get_post_meta( $post->ID, 'week15_title', true ) ?>" href="<?php echo get_stylesheet_directory_uri(); ?>/download.php?file=<?php echo $week15_audio_file; ?>"><i class="glyphicon glyphicon-download"></i></a>
    <?php if ( get_post_meta( $post->ID, 'week15_vimeo_id', true ) ) { ?><a title="<?php echo get_post_meta( $post->ID, 'week15_vimeo_title', true ) ?>" class="col-xs-3" target="_blank" href="http://player.vimeo.com/video/<?php echo get_post_meta( $post->ID, 'week15_vimeo_id', true ) ?>"><i class="glyphicon glyphicon-play-circle"></i></a><?php } ?>
    <?php if ( get_post_meta( $post->ID, 'week15_pdf', true ) ) { ?> <a title="<?php echo get_the_title( $week15_pdf_id ); ?>" class="col-xs-3" href="<?php echo $week15_pdf_file; ?>"><i class="glyphicon glyphicon-file"></i></a><?php } ?>
        <div class="clearfix"></div>
      </div><!-- .sermon-media -->
    </div><!-- #week15 -->
    <div class="clearfix"></div>
    <?php endif; ?>

    <?php if ( get_post_meta( $post->ID, 'week16_audio', true ) ) : ?>
    <div id="week16" class="sermons">
      <?php $audio_meta_16 = get_post_meta( $post->ID, 'week16_audio', true );
            $week16_audio_id = url_to_postid( $audio_meta_16 );
            $week16_audio_file = wp_get_attachment_url( $week16_audio_id );
            $pdf_meta_16 = get_post_meta( $post->ID, 'week16_pdf', true );
            $week16_pdf_id = url_to_postid( $pdf_meta_16 );
            $week16_pdf_file = wp_get_attachment_url( $week16_pdf_id );
            $week16_pdf_title = $week16_pdf_id->post_title; ?>

      <h4 class="title"><?php echo get_post_meta( $post->ID, 'week16_title', true ) ?></h4>
      <p class="sermon-details col-sm-8"><span class="date"><?php echo $week16_date; ?></span> | <span class="speaker"><?php echo get_post_meta( $post->ID, 'week16_speaker', true ) ?></span> | <span class="passage"><?php echo has_term( 'academy', 'sermon_topics' ) ? 'Assignment: ' : 'Scripture: '; ?><?php echo get_post_meta( $post->ID, 'week16_passage', true ) ?></span></p>

      <div class="sermon-media col-sm-4">
        <a class="col-xs-3" title="Listen to <?php echo get_post_meta( $post->ID, 'week16_title', true ) ?>" href="<?php echo $week16_audio_file; ?>" target="_blank"><i class="glyphicon glyphicon-music"></i></a>
        <a class="col-xs-3" title="Download <?php echo get_post_meta( $post->ID, 'week16_title', true ) ?>" href="<?php echo get_stylesheet_directory_uri(); ?>/download.php?file=<?php echo $week16_audio_file; ?>"><i class="glyphicon glyphicon-download"></i></a>
    <?php if ( get_post_meta( $post->ID, 'week16_vimeo_id', true ) ) { ?><a title="<?php echo get_post_meta( $post->ID, 'week16_vimeo_title', true ) ?>" class="col-xs-3" target="_blank" href="http://player.vimeo.com/video/<?php echo get_post_meta( $post->ID, 'week16_vimeo_id', true ) ?>"><i class="glyphicon glyphicon-play-circle"></i></a><?php } ?>
    <?php if ( get_post_meta( $post->ID, 'week16_pdf', true ) ) { ?> <a title="<?php echo get_the_title( $week16_pdf_id ); ?>" class="col-xs-3" href="<?php echo $week16_pdf_file; ?>"><i class="glyphicon glyphicon-file"></i></a><?php } ?>
        <div class="clearfix"></div>
      </div><!-- .sermon-media -->
    </div><!-- #week16 -->
    <div class="clearfix"></div>
    <?php endif; ?>

    <?php if ( get_post_meta( $post->ID, 'week17_audio', true ) ) : ?>
    <div id="week17" class="sermons">
      <?php $audio_meta_17 = get_post_meta( $post->ID, 'week17_audio', true );
            $week17_audio_id = url_to_postid( $audio_meta_17 );
            $week17_audio_file = wp_get_attachment_url( $week17_audio_id );
            $pdf_meta_17 = get_post_meta( $post->ID, 'week17_pdf', true );
            $week17_pdf_id = url_to_postid( $pdf_meta_17 );
            $week17_pdf_file = wp_get_attachment_url( $week17_pdf_id );
            $week17_pdf_title = $week17_pdf_id->post_title; ?>

      <h4 class="title"><?php echo get_post_meta( $post->ID, 'week17_title', true ) ?></h4>
      <p class="sermon-details col-sm-8"><span class="date"><?php echo $week17_date; ?></span> | <span class="speaker"><?php echo get_post_meta( $post->ID, 'week17_speaker', true ) ?></span> | <span class="passage"><?php echo has_term( 'academy', 'sermon_topics' ) ? 'Assignment: ' : 'Scripture: '; ?><?php echo get_post_meta( $post->ID, 'week17_passage', true ) ?></span></p>

      <div class="sermon-media col-sm-4">
        <a class="col-xs-3" title="Listen to <?php echo get_post_meta( $post->ID, 'week17_title', true ) ?>" href="<?php echo $week17_audio_file; ?>" target="_blank"><i class="glyphicon glyphicon-music"></i></a>
        <a class="col-xs-3" title="Download <?php echo get_post_meta( $post->ID, 'week17_title', true ) ?>" href="<?php echo get_stylesheet_directory_uri(); ?>/download.php?file=<?php echo $week17_audio_file; ?>"><i class="glyphicon glyphicon-download"></i></a>
    <?php if ( get_post_meta( $post->ID, 'week17_vimeo_id', true ) ) { ?><a title="<?php echo get_post_meta( $post->ID, 'week17_vimeo_title', true ) ?>" class="col-xs-3" target="_blank" href="http://player.vimeo.com/video/<?php echo get_post_meta( $post->ID, 'week17_vimeo_id', true ) ?>"><i class="glyphicon glyphicon-play-circle"></i></a><?php } ?>
    <?php if ( get_post_meta( $post->ID, 'week17_pdf', true ) ) { ?> <a title="<?php echo get_the_title( $week17_pdf_id ); ?>" class="col-xs-3" href="<?php echo $week17_pdf_file; ?>"><i class="glyphicon glyphicon-file"></i></a><?php } ?>
        <div class="clearfix"></div>
      </div><!-- .sermon-media -->
    </div><!-- #week17 -->
    <div class="clearfix"></div>
    <?php endif; ?>

    <?php if ( get_post_meta( $post->ID, 'week18_audio', true ) ) : ?>
    <div id="week18" class="sermons">
      <?php $audio_meta_18 = get_post_meta( $post->ID, 'week18_audio', true );
            $week18_audio_id = url_to_postid( $audio_meta_18 );
            $week18_audio_file = wp_get_attachment_url( $week18_audio_id );
            $pdf_meta_18 = get_post_meta( $post->ID, 'week18_pdf', true );
            $week18_pdf_id = url_to_postid( $pdf_meta_18 );
            $week18_pdf_file = wp_get_attachment_url( $week18_pdf_id );
            $week18_pdf_title = $week18_pdf_id->post_title; ?>

      <h4 class="title"><?php echo get_post_meta( $post->ID, 'week18_title', true ) ?></h4>
      <p class="sermon-details col-sm-8"><span class="date"><?php echo $week18_date; ?></span> | <span class="speaker"><?php echo get_post_meta( $post->ID, 'week18_speaker', true ) ?></span> | <span class="passage"><?php echo has_term( 'academy', 'sermon_topics' ) ? 'Assignment: ' : 'Scripture: '; ?><?php echo get_post_meta( $post->ID, 'week18_passage', true ) ?></span></p>

      <div class="sermon-media col-sm-4">
        <a class="col-xs-3" title="Listen to <?php echo get_post_meta( $post->ID, 'week18_title', true ) ?>" href="<?php echo $week18_audio_file; ?>" target="_blank"><i class="glyphicon glyphicon-music"></i></a>
        <a class="col-xs-3" title="Download <?php echo get_post_meta( $post->ID, 'week18_title', true ) ?>" href="<?php echo get_stylesheet_directory_uri(); ?>/download.php?file=<?php echo $week18_audio_file; ?>"><i class="glyphicon glyphicon-download"></i></a>
    <?php if ( get_post_meta( $post->ID, 'week18_vimeo_id', true ) ) { ?><a title="<?php echo get_post_meta( $post->ID, 'week18_vimeo_title', true ) ?>" class="col-xs-3" target="_blank" href="http://player.vimeo.com/video/<?php echo get_post_meta( $post->ID, 'week18_vimeo_id', true ) ?>"><i class="glyphicon glyphicon-play-circle"></i></a><?php } ?>
    <?php if ( get_post_meta( $post->ID, 'week18_pdf', true ) ) { ?> <a title="<?php echo get_the_title( $week18_pdf_id ); ?>" class="col-xs-3" href="<?php echo $week18_pdf_file; ?>"><i class="glyphicon glyphicon-file"></i></a><?php } ?>
        <div class="clearfix"></div>
      </div><!-- .sermon-media -->
    </div><!-- #week18 -->
    <div class="clearfix"></div>
    <?php endif; ?>

    <?php if ( get_post_meta( $post->ID, 'week19_audio', true ) ) : ?>
    <div id="week19" class="sermons">
      <?php $audio_meta_19 = get_post_meta( $post->ID, 'week19_audio', true );
            $week19_audio_id = url_to_postid( $audio_meta_19 );
            $week19_audio_file = wp_get_attachment_url( $week19_audio_id );
            $pdf_meta_19 = get_post_meta( $post->ID, 'week19_pdf', true );
            $week19_pdf_id = url_to_postid( $pdf_meta_19 );
            $week19_pdf_file = wp_get_attachment_url( $week19_pdf_id );
            $week19_pdf_title = $week19_pdf_id->post_title; ?>

      <h4 class="title"><?php echo get_post_meta( $post->ID, 'week19_title', true ) ?></h4>
      <p class="sermon-details col-sm-8"><span class="date"><?php echo $week19_date; ?></span> | <span class="speaker"><?php echo get_post_meta( $post->ID, 'week19_speaker', true ) ?></span> | <span class="passage"><?php echo has_term( 'academy', 'sermon_topics' ) ? 'Assignment: ' : 'Scripture: '; ?><?php echo get_post_meta( $post->ID, 'week19_passage', true ) ?></span></p>

      <div class="sermon-media col-sm-4">
        <a class="col-xs-3" title="Listen to <?php echo get_post_meta( $post->ID, 'week19_title', true ) ?>" href="<?php echo $week19_audio_file; ?>" target="_blank"><i class="glyphicon glyphicon-music"></i></a>
        <a class="col-xs-3" title="Download <?php echo get_post_meta( $post->ID, 'week19_title', true ) ?>" href="<?php echo get_stylesheet_directory_uri(); ?>/download.php?file=<?php echo $week19_audio_file; ?>"><i class="glyphicon glyphicon-download"></i></a>
    <?php if ( get_post_meta( $post->ID, 'week19_vimeo_id', true ) ) { ?><a title="<?php echo get_post_meta( $post->ID, 'week19_vimeo_title', true ) ?>" class="col-xs-3" target="_blank" href="http://player.vimeo.com/video/<?php echo get_post_meta( $post->ID, 'week19_vimeo_id', true ) ?>"><i class="glyphicon glyphicon-play-circle"></i></a><?php } ?>
    <?php if ( get_post_meta( $post->ID, 'week19_pdf', true ) ) { ?> <a title="<?php echo get_the_title( $week19_pdf_id ); ?>" class="col-xs-3" href="<?php echo $week19_pdf_file; ?>"><i class="glyphicon glyphicon-file"></i></a><?php } ?>
        <div class="clearfix"></div>
      </div><!-- .sermon-media -->
    </div><!-- #week19 -->
    <div class="clearfix"></div>
    <?php endif; ?>

    <?php if ( get_post_meta( $post->ID, 'week20_audio', true ) ) : ?>
    <div id="week20" class="sermons">
      <?php $audio_meta_20 = get_post_meta( $post->ID, 'week20_audio', true );
            $week20_audio_id = url_to_postid( $audio_meta_20 );
            $week20_audio_file = wp_get_attachment_url( $week20_audio_id );
            $pdf_meta_20 = get_post_meta( $post->ID, 'week20_pdf', true );
            $week20_pdf_id = url_to_postid( $pdf_meta_20 );
            $week20_pdf_file = wp_get_attachment_url( $week20_pdf_id );
            $week20_pdf_title = $week20_pdf_id->post_title; ?>

      <h4 class="title"><?php echo get_post_meta( $post->ID, 'week20_title', true ) ?></h4>
      <p class="sermon-details col-sm-8"><span class="date"><?php echo $week20_date; ?></span> | <span class="speaker"><?php echo get_post_meta( $post->ID, 'week20_speaker', true ) ?></span> | <span class="passage"><?php echo has_term( 'academy', 'sermon_topics' ) ? 'Assignment: ' : 'Scripture: '; ?><?php echo get_post_meta( $post->ID, 'week20_passage', true ) ?></span></p>

      <div class="sermon-media col-sm-4">
        <a class="col-xs-3" title="Listen to <?php echo get_post_meta( $post->ID, 'week20_title', true ) ?>" href="<?php echo $week20_audio_file; ?>" target="_blank"><i class="glyphicon glyphicon-music"></i></a>
        <a class="col-xs-3" title="Download <?php echo get_post_meta( $post->ID, 'week20_title', true ) ?>" href="<?php echo get_stylesheet_directory_uri(); ?>/download.php?file=<?php echo $week20_audio_file; ?>"><i class="glyphicon glyphicon-download"></i></a>
    <?php if ( get_post_meta( $post->ID, 'week20_vimeo_id', true ) ) { ?><a title="<?php echo get_post_meta( $post->ID, 'week20_vimeo_title', true ) ?>" class="col-xs-3" target="_blank" href="http://player.vimeo.com/video/<?php echo get_post_meta( $post->ID, 'week20_vimeo_id', true ) ?>"><i class="glyphicon glyphicon-play-circle"></i></a><?php } ?>
    <?php if ( get_post_meta( $post->ID, 'week20_pdf', true ) ) { ?> <a title="<?php echo get_the_title( $week20_pdf_id ); ?>" class="col-xs-3" href="<?php echo $week20_pdf_file; ?>"><i class="glyphicon glyphicon-file"></i></a><?php } ?>
        <div class="clearfix"></div>
      </div><!-- .sermon-media -->
    </div><!-- #week20 -->
    <div class="clearfix"></div>
    <?php endif; ?>

    <?php if ( get_post_meta( $post->ID, 'week21_audio', true ) ) : ?>
    <div id="week21" class="sermons">
      <?php $audio_meta_21 = get_post_meta( $post->ID, 'week21_audio', true );
            $week21_audio_id = url_to_postid( $audio_meta_21 );
            $week21_audio_file = wp_get_attachment_url( $week21_audio_id );
            $pdf_meta_21 = get_post_meta( $post->ID, 'week21_pdf', true );
            $week21_pdf_id = url_to_postid( $pdf_meta_21 );
            $week21_pdf_file = wp_get_attachment_url( $week21_pdf_id );
            $week21_pdf_title = $week21_pdf_id->post_title; ?>

      <h4 class="title"><?php echo get_post_meta( $post->ID, 'week21_title', true ) ?></h4>
      <p class="sermon-details col-sm-8"><span class="date"><?php echo $week21_date; ?></span> | <span class="speaker"><?php echo get_post_meta( $post->ID, 'week21_speaker', true ) ?></span> | <span class="passage"><?php echo has_term( 'academy', 'sermon_topics' ) ? 'Assignment: ' : 'Scripture: '; ?><?php echo get_post_meta( $post->ID, 'week21_passage', true ) ?></span></p>

      <div class="sermon-media col-sm-4">
        <a class="col-xs-3" title="Listen to <?php echo get_post_meta( $post->ID, 'week21_title', true ) ?>" href="<?php echo $week21_audio_file; ?>" target="_blank"><i class="glyphicon glyphicon-music"></i></a>
        <a class="col-xs-3" title="Download <?php echo get_post_meta( $post->ID, 'week21_title', true ) ?>" href="<?php echo get_stylesheet_directory_uri(); ?>/download.php?file=<?php echo $week21_audio_file; ?>"><i class="glyphicon glyphicon-download"></i></a>
    <?php if ( get_post_meta( $post->ID, 'week21_vimeo_id', true ) ) { ?><a title="<?php echo get_post_meta( $post->ID, 'week21_vimeo_title', true ) ?>" class="col-xs-3" target="_blank" href="http://player.vimeo.com/video/<?php echo get_post_meta( $post->ID, 'week21_vimeo_id', true ) ?>"><i class="glyphicon glyphicon-play-circle"></i></a><?php } ?>
    <?php if ( get_post_meta( $post->ID, 'week21_pdf', true ) ) { ?> <a title="<?php echo get_the_title( $week21_pdf_id ); ?>" class="col-xs-3" href="<?php echo $week21_pdf_file; ?>"><i class="glyphicon glyphicon-file"></i></a><?php } ?>
        <div class="clearfix"></div>
      </div><!-- .sermon-media -->
    </div><!-- #week21 -->
    <?php endif; ?>

  </div><!-- #sermon-list-<?php the_ID(); ?> -->
