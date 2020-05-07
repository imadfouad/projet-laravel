<html>
<head>

    <title> Store </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/test.index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" > </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" > </script>

</head>
<body>
<div class="top-nav-bar">
    <div class="search-box">
        <i class="fa fa-bars"  id="menu-btn" onclick="openmenu()"></i>
        <i class="fa fa-times"  id="close-btn" onclick="closemenu()"></i>
        <img src="https://i.ibb.co/86zL9J2/icone-ordinateur.png" class="logo">
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

<h4 class="heading" id="heading4" tabindex="-1">       Divers</h4> <hr>

<div class="container">
    <div class="row">

        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="">
                        <img src="https://image.businessinsider.com/5df10d81fd9db229ba736a77?width=1100&format=jpeg&auto=webp" class="pro-1" >

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
                    <h3> Iphone 11</h3>
                    <h5> 900$</h5>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="">
                        <img src="https://image.businessinsider.com/5df10d81fd9db229ba736a77?width=1100&format=jpeg&auto=webp" class="pro-1" >

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
                    <h3> Iphone 11</h3>
                    <h5> 900$</h5>
                </div>
            </div>

        </div>



        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="">
                        <img src="https://image.businessinsider.com/5df10d81fd9db229ba736a77?width=1100&format=jpeg&auto=webp" class="pro-1" >

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
                    <h3> Iphone 11</h3>
                    <h5> 900$</h5>
                </div>
            </div>

        </div>



    </div>
</div>
</body>