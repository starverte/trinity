function steel_validate($extend) {
  'use strict';
  var $success = true;
  var $alert = '<div class="alert alert-danger"><ul>';

  function steel_validate_field() {
    var $required = jQuery(this).data('required');
    var $target = jQuery(this).data('target');
    var $data = jQuery($target).val();
    var $title = $target.substr(1);

    if (jQuery(this).data('title')) {
      $title = jQuery(this).data('title');
    }

    if (!$data) {
      if (true === $required) {
        $success = false;
        jQuery(this).addClass('has-error');
        $alert += '<li>' + $title + ' is required.</li>';
      }
    }
    else {
      if ('currency' === jQuery(this).data('type')) {
        var $amount = Number($data).toFixed(2);
        if (true === $required && 0 >= $amount) {
          $success = false;
          jQuery(this).addClass('has-error');
          $alert += '<li>' + $title + ' must be greater than $0.00.</li>';
        }
        else {
          jQuery($target).val($amount);
        }
      }
    }
  }

  jQuery('*').removeClass('has-error');
  jQuery('.form-validate').each(steel_validate_field);

  /** Specific to Trinity - Japan template
   *
   * @todo Remove and add ability to customize
   */
  console.log('Financial Support is ' + jQuery('#financial_support').prop('checked'));
  if (true === jQuery('#financial_support').prop('checked')) {
    var $required = true;
    var $target = jQuery('#amt_dec');
    var $data = jQuery($target).val();
    var $title = 'Gift Amount';

    if (!$data) {
      if (true === $required) {
        $success = false;
        jQuery('#amt_dec_group').addClass('has-error');
        $alert += '<li>' + $title + ' is required.</li>';
      }
    }
    else {
      if ('currency' === jQuery('#amt_dec_group').data('type')) {
        var $amount = Number($data).toFixed(2);
        if (true === $required && 0 >= $amount) {
          $success = false;
          jQuery('#amt_dec_group').addClass('has-error');
          $alert += '<li>' + $title + ' must be greater than $0.00.</li>';
        }
        else {
          jQuery($target).val($amount);
        }
      }
    }
  }

  if (false === $success) {
    $alert += '</ul></div>';
    jQuery('#form_alert').html($alert);
    return false;
  }
  else {
    return;
  }
}
