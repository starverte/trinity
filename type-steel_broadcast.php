<?php
/**
 * The template used for displaying a Broadcast (front-end)
 *
 * @package Flint/Trinity
 * @since 0.7.0
 */

$post_custom = get_post_custom();
$media = array();
if ( ! empty( $post_custom['item_list'][0] ) ) {
  $item_list = $post_custom['item_list'][0];
  $items = explode( ',', $post_custom['item_list'][0] );
  foreach ( $items as $item_id ) {
    array_push( $media, get_post( $item_id ) );
  }
} else {
  $item_list = 0;
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
        <?php
          if ( 0 !== $item_list ) {
            if ( 1 < count( $items ) ) {
              printf(
                '%s through %s',
                get_the_date( 'F j', reset( $items ) ),
                get_the_date( 'F j, Y', end( $items ) )
              );
            }
          }
        ?>
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
        <button class="btn btn-blue" data-toggle="collapse" data-target="#sermon-list-<?php the_ID(); ?>"><?php echo has_term( 'sermons', 'steel_broadcast_channel' ) ? 'Sermon List' : 'Sessions'; ?></button>
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

    <?php
    foreach ( $media as $medium ) {
      $medium_custom = get_post_custom( $medium->ID );
      $medium_metadata = wp_get_attachment_metadata( $medium->ID ); ?>
      <div class="clearfix"></div>
      <div id="item-<?php echo $medium->ID; ?>" class="sermons">

        <h4 class="title"><?php echo $medium->post_title; ?></h4>
        <p class="sermon-details col-sm-8"><span class="date"><?php echo date( 'F j, Y', strtotime( $medium_custom['date_published'][0] ) ); ?></span> | <span class="speaker"><?php echo $medium_metadata['artist']; ?></span> | <span class="passage"><?php echo $medium->post_content; ?></span></p>

        <div class="sermon-media col-sm-4">
          <a class="col-xs-3" title="Listen to <?php echo $medium->post_title; ?>" href="<?php echo $medium->guid; ?>" target="_blank"><i class="glyphicon glyphicon-music"></i></a>
          <a class="col-xs-3" title="Download <?php echo $medium->post_title; ?>" href="<?php echo get_stylesheet_directory_uri(); ?>/download.php?file=<?php echo $medium->guid; ?>"><i class="glyphicon glyphicon-download"></i></a>
          <div class="clearfix"></div>
        </div><!-- .sermon-media -->
      </div><!-- #item-<?php echo $medium->ID; ?> -->
      <div class="clearfix"></div><?php
    }?>
  </div><!-- .sermon-list -->
