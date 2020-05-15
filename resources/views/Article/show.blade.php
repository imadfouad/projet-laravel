<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Détails</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        
        body {
            background-color: #efefef;
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
        .imgg{
            width: 350px;
        }
        .card{
            margin-left: 370px;
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

    </style>

    

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top colo1">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand marg0" href="/welcome/{{ $id_comm }}">
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
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
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
        

        <div class="container">
            
            
            <div class="card" style="width: 18rem;">
              <img src="{{ asset('storage/'.$article->photo) }}" class="imgg card-img-top" alt="...">
              <div class="card-body">
                <h2 class="card-title">{{ $article->nom }}</h2>
                <p class="card-text">Prix : {{ $article->prix }} DH</p>
                
                    <input type="button"   class=" btn btn-success transp"  onclick="mafonction({{$article->id_article}});" value="Ajouter au Panier" > 
    

                        <script type="text/javascript">
                                
                                function mafonction($id){
                                    
                                    Swal.fire({         
                                      title: 'Produit Ajouté au Panier !',
                                      icon: 'success',
                                      showCancelButton: false,
                                      html:'<div class="row">' +'<a href="/ajoutArticle/{{$id_comm}}/pan/'+$id+'" class="btn btn-warning"  id="byd"> POURSUIVRE VOS ACHATS</a>'+
                                       
                                       '<a class="btn btn-warning" href="/ajoutArticlee/{{$id_comm}}/pan/'+$id+'" id="byd1" >FINALISER LA COMMANDE</a>'+'</div>',
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
            </div>


        </div>





        
    </div>

    <!-- Scripts -->
   

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="{{ asset('js/app.js') }}"></script>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
</body>
</html>
