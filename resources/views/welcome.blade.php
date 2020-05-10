<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    
    
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
        .about-infos{
        	font-family:sans-serif;
        	font-size: 15px;
        	color: black;

        	        }
        #fb-logo{
        	height: 30px;
        	width: 30px;
        }

    </style>
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
                    <a class="navbar-brand marg0" href="{{ url('/') }}">
                        <!--{{ config('app.name', 'Laravel') }} -->
                       <img id="logo" src="https://i.ibb.co/86zL9J2/icone-ordinateur.png">
                    </a> 
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                    	 <li><a class="btn" href="{{ url('/') }}">home</a></li>
                        &nbsp; 
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav naavbar-nav navbar-right b3">
                        <!-- Authentication Links -->
                         

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
                        <a class="btn btn-success " href="/Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Panier  </a>
                         <li><a type="btn" href="#about">aide?</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>



<div class="products mrg2">
    <a href="/articles"> <h2 class="text-center" ><strong>Vers la page des articles !</strong> </h2> </a> 
</div>


    <div class="container cont">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
              <img id="im1" src="https://i.ibb.co/3WPcm8w/ps4-listing-thumb-01-ps4-eu-06sep16.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
              <img id="im1" src="https://i.ibb.co/gwm2xxc/imageonline-co-transparentimage-1-1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img id="im1" src="https://i.ibb.co/5RnPzMz/imageonline-co-transparentimage-2.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
<br><br> 

<div class="products">

<div class="container">
<h2 ><strong>Informatique</strong> </h2>
     
    <div class="card-group">
    <div id="car2" class="card">
       <img id="car1" src="https://i.ibb.co/5RnPzMz/imageonline-co-transparentimage-2.png" class="card-img-top" alt="...">
    </div>
    <div id="car2" class="card">
       <img id="car1" src="https://i.ibb.co/5RnPzMz/imageonline-co-transparentimage-2.png" class="card-img-top" alt="...">
    </div>
    <div id="car2" class="card">
       <img id="car1" src="https://i.ibb.co/5RnPzMz/imageonline-co-transparentimage-2.png" class="card-img-top" alt="...">
    </div>
    <div id="car2" class="card">
       <img id="car1" src="https://i.ibb.co/5RnPzMz/imageonline-co-transparentimage-2.png" class="card-img-top" alt="...">
    </div>
    <div id="car2" class="card">
       <img id="car1" src="https://i.ibb.co/5RnPzMz/imageonline-co-transparentimage-2.png" class="card-img-top" alt="...">
    </div>
    </div>
<br><br>

<h2><strong> Multimédia</strong></h2>  
    <div class="card-group ">
    <div id="car2" class="card">
       <img id="car1" src="https://i.ibb.co/5RnPzMz/imageonline-co-transparentimage-2.png" class="card-img-top" alt="...">
    </div>
    <div id="car2" class="card">
       <img id="car1" src="https://i.ibb.co/5RnPzMz/imageonline-co-transparentimage-2.png" class="card-img-top" alt="...">
    </div>
    <div id="car2" class="card">
       <img id="car1" src="https://i.ibb.co/5RnPzMz/imageonline-co-transparentimage-2.png" class="card-img-top" alt="...">
    </div>
    <div id="car2" class="card">
       <img id="car1" src="https://i.ibb.co/5RnPzMz/imageonline-co-transparentimage-2.png" class="card-img-top" alt="...">
    </div>
    <div id="car2" class="card">
       <img id="car1" src="https://i.ibb.co/5RnPzMz/imageonline-co-transparentimage-2.png" class="card-img-top" alt="...">
    </div>
    </div>
</div>

<br><br>

<div class="container">
<h2><strong>Divers</strong> </h2>  
    <div class="card-group">
    <div id="car2" class="card">
       <img id="car1" src="https://i.ibb.co/5RnPzMz/imageonline-co-transparentimage-2.png" class="card-img-top" alt="...">
    </div>
    <div id="car2" class="card">
       <img id="car1" src="https://i.ibb.co/5RnPzMz/imageonline-co-transparentimage-2.png" class="card-img-top" alt="...">
    </div>
    <div id="car2" class="card">
       <img id="car1" src="https://i.ibb.co/5RnPzMz/imageonline-co-transparentimage-2.png" class="card-img-top" alt="...">
    </div>
    <div id="car2" class="card">
       <img id="car1" src="https://i.ibb.co/5RnPzMz/imageonline-co-transparentimage-2.png" class="card-img-top" alt="...">
    </div>
    <div id="car2" class="card">
       <img id="car1" src="https://i.ibb.co/5RnPzMz/imageonline-co-transparentimage-2.png" class="card-img-top" alt="...">
    </div>
    </div>
</div>
<br><br>
<div class="container" id="about">
<h2 ><strong>contacter-nous!!</strong> </h2>
<div class="about-infos">
	<ul>
		<li><a>Télephone: +2125687545483</a> </li>
		<li><a href="https://www.facebook.com"><img id="fb-logo" src="https://cdn.pixabay.com/photo/2015/05/17/10/51/facebook-770688_1280.png"></a></li>
	</ul>
	
	
</div>
</div>
<br><br>





    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
