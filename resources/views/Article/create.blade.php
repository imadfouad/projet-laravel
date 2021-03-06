<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Création</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style type="text/css">
        
        body {
            background-image: url('https://blog.mindmarker.com/hubfs/coffee-1283672_1920.jpg');
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





<form class="container col-md-4 marg1" enctype="multipart/form-data" action="/article" method="post">

      {{ csrf_field() }}

  <div class="form-group">
    <label for="formGroupExampleInput">Nom de l'Article :</label>
    <input required type="text" class="form-control" id="formGroupExampleInput" name="nom" placeholder="Nom de l'Article">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput">Prix :</label>
    <input required type="text" class="form-control" id="formGroupExampleInput" name="prix" placeholder="Prix en DH">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Catégorie :</label>
    <select required type="select" class="form-control" id="formGroupExampleInput2" name="categorie">
        <option value="informatique">informatique</option>
        <option value="divers">divers</option>
        <option value="multimédia">multimédia</option>
    </select>

  </div>

  
  <div class="form-group" >
    <label for="">Image de l'article :</label>
    <input type="file" required class="form-control-file" name="photo" >
  </div>

  <div class="form-group">
    <input type="submit" class="form-control btn btn-primary" value="Enregistrer">
  </div>

</form>


 </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    
</body>
</html>