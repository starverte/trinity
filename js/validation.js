function steel_validate() {
  'use strict';
  var success = true;
  var alert = '<div class="alert alert-danger"><ul>';
  jQuery('*').removeClass('has-error');
  jQuery('.form-validate').each(function () {
    var target = jQuery(this).data('target');
    var data = jQuery(target).val();
    var title = target.substr(1);

    if (jQuery(this).data('title')) {
      title = jQuery(this).data('title');
    }

    if (!data) {
      if (true === jQuery(this).data('required')) {
        success = false;
        jQuery(this).addClass('has-error');
        alert += '<li>' + title + ' is required.</li>';
      }
    }
    else {
      if ('currency' === jQuery(this).data('type')) {
        var amount = Number(data).toFixed(2);
        if (true === jQuery(this).data('required') && 0 >= amount) {
          success = false;
          jQuery(this).addClass('has-error');
          alert += '<li>' + title + ' must be greater than $0.00.</li>';
        }
        else {
          jQuery(target).val(amount);
        }
      }
    }
  });

  if (false === success) {
    alert += '</ul></div>';
    jQuery('#form_alert').html(alert);
    return false;
  }
  else {
    return;
  }
}
