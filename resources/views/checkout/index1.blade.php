@extends('layouts.app')

@if (Auth::guest())
                                <!----------------------choix-login-register----------------->
                                <h2 style="color:red ; text-align: center" > Not logged in ! </h2> <hr>
                                <div style="text-align:center">
                                    <a class="btn btn-success"  href="{{ route('login') }}">Login</a>
                                    <a class="btn  btn-success"   href="{{ route('register') }}">Register</a>
                                </div>




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

</style>

@endsection

@section('extra-script')
<script src="https://js.stripe.com/v3/"></script>
@endsection

@section('content')

	<div class=" ff col-md-12">
		<h1 style="text-align: center;">Page de paiement {{ Auth::user()->id }}</h1>
		<div class="row">
			<dir class="col-md-6 tk">
				
					<form id="payment-form" class="my-4" >
					  <div  id="card-element">
					    <!-- Elements will create input elements here -->
					  </div>

					  <!-- We'll put the error messages in this element -->
					  <div  id="card-errors" role="alert"></div>
	@if(Auth::user()->name == "visiteur")

					<a  href="/logout"   id="#submit" style="margin-top: 40px;margin-left: 80px;" class="btn btn-danger mt-4"  >  Cliquez içi pour se connecter </a>

					<div style="margin-top: 20px;" class="alert alert-danger" role="alert">
					  Vous devez vous connecter pour acceder au payement !
					</div>

					</form>
	@else

				<a href="/payement"  id="#submit" style="margin-top: 40px;margin-left: 100px;" class="btn btn-success mt-4"  >  Procéder au paiement </a>
					</form>
	@endif
			</dir>
			
		</div>
	</div>
	<div class="ff"><br><br><p> . </p><br><br><br></div>
	

	
	

@endsection

@section('extra-js')
<script>
	var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');
	var elements = stripe.elements();

	var style = {
	    base: {
	      color: "#32325d",
	      fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
	      fontSmoothing: "antialiased",
	      fontSize: "16px",
	      "::placeholder": {
	        color: "#aab7c4"
	      }
	    },
	    
	  };
	  var card = elements.create("card", { 'style': {
											    'base': {
											      'fontFamily': 'Arial, sans-serif',
											      
											      'color': '#C1C7CD',
											      'textAlign' : 'center'
											    },
											    'invalid': {
											      'color': 'red',
											    },
											  } });

		card.mount("#card-element");


	card.addEventListener('change', ({error}) => {
	  const displayError = document.getElementById('card-errors');
	  if (error) {
	  	displayError.classList.add('alert','alert-warning');
	    displayError.textContent = error.message;
	  } else {
	  	displayError.classList.remove('alert','alert-warning');
	    displayError.textContent = '';
	    
		        
	  }
	});

	var form = document.getElementById('payment-form');

		form.addEventListener('submit', function(ev) {
		  ev.preventDefault();
		  stripe.confirmCardPayment("{{$clientSecret}}", {
		    payment_method: {
		      card: card
		      
		    }
		  }).then(function(result) {
		    if (result.error) {
		      // Show error to your customer (e.g., insufficient funds)
		      console.log(result.error.message);
		    } else {
		      // The payment has been processed!
		      if (result.paymentIntent.status === 'succeeded') {
		        // Show a success message to your customer
		        // There's a risk of the customer closing the window before callback
		        // execution. Set up a webhook or plugin to listen for the
		        // payment_intent.succeeded event that handles any business critical
		        // post-payment actions.

		      }
		    }
		  });
		});

</script>
@endsection