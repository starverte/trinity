function steel_validate() {
  'use strict';
  var valid = true;
  jQuery('*').removeClass('has-error');
  jQuery('.validate').each(function () {
    var elTarget = jQuery(this).data('target');
    if (true === jQuery(this).data('required')) {
      if ('' === jQuery('#' + elTarget).val()) {
        valid = false;
        jQuery(this).addClass('has-error');
      }
      else {
        console.log(jQuery(this).data('target') + ' is required but not null. value=' + jQuery('#' + elTarget).val());
      }
    }
    else {
      console.log(jQuery(this).data('target') + ' is not required. data-required=' + jQuery(this).data('required'));
    }
  });
  if (false === valid) {
    console.log('Failure');
    return false;
  }
  else {
    console.log('Success. You pledged to donate $x. You will now be redirected to PayPal to complete your transaction.');
    return false;
  }
}
