jQuery( document ).ready(function() {
  window_width = jQuery(window).width();
  overlay_height = jQuery('#church_profile_overlay').height();
  overlay_margin_top = Math.round(0.45 * window_width) * -1;
  clearfix_margin_top = Math.round(0.45 * window_width) - overlay_height;

  jQuery('#church_profile_container').css('margin-top', overlay_margin_top);
  jQuery('#church_profile_clearfix').css('margin-top', clearfix_margin_top);
});
jQuery( window ).resize(function() {
  window_width = jQuery(window).width();
  overlay_height = jQuery('#church_profile_overlay').height();
  overlay_margin_top = Math.round(0.45 * window_width) * -1;
  clearfix_margin_top = Math.round(0.45 * window_width) - overlay_height;

  jQuery('#church_profile_container').css('margin-top', overlay_margin_top);
  jQuery('#church_profile_clearfix').css('margin-top', clearfix_margin_top);
});
