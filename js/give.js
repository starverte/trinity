/**
 * Javascript for Give page template
 *
 * @package Flint\Trinity
 * @since 0.2.1
 */
var $form = jQuery('#paypal_giving'),
  $summands = $form.find('.donation'),
  $sumDisplay = jQuery('#total');

$form.delegate('.donation', 'change', function () {
  var sum = 0;
  $summands.each(function () {
    var value = Number(jQuery(this).val());
    if (!isNaN(value)) { sum += value; }
    jQuery(this).val(value.toFixed(2));
  });
  sum = sum.toFixed(2);
  $sumDisplay.val(sum);
});
jQuery("#paypal_account_true").on("click", function () {
  jQuery("#redirect_url").val("https://www.paypal-donations.com/pp-charity/web.us/charity_i.jsp?id=72286&s=3");
});
jQuery("#paypal_account_false").on("click", function () {
  jQuery("#redirect_url").val("https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=H6KBD6DUY38LE");
});
