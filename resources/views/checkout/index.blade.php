<html>
<head>

    <title> Articles </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/test.index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.css">
    <style type="text/css">
        body{
            background-color: #e2e2e2;
        }
        .marg0{
            padding-top: 2px;
            margin: 0;
            padding-left: 4px;
        }
        #logo{
            height: 60px;
            width: 45px;
            margin: 0;
            padding-bottom: 15px;
        }
        #imgprod{
            height: 250px;
            width: 250px;
        }


        .colo1{
            background-color: #000f2f;

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
        .esp2{
            margin-left: 10px;
        }
        .colo2{
            background-color: #f7f1f1;
        }
        #colo2{
            background-color: #f8f8f8;
            padding-left: 350px;
        }
        .marg1{
            margin-top: 30px;
            margin-left: 420px;
        }
        .b3{
            padding-top: 2px;
        }
        #im1{
            width: 100%;
            height: 480px;
        }
        .cont{
            padding-right: 120px;
            padding-left: 120px;
        }
        #car1{
            height: 170px;

        }
        #car2{
            height: 170px;
        }
        .products{
            background-color: #1B484D;
        }
        .mrg2{
            padding-top: 2px;
            padding-bottom: 7px;
        }
        .feature-box{
            opacity: ;
        }
        .cou1{
            color: white;
        }
        .swal2-icon::before{
            display: none;
        }
        #continuer{
            margin: 20px;
            padding-left: 15px;
        }
        #panier1{
            margin: 20px;
            margin-left: 40px;
        }
        #byd{
            color: white;
            padding-left: 20px;
            margin: 10px;
        }
        #byd1{
            color: white;
            padding-left: 20px;
            margin: 10px;
            margin-left: 75px;
            margin-right: 0;
        }
        .mrg2{
            padding-top: 2px;
            padding-bottom: 7px;
        }
        .products{
            background-color: #1B484D;
        }
        .footer{
            background-color: #2F4F4F;
            border-top-right-radius:20px;
            border-top-left-radius:20px;
            color: white;

        }
        .btn1 btn-success
        {
            text-align: center;
        }
        </style>


    <script src="https://js.stripe.com/v3/"></script>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" > </script>
    <script src="#" > </script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" > </script>

</head>
<body>
<nav class="naavbar navbaar-default navbar-static-top colo1">
    <div class="container ">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!---------------Brand image --------->
            <a class="navbar-brand marg0" href="/welcome/">
            <!--{{ config('app.name', 'Laravel') }} -->
                <img id="logo" src="https://i.ibb.co/86zL9J2/icone-ordinateur.png">
            </a>

        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav naavbar-nav navbar-right b3">
                <!-- Authentication Links -->


                @if (Auth::guest())
                    <li><a class="btn cou1" href="{{ route('login') }}">Login</a></li>
                    <li><a class="btn cou1" href="{{ route('register') }}">Register</a></li>

                @else

                    <li class="dropdown">
                        <a class="btn cou1" href="#"  data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none; ">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
                <li>
                    <a href="{{ route('product.shoppingCart') }}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart
                        <span class="badge">{{ Session::has('cart') ? Session::get('cart')->TotalItems : '' }}</span>
                    </a>
                </li>



            </ul>
        </div>
    </div>
</nav>
<!----------------------Main-Section---------------------------->
                                <h1 style="text-align:center; color: black ; text-decoration: underline"> Checkout </h1>
                            <h4 style="text-align:right ; color: black">  Total is : $ {{$total }}</h4>


                    <!--------------------If-user-not-logged-in----------------->
                            @if (Auth::guest())
                                <!----------------------choix-login-register----------------->
                                <h2 style="color:red ; text-align: center" > Not logged in ! </h2> <hr>
                                <div style="text-align:center">
                                    <a class="btn btn-success"  href="{{ route('login') }}">Login</a>
                                    <a class="btn  btn-success"   href="{{ route('register') }}">Register</a>
                                </div>

                                <!------------------------If--logged-in------------------------>
                            @else
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                                        <form action="{{route('checkout')}}" method="post" id="checkout-form" id="checkout-form">
                                          <div class="row">
                                              <div class="col-xs-12">
                                              <div class="form-group">
                                                    <label for="card-name"> Card Holder Name </label>
                                                    <input type="text" id="card-name" class="form-control" value="" required>
                                              </div>
                                              </div>

                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <label for="card-number">Credit Cart Number</label>
                                                    <input type="text" id="card-number" class="form-control" required>

                                              </div>
                                            </div>
                                                <div class="col-xs-6">
                                                    <div class="form-group">
                                                        <label for="card-expiration">Expiration Month</label>
                                                        <input type="text" id="card-expiration" class="form-control" required>

                                                    </div>
                                                </div>
                                                    <div class="col-xs-6">
                                                        <div class="form-group">
                                                            <label for="card-expiration-year">Expiration Year</label>
                                                            <input type="text" id="card-expiration-year" class="form-control" required>
                                                        </div>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="form-group">
                                                                <label for="card-cvc">CVC</label>
                                                                <input type="text" id="card-cvc" class="form-control" required>

                                                            </div>
                                                        </div>



                                          </div>
                                            {{csrf_field()}}
                                            <button type="submit" class="btn btn-success">Buy Now</button>





                                </form>





                            @endif



</body>
</html>