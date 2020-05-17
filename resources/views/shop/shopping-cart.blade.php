
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
    </style>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" > </script>

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

<!------------------------------------Cart-thing----------------------------------------->

    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($articles as $article)
                        <li class="list-group-item">

                            <span class="badge">{{ $article['Qty'] }}</span>

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
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: {{ $TotalPrice }} $ </strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{route('checkout')}}" class="btn btn-success">Checkout</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Items in Cart!</h2>
            </div>
        </div>
@endif



</body>
</html>
