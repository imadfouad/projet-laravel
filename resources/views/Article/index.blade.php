<html>
<head>

    <title> Store </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/test.index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
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

        }
    </style>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" > </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" > </script>

</head>
<body>
<div class="top-nav-bar">
    <div class="search-box">
        <i class="fa fa-bars"  id="menu-btn" onclick="openmenu()"></i>
        <i class="fa fa-times"  id="close-btn" onclick="closemenu()"></i>
        <a class="navbar-brand marg0" href="{{ url('/') }}">
                        
                        <img id="logo" src="https://i.ibb.co/86zL9J2/icone-ordinateur.png">
        </a> 
        <input type="text" class="form-control">
        <span class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></span>

    </div>
    <div class="menu-bar">
        <ul>
            @if (Route::has('login'))
                <li> <a href=""><i class="fa fa-shopping-basket" aria-hidden="true"></i>  Cart  </a></li>
                @if (Auth::check())
                    <a href="{{route('home')}}">Home</a>

                @else
                    <li> <a href="{{route('login')}}">Login</a></li>
                    <li><a href="{{route('register')}}">Register</a></li>
                @endif


        </ul>
    </div>
    @endif
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
                        <li> <a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>

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
                        <button type="submit" class="btn btn-danger">Supprimer</button>
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
                        <li> <a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>

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
                    <a href="" class="btn btn-info">Détails</a>
                    <form action="{{ url('articles/'.$article->id_article) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="hidden" value="delete" name="">
                        <a href="" class="btn btn-info">Détails</a>
                        <button type="submit" class="btn btn-danger">Supprimer</button>
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
                        <li> <a href="" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>

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
                    <a href="" class="btn btn-info">Détails</a>

                    <form action="{{ url('articles/'.$article->id_article) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="hidden" value="delete" name="">
                        <a href="" class="btn btn-info">Détails</a>
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>

                </div>
            </div>
        </div>
    
        @endforeach

    </div>

    <br><br>
</div>


</body>