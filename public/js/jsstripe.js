var stripeResponseHandler = function(status, response) {
  // Grab the form:
  var form = document.getElementById('payment-form');

  if (response.error) { // Problem!
    // Show the errors on the form:
  } else { // Token was created!
    // Get the token ID:
    var token = response.id;

    // Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token);
    form.appendChild(hiddenInput);

    // Submit the form
    form.submit();
  }
};

// Create a token when the form is submitted
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(e) {
  e.preventDefault();
  Stripe.card.createToken(form, stripeResponseHandler);
});