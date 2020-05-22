@extends('layouts.app')





@section('css')

<style type="text/css">
    .ff{
        background-color: #efefef;
        margin-top: : 50px;

    }
    .f{
        background-color: #efefef;
        padding:0px;
    }
    #app{
        background-color: #efefef;
    }
    .tk{
        margin-left:  200px;
        padding-left: 300px;
        margin-top: 180px;
        margin-bottom: 107px;

    }
    #submit{
        margin-left: 100px;
    }
    .StripeElement {
  box-sizing: border-box;

  height: 40px;

  padding: 10px 12px;

  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;

  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}

.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}

</style>

@endsection

@section('extra-script')
<script src="https://js.stripe.com/v3/"></script>
@endsection

@section('content')
    
    @if (Auth::guest())
                                
                                <!----------------------choix-login-register----------------->
                                <div style="padding-bottom: 438px;">
                                <h2 style="color:red ; text-align: center; font-weight: bold;" > Vous n'êtes pas connecté ! </h2> <hr>
                                <div style="text-align:center">
                                    <a class="btn btn-success"  href="{{ route('login') }}">Login</a>
                                    <a class="btn  btn-success"   href="{{ route('register') }}">Register</a>
                                </div>
                                </div>

    @else

    <div class=" ff col-md-12">
        <h1 style="text-align: center;">Page de paiement {{ Auth::user()->id }}</h1>
        <div class="row">
            <dir class="col-md-6 tk">
                
              <form action="/payement" method="get" id="payment-form" class="my-4" >

                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2"  class="sr-only">Adresse de Livraison</label>
                    <input required type="text" class="form-control" id="inputPassword2" placeholder="Adresse de Livraison">
                  </div>
                
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only">Nom du Compte</label>
                    <input required type="text" class="form-control" id="inputPassword2" placeholder="Nom du compte">
                  </div>

                    
                      <form >
                        <div class="form-row">
                          <label for="card-element">
                            Credit or debit card
                          </label>
                          <div id="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                          </div>

                          <!-- Used to display form errors. -->
                          <div id="card-errors" role="alert"></div>
                        </div>

                        <button id="#submit" style="margin-top: 40px;margin-left: 100px;" class="btn btn-success mt-4">Procéder au paiement</button>
                      </form>
    
    

                

                    </form>
    
            </dir>
            
        </div>
    </div>
    <div class="ff"><br><br><p> . </p><br><br><br></div>
    
    pk_test_TYooMQauvdEDq54NiTphI7jx

    @endif
    

@endsection

@section('extra-js')
<script>
    // Create a Stripe client.
var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {style: style});

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.on('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});

// Submit the form with the token ID.
function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  

  // Submit the form
  form.submit();
}
</script>
@endsection