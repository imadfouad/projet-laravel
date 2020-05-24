<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
      <h1> Yay</h1>
    
    
    <!-- Styles -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style type="text/css">
        body {
            background-color: #E1DFDD;
            background-size: 100%;
        }
        .colo1{
            background-color: #f5f8fa;
        }
        .marg0{
            padding-top: 2px;
            margin: 0;
        }

        #logo{
            height: 60px;
                width: 45px;
                margin: 0;
                padding-bottom: 15px;
                
        }
   
      .content-section {
    margin: 1em;
    max-width: 900px;
    margin: 0 auto;
    padding: 0 1.5em;
        }
   
}
.section-header {
    font-family: "Metal Mania";
    font-weight: normal;
    color: #333;
    text-align: center;
    font-size: 2.5em;
}
.btn {
    text-align: center;
    vertical-align: middle;
    padding: .67em .67em;
    cursor: pointer;
}

.btn-primary {
    color: white;
    background-color: #56CCF2;
    border: none;
    border-radius: .3em;
    font-weight: bold;
    margin-left: 25px;
}

.btn-primary:hover {
    background-color: #2D9CDB;
}
.shop-item {
    margin: 30px;
}

.shop-item-title {
    display: block;
    width: 100%;
    text-align: center;
    font-weight: bold;
    font-size: 1.5em;
    color: #333;
    margin-bottom: 15px;
}

.shop-item-image {
    height: 220px;
    width: 220px;
}
}

.shop-item-details {
    display: flex;
    align-items: center;
    padding: 5px;
}

.shop-item-price {
    flex-grow: 1;
    color: #333;
}

.shop-items {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}
.cart-header {
    font-weight: bold;
    font-size: 1.25em;
    color: #333;
}

.cart-column {
    display: flex;
    align-items: center;
    border-bottom: 1px solid black;
    margin-right: 1.5em;
    padding-bottom: 10px;
    margin-top: 10px;
}

.cart-row {
    display: flex;
}

.cart-item {
    width: 45%;
}

.cart-price {
    width: 20%;
    font-size: 1.2em;
    color: #333;
}

.cart-quantity {
    width: 35%;
}

.cart-item-title {
    color: #333;
    margin-left: .5em;
    font-size: 1.2em;
}

.cart-item-image {
    width: 75px;
    height: auto;
    border-radius: 10px;
}

.btn-danger {
    color: white;
    background-color: #EB5757;
    border: none;
    border-radius: .3em;
    font-weight: bold;
}

.btn-danger:hover {
    background-color: #CC4C4C;
}

.cart-quantity-input {
    height: 34px;
    width: 50px;
    border-radius: 5px;
    border: 1px solid #56CCF2;
    background-color: #eee;
    color: #333;
    padding: 0;
    text-align: center;
    font-size: 1.2em;
    margin-right: 25px;
}

.cart-row:last-child {
    border-bottom: 1px solid black;
}

.cart-row:last-child .cart-column {
    border: none;
}

.cart-total {
    text-align: end;
    margin-top: 10px;
    margin-right: 10px;
}

.cart-total-title {
    font-weight: bold;
    font-size: 1.5em;
    color: black;
    margin-right: 20px;
}

.cart-total-price {
    color: #333;
    font-size: 1.1em;
}

.btn-purchase {
    display: block;
    margin: 40px auto 80px auto;
    font-size: 1.75em;
}

    </style>
  </head>
  <body>

  @section('content')
      @if(Session::has('cart'))
          <div class="row">
              <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                  <ul class="list-group">
                      @foreach($articles as $article)
                          <li class="list-group-item">
                              <span class="badge">{{ $article['TotalItems'] }}</span>
                              <strong>{{ $article['title'] }}</strong>
                              <span class="label label-success">{{ $article['price'] }}</span>
                              <div class="btn-group">
                                  <button type="button" class="btn btn-primary btn-xs dropdown-toogle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                  <ul class="dropdown-menu">
                                      <li><a href="#">Reduce by 1</a></li>
                                      <li><a href="#">Reduce All</a></li>
                                  </ul>
                              </div>
                          </li>
                      @endforeach
                  </ul>
                  <h1> Test</h1>
              </div>
          </div>
          <div class="row">
              <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                  <strong>Total: {{ $TotalPrice }}</strong>
              </div>
          </div>
          <hr>
          <div class="row">
              <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                  <button type="button" class="btn btn-success">Checkout</button>
              </div>
          </div>
      @else
          <div class="row">
              <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                  <h2>No Items in Cart!</h2>
              </div>
          </div>
      @endif
  @endsection












  </body>
    </html>
