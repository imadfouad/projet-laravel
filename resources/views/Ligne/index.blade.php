<html>
<head>

    <title> Panier </title>
    <meta charset="UTF-8">
    
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
            height: 50px;
            width: 50px;
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
        #panier{
            margin: 20px;
            margin-left: 40px;
        }
        #byd{
            color: white;
        }
        .mrg2{
            padding-top: 2px;
            padding-bottom: 7px;
        }
        .products{
            background-color: #1B484D;
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


<div class="products mrg2">
    <a href="/welcome/{{$id_comm}}"> <h2 class="text-center" ><strong>Vers la page d'Accueil !</strong> </h2> </a> 
</div>
<!--------------------------------Products--------------------------------->

<div class="row">
    
    <h4 style="font-size: 2em;font-weight: bold;" class="container heading" id="heading4" tabindex="-1">       Liste des Produits:</h4> 
    <a href="/Panier/{{ $id_comm=$id_comm - 1 }}" class="btn btn-info">Récupérer ancienne commande .</a>

</div>


<hr>

<div class="container">
    
    <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col"></th>
              <th scope="col">Catégorie</th>
              <th scope="col">Image</th>
              <th scope="col">Nom du Produit</th>
              <th scope="col">Prix</th>
            </tr>
          </thead>
          <tbody>
                    <input type="hidden" name="" value="{{$total=0}}"> 
                     <input type="hidden" name="" value="{{$i=1}}"> 
    
            

            

    @if(Auth::user()->name == "visiteur")
            {{ Session::put('panier', $panier) }} 
           
        <?php
                $paniers = Session::get('panier') ;
                 ?>
        
        @foreach($paniers as $pan)
{ 1pan }

             <input type="hidden" name="" value="{{$total += $pan->prix}}">      
            <tr>
              <th scope="row">{{ $i++ }}</th>
              <td>{{$pan->categorie}}</td>
              <td><img id="imgprod" src="{{ asset('storage/'.$pan->photo) }}" class="pro-1" ></td>
              <td>{{$pan->nom}}</td>
              <td>{{$pan->prix}} DH</td>
            </tr>

                
        @endforeach

    @else

        

            @foreach($panier as $pan)  
            <input type="hidden" name="" value="{{$total += $pan->prix}}">      
                <tr>
                  <th scope="row">{{ $i++ }}</th>
                  <td>{{$pan->categorie}}</td>
                  <td><img id="imgprod" src="{{ asset('storage/'.$pan->photo) }}" class="pro-1" ></td>
                  <td>{{$pan->nom}}</td>
                  <td>{{$pan->prix}} DH</td>
                </tr>
            @endforeach   
        

     @endif    
          </tbody>
    </table>

    <h3 class="container" style="background-color: #e2e2e2; padding-left: 820px;"> Le Total : {{ $total }} DH </h3>
    <br><br><br>

    <a href="/paiement/{{$total}}">  <button style="margin-left: 430px; height: 50px; width: 200px;" class="btn btn-dark">Passer à la caisse</button>   </a>
        

    
</div>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="{{ asset('js/app.js') }}"></script>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>