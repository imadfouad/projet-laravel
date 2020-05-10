<html>
<head>

    <title> Store </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/test.index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.css">
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
        #imgprod{
            height: 250px;
            width: 250px;
        } 


        .colo1{
            background-color: #f8f8f8;
            
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
        #panier{
            margin: 20px;
            margin-left: 40px;
        }
        #byd{
            color: white;
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" > </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" > </script>

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

<!--------------------------------Products--------------------------------->


<h4 class="heading" id="heading4" tabindex="-1">       Informatique</h4> <hr>

<div class="container">
    <div class="row">

    @foreach($articlesinf as $article)

        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="">
                        <img id="imgprod" src="{{ asset('storage/'.$article->photo) }}" class="pro-1" >

                    </a>
                    <span class="product-trend-label">20% OFF</span>
                    <ul class="social">

                     <li> <button onclick="mafonction();" class=" btn btn-success transp" data-tip="Add to Cart"> <i class="fa fa-shopping-cart"></i> </button></li> 


                    </ul>


                </div>
                <div class="product-content">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <h3> {{ $article->nom }}</h3>
                    <h5> {{$article->prix}} $</h5>
                    
                    <form action="{{ url('articles/'.$article->id_article) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="hidden" value="delete" name="">
                        <a href="" class="btn btn-info">Détails</a>

                        @can('delete',$article)

                        <button type="submit" class="btn btn-danger">Supprimer</button>


                        @endcan 

                    </form>
                </div>
            </div>
        </div>
    
    @endforeach

    </div>
</div>
<br><br>

<h4 class="heading" id="heading4" tabindex="-1">       Multimédia</h4> <hr>

<div class="container">
    <div class="row">

        @foreach($articlesmulti as $article)

        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="">
                        <img id="imgprod" src="{{ asset('storage/'.$article->photo) }}" class="pro-1" >

                    </a>
                    <span class="product-trend-label">20% OFF</span>
                    <ul class="social">
                        <li> <button onclick="mafonction();" class="btn btn-success"><i class="fa fa-shopping-cart"></i></button> </li>
                        
                        

                    </ul>


                </div>
                <div class="product-content">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <h3> {{ $article->nom }}</h3>
                    <h5> {{$article->prix}} $</h5>
                    
                    <form action="{{ url('articles/'.$article->id_article) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="hidden" value="delete" name="">
                        <a href="" class="btn btn-info">Détails</a>
                        @can('delete',$article)

                        <button type="submit" class="btn btn-danger">Supprimer</button>

                        @endcan 
                    </form>
                </div>
            </div>
        </div>
    
        @endforeach
        
    </div>
</div>
<br><br>

<h4 class="heading" id="heading4" tabindex="-1">       Divers</h4> <hr>

<div class="container">
    <div class="row">

        @foreach($articlesdiv as $article)

        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="">
                        <img id="imgprod" src="{{ asset('storage/'.$article->photo) }}" class="pro-1" >
                    </a>
                    <span class="product-trend-label">20% OFF</span>
                    <ul class="social">
                        <li> <button onclick="mafonction();" class="btn btn-success"><i class="fa fa-shopping-cart"></i></button> </li>
                        
                    </ul>
                    


                </div>
                <div class="product-content">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <h3> {{ $article->nom }}</h3>
                    <h5> {{$article->prix}} $</h5>
                    

                    <form action="{{ url('articles/'.$article->id_article) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="hidden" value="delete" name="">
                        <a href="" class="btn btn-info">Détails</a>
                        @can('delete',$article)

                        <button type="submit" class="btn btn-danger">Supprimer</button>

                        @endcan 
                    </form>

                </div>
            </div>
        </div>
    
        @endforeach

    </div>

    <br><br>
</div>
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
    

    

    <script type="text/javascript">
        
        function mafonction(){
            
            Swal.fire({         
              title: 'Produit Ajouté au Panier !',
              icon: 'success',
              showCancelButton: false,
              html:'<div class="row">' +'<button class="btn btn-warning" id="continuer"><a id="byd" href="\articles">POURSUIVRE VOS ACHATS</a></button>'+
               
               '<button class="btn btn-warning" id="panier"><a id="byd" href="\Cart">FINALISER LA COMMANDE</a></button>'+'</div>',
              showConfirmButton: false,
              width: '40%',
              height: '50%'
            }).then((result) => {
              if (result.value) {
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
              }
            })

        }

    </script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    

</body>
</html>