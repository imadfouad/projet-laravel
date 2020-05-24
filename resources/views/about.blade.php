<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Accueil</title>
   
    
    <!-- Styles -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        
        body {
            background-color: white;
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
        .colo2{
            background-color: #f8f8f8;
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
        .esp2{
            margin-left: 10px;
        }
        .footer{
            background-color: #2F4F4F;
            border-top-right-radius:20px;
            border-top-left-radius:20px;
            color: white; 

        }
        .head1 { text-align: center; color: black; font-size: 34px; font-weight: 400; }
        .ContainerThreeColumn-content {
            font-size: 20px;
            text-align:center;
        }   </style>
</head>
<body>
    <div id="app">
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

                    <!-- Branding Image -->
                    <a class="navbar-brand marg0" href="#">
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
                        <li> <a href="{{ route('product.shoppingCart') }}">
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart
                            <span class="badge">{{ Session::has('cart') ? Session::get('cart')->TotalItems : '' }}</span>
                            </a>
                        </li>

                        <a href="/article/create" class=" esp2 btn btn-danger">Ajouter Produit</a>
                        <a href="/mailUs" class=" esp2 btn btn-danger">CONTACTEZ-NOUS</a>

                        @if (Auth::guest())
                            <li><a class="btn" href="{{ route('login') }}">Login</a></li>
                            <li><a class="btn" href="{{ route('register') }}">Register</a></li>

                        @else

                            <li class="dropdown">
                                <a href="#"  data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        

                        

                    </ul>
                </div>
            </div>
        </nav>
    </div>



<div class="products mrg2">
    <a href="{{route('articles')}}"> <h2 class="text-center" ><strong>Vers la page des articles !</strong> </h2> </a>
</div>
<div class="aboutUs">
    <p class="head1">À propos de nous</p>


    <div class="ContainerThreeColumn-content">
        
        <div class="ContainerThreeColumn-columns">
            <div class="ColumnOne">
                <span class="mood-color">
                    <div class="ContainerThreeColumn-description">
                        Dans notre site, nous nous impliquons et nous investissons dans le développement durable, car pour nous cela n'a que des avantages : c'est bon pour nos activités, la planète, nos clients et nos communautés.
                    </div>
                </span>
                
                    
            <div class="mood-color">
                <div class="PromoImageOnTop-small-description">« Shipment zero » est le programme de notre site qui vise à atteindre une empreinte carbone neutre pour toutes ses livraisons, avec un objectif de neutralité carbone pour la moitié des livraisons Amazon d'ici 2030.</div>
            </div>
            <ul>
                <li>
                    

    Créé en mai 2020, storeweb est le site e-commerce dont l’objectif et la vision sont de fournir le plus large assortiment au meilleur prix pour tous les Marocains.

                </li>
                <li>
                      Le site web storeweb est incontestablement est une nouvelle destination de shopping en ligne au Maroc, 
    
   
                </li>
                <li> Le délai de livraison moyen est de 1 à 5 jours.</li>
            </ul>
                </div></div></div>
    
</div>
<div class="footer">
        <div class="container">
            <div class="col-md-3 w3_footer_grid">
                <h3>information</h3>
                <ul class="w3_footer_grid_list">
                    <li><a href="about">About Us</a></li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>policy info</h3>
                <ul class="w3_footer_grid_list">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="privacy">privacy policy</a></li>
                    <li><a href="#">terms of use</a></li>
                </ul>
            </div>
            <div class="col-md-3 w3_footer_grid">
                <h3>important links</h3>
                <ul class="w3_footer_grid_list">
                    <li><a href="welcome" >Acceuil</a></li>
                    <li><a href="login">Login</a></li>
                    <li><a href="register">Register</a></li>
                    <li><a href="articles">Articles</a></li>
                    <li><a href="/shopping-cart">Panier</a></li>
                </ul>
            </div>
              <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
                    <div class="w3_footer_grid_bottom">
                        <h4>100% secure payments</h4>
                        <img src="https://trustlock.co/wp-content/uploads/2019/01/guaranteed-safe-checkout-1.png" alt=" " class="img-responsive" />
                    </div>
                </div>
            <div class="clearfix"> </div>
            <div class="agile_footer_grids">
                <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
                    <div class="w3_footer_grid_bottom">
                        <h5>connect with us</h5>
                        <ul class="agileits_social_icons">
                            <li><a href="https://www.facebook.com" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.twitter.com" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="wthree_footer_copy">
                <p>© 2020 multimedia store. All rights reserved | </p>
            </div>
        </div>
    </div>
</body></html>