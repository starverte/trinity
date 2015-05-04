jQuery(".btn-support").click(function() {
  jQuery('html, body').animate({
    scrollTop: jQuery("#pledge-support").offset().top
  }, 1000);

  var benefactor = jQuery(this).data('support');
  jQuery('#benefactor option').filter(function() {
    return (benefactor === jQuery(this).val());
  }).prop('selected', true);
});
