<html>
<head>

    <title> Articles </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/test.index.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css">
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

                    <!-- Branding Image -->
                    <a class="navbar-brand marg0" href="/welcome">
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


                        <a href="/mailUs" class=" esp2 btn btn-danger">CONTACTEZ-NOUS</a>
                    </ul>
                </div>
            </div>
        </nav>


<div class="products mrg2">
    <a href="/welcome"> <h2 class="text-center" ><strong>Accueil </strong> </h2> </a>
</div>
<!--------------------------------Products--------------------------------->

<form style="margin-left: 400px;margin-top: 20px;" class="form-group container" action="articlestri" method="get">
    <input class="form-control col-md-2" type="text" name="prixmin" id="prixmin" placeholder="prixmin">
    <input style="margin-left: 5px;" class="form-control col-md-2" type="text" name="prixmax" id="prixmax" placeholder="prixmax">
    <input style="margin-left: 20px;" class="btn btn-info" type="submit" name="" value="chercher">
</form>
@if(Session::has('success'))
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <div id="charge-message" class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        </div>
    </div>
@endif
<h4 class="heading" id="heading4" tabindex="-1">       Informatique</h4> <hr>

<div class="container">
    <div class="row">

    @foreach($articlesinfs as $article)

        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    
                        <img id="imgprod" src="{{ asset('storage/'.$article->photo) }}" class="pro-1" >

                    
                    
                
                    
                    
                    <form class="social" action="{{ url('ajoutArticle/'.$article->id_article) }} " method="post" id="sub">
                        {{ csrf_field() }}
                        <input type="hidden" name="id_article" value="{{ $article->id_article }}" >
                        <input type="hidden" name="prix_unit"  value="{{ $article->prix }}" >
                        
    <a style="color: white;" class=" btn btn-success transp"  onclick="mafonction({{$article->id_article}});" > <i class="fas fa-cart-plus"></i> </a>

   
    
                        
                        
                    </form>

                    

                     
                    
                    



<script type="text/javascript">
        
        function mafonction($id){
            
            Swal.fire({         
              title: 'Produit Ajouté au Panier !',
              icon: 'success',
              showCancelButton: false,
              html:'<div class="row">' +'<a href="/add-to-cart/'+$id+'" class="btn btn-warning"  id="byd"> POURSUIVRE VOS ACHATS</a>'+
               
               '<a class="btn btn-warning" href="/add-to-carte/'+$id+'" id="byd1" >FINALISER LA COMMANDE</a>'+'</div>',
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

                


                </div>
                <div class="product-content">
                    
                    
                    <h3> {{ $article->nom }}</h3>
                    <h5> {{$article->prix}} $</h5>
                    
                    <form action="{{ url('articles/'.$article->id_article) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="hidden" value="delete" name="">
                        <a href="/article/{{$article->id_article}}" class="btn btn-info">Détails</a>

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

        @foreach($articlesmultis as $article)

        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="">
                        <img id="imgprod" src="{{ asset('storage/'.$article->photo) }}" class="pro-1" >

                    </a>

                    <form class="social" action="{{ url('ajoutArticle/'.$article->id_article) }}" method="post" id="sub">
                        {{ csrf_field() }}
                        <input type="hidden" name="id_article" value="{{ $article->id_article }}" >
                        <input type="hidden" name="prix_unit" value="{{ $article->prix }}" >
                        

    <a style="color: white;" class=" btn btn-success transp"  onclick="mafonction({{$article->id_article}});" > <i class="fas fa-cart-plus"></i> </a>     
                        
                        
                    </form>

                    

                         
                    
                    <form class="social" action="{{ url('ajoutArticlee/'.$article->id_article) }}" method="post" id="sube">
                        {{ csrf_field() }}
                        <input type="hidden" name="id_article" value="{{ $article->id_article }}" >
                        <input type="hidden" name="prix_unit" value="{{ $article->prix }}" >
                        
    
                    </form>


                </div>
                <div class="product-content">
                    

                    <h3> {{ $article->nom }}</h3>
                    <h5> {{$article->prix}} $</h5>
                    
                    <form action="{{ url('articles/'.$article->id_article) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="hidden" value="delete" name="">
                        <a href="/article/{{$article->id_article}}" class="btn btn-info">Détails</a>
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

        @foreach($articlesdivs as $article)

        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="">
                        <img id="imgprod" src="{{ asset('storage/'.$article->photo) }}" class="pro-1" >
                    </a>
                    

                    <form class="social" action="{{ url('ajoutArticle/'.$article->id_article) }}" method="post" id="sub">
                        {{ csrf_field() }}
                        <input type="hidden" name="id_article" value="{{ $article->id_article }}" >
                        <input type="hidden" name="prix_unit" value="{{ $article->prix }}" >
                        <input type="hidden" name="id_comm" value="" >



    <a style="color: white;" class=" btn btn-success transp"  onclick="mafonction({{$article->id_article}});" > <i class="fas fa-cart-plus"></i> </a>
                    </form>
                        
                        
                        




                    

                     
                    
                    <form class="social" action="{{ url('ajoutArticlee/'.$article->id_article) }}" method="post" id="sube">
                        {{ csrf_field() }}
                        <input type="hidden" name="id_article" value="{{ $article->id_article }}" >
                        <input type="hidden" name="prix_unit" value="{{ $article->prix }}" >
                        <input type="hidden" name="id_comm"  >
    
                    </form>
                    


                </div>
                <div class="product-content">
                    

                    <h3> {{ $article->nom }}</h3>
                    <h5> {{$article->prix}} $</h5>

                    

                    <form action="{{ url('articles/'.$article->id_article) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="hidden" value="delete" name="">
                        <a href="/article/{{$article->id_article}}" class="btn btn-info">Détails</a>
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

    

    
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/js/all.min.js"> </script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>