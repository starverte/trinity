jQuery( document ).ready(function() {
  window_width = jQuery(window).width();
  overlay_height = jQuery('#church_profile_overlay').height();
  overlay_margin_top = Math.round(0.45 * window_width) * -1;
  clearfix_margin_top = Math.round(0.45 * window_width) - overlay_height;

  jQuery('#church_profile_container').css('margin-top', overlay_margin_top);
  jQuery('#church_profile_clearfix').css('margin-top', clearfix_margin_top);
});
jQuery('#serve_img').load(function() {
  jQuery( '.ns-caption' ).each(function() {
    img = jQuery(this).data('img');
    caption = jQuery(this).data('caption');

    img_height = jQuery(img).height();
    caption_height = jQuery(caption).height();
    caption_width = jQuery(caption).width();

    margin_top = (Math.round(0.5 * img_height) + Math.round(0.5 * caption_height)) * -1;
    if (jQuery(window).width() < 768) {
      margin_bottom = Math.round(0.5 * img_height);
    }
    else {
      margin_bottom = 0;
    }

    jQuery(this).css('margin-top', margin_top);
    jQuery(this).css('margin-bottom', margin_bottom);
    jQuery(this).css('width', caption_width + caption_height);
    jQuery('#next-steps .col-sm-4').css('min-height', img_height);
  });
});
jQuery( window ).resize(function() {
  window_width = jQuery(window).width();
  overlay_height = jQuery('#church_profile_overlay').height();
  overlay_margin_top = Math.round(0.45 * window_width) * -1;
  clearfix_margin_top = Math.round(0.45 * window_width) - overlay_height;

  jQuery('#church_profile_container').css('margin-top', overlay_margin_top);
  jQuery('#church_profile_clearfix').css('margin-top', clearfix_margin_top);

  jQuery( '.ns-caption' ).each(function() {
    img = jQuery(this).data('img');
    caption = jQuery(this).data('caption');

    img_height = jQuery(img).height();
    caption_height = jQuery(caption).height();
    caption_width = jQuery(caption).width();

    margin_top = (Math.round(0.5 * img_height) + Math.round(0.5 * caption_height)) * -1;
    if (jQuery(window).width() < 768) {
      margin_bottom = Math.round(0.5 * img_height);
    }
    else {
      margin_bottom = 0;
    }

    jQuery(this).css('margin-top', margin_top);
    jQuery(this).css('margin-bottom', margin_bottom);
    jQuery(this).css('width', caption_width + caption_height);
    jQuery('#next-steps .col-sm-4').css('min-height', img_height);
  });
});
