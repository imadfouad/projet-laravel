@extends('layouts.app')


@section('css')





<style type="text/css">



    .ff{
        background-color: #efefef;
        margin-top: 50px;

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
    <script src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
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
                <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ''  }}">
                    {{ Session::get('error') }}
                </div>
              <form  method="post"  action="/payement"   id="checkout-form" >
               <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2"  class="sr-only">Adresse de Livraison</label>
                    <input required type="text" class="form-control" id="inputPassword2" placeholder="Adresse de Livraison">
                  </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2"  class="sr-only">Nom du Compte</label>
                    <input required type="text" class="form-control" id="Card-name" placeholder="Nom du compte">
                  </div>
                  <div class="form-group mx-sm-3 mb-2">
                      <label for="card-number" class="sr-only"> Card number </label>
                      <input required type="text" class="form-control" id="card-number" placeholder="Card number">
                  </div>
                  <div class="form-group mx-sm-3 mb-2">
                      <label for="card-cvc" class="sr-only"> CVC </label>
                      <input required type="text" class="form-control" id="card-cvc" placeholder="cvc">
                  </div>
                  <div class="form-group mx-sm-3 mb-2">
                      <label for="card-expiration" class="sr-only"> Expiration date </label>
                      <input required type="text" class="form-control" id="card-expiry" placeholder="MM/YY">
                  </div>
                  {{csrf_field()}}
                  <button type="submit" class="btn btn-success" >Procèder au paiement</button>




              </form>
    
            </dir>
            
        </div>
    </div>
    <div class="ff"><br><br><p> . </p><br><br><br></div>
    @endif
@endsection
@section('extra-script')



    <script type="text/javascript" src="src/js/checkout.js"></script>

@endsection

