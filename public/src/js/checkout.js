Stripe.setPublishableKey('pk_test_HCXv2k3kUGUjykdGOhBgXKFG00iP0W01io');

var $form = $('#checkout-form');

$form.submit(function(event) {
    $('#charge-error').addClass('hidden');
    $form.find('button').prop('disabled', true);
    Stripe.card.createToken({
        adresse : $('#inputPassword2'),
        name : $('#Card-name').val(),
        number: $('#card-number').val(),
        cvc: $('#card-cvc').val(),
        exp: $('#card-expiry').val(),


    }, stripeResponseHandler);
    return false;
});

function stripeResponseHandler(status, response) {
    if (response.error) {
        $('#charge-error').removeClass('hidden');
        $('#charge-error').text(response.error.message);
        $form.find('button').prop('disabled', false);
    } else {
        var token = response.id;
        $form.append($('<input type="hidden" name="stripeToken" />').val(token));

        // Submit the form:
        $form.get(0).submit();
    }
}