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
            <li> <a href="/Cart"><i class="fa fa-shopping-basket" aria-hidden="true"></i>  Cart  </a></li>
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
<section class="header">
    <div class="side-menu" id="side-menu">
        <ul>
            <li><a href="/articles">Informatique</a>   <i class="fa fa-angle-right"></i>
                <ul>
                    <li>Computers </li>
                    <li> Mobiles</li>
                    <li>TV</li>
                </ul>
            </li>
            <li> <a href="/articles">Multimédia</a><i class="fa fa-angle-right" ></i>
                <ul>
                    <li>Imprimantes </li>
                    <li>Appareils Photos</li>
                    <li>Casques-Microphones</li>

                </ul>
            </li>
            <li> <a href="/articles">Divers</a><i class="fa fa-angle-right" ></i>
                <ul>
                    <li>Consoles</li>
                    <li>Accessoires Mobile</li>

                </ul>
            </li>
            <br><br>


        </ul>
     <a href="/articles/create" class="btn btn-info" >Créer Nouveau Produit ></a>
    </div>

    <div class="slider">
        <div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://i.kinja-img.com/gawker-media/image/upload/t_original/m1ryvvzox2sdk90khadx.jpg" class="img-responsive image-resize" >
                </div>
                <div class="carousel-item">
                    <img src="https://padbyte.com/wp-content/uploads/2020/01/JBL-LIVE-300TWS.jpg"  class="img-responsive image-resize" >
                </div>
                <div class="carousel-item">
                    <img src="https://o.aolcdn.com/images/dimse/5845cadfecd996e0372f/c1796c8c9a98249c701bd60448d93e8029ebb2ad/Y3JvcD0xNjAwJTJDMTA2NyUyQzAlMkMwJnF1YWxpdHk9ODUmZm9ybWF0PWpwZyZyZXNpemU9MTYwMCUyQzEwNjcmaW1hZ2VfdXJpPWh0dHBzJTNBJTJGJTJGcy55aW1nLmNvbSUyRm9zJTJGY3JlYXRyLXVwbG9hZGVkLWltYWdlcyUyRjIwMjAtMDElMkY5YTY4MDRlMC0zMGJhLTExZWEtYmZmZi1lYTAxZmIwNWUwYjYmY2xpZW50PWExYWNhYzNlMWIzMjkwOTE3ZDkyJnNpZ25hdHVyZT1kMjQ1YWVhOWQ4ZjU1MWU1MDc2ZDY5ZDdlYjVkOGQ2NDQ3NzljZjFm"    class="img-responsive image-resize" >
                </div>
                <div class="carousel-item">
                    <img src="https://image-cdn.hypb.st/https%3A%2F%2Fhypebeast.com%2Fimage%2F2020%2F03%2Fsony-playstation-5-specs-announcement-livestream-01.jpg?quality=95&w=1170&cbr=1&q=90&fit=max" class="img-responsive image-resize" >
                </div>

            </div>
            <ol class="carousel-indicators">
                <li data-target="#slider" data-slide-to="0" class="active"></li>
                <li data-target="#slider" data-slide-to="1"></li>
                <li data-target="#slider" data-slide-to="2"></li>
                <li data-target="#slider" data-slide-to="4"></li>
            </ol>
        </div>




    </div>



</section>


<!----------------------------featured-categories------------------------------------->
<section class="featured-categories">

    <h4 class="heading" id="heading" tabindex="-1">        Informatique </h4> <hr>

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
                      <a href="#" > <h3>Iphone 11</h3> </a>
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






    
    <!--------------------------Fourth-section------------------------------->

    <h4 class="heading" id="heading4" tabindex="-1">       Multimédia</h4> <hr>

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


    <!----------------------------fifth-section----------------------->

    <h4 class="heading" id="heading5" tabindex="-1">        Divers </h4> <hr>

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









</section>

<!--------------------------------website-features------------------------------>
<section class="website-features">

    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-3 feature-box">
                    <img src="data:image/png;base64,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">
                    <div class="feature-text"><p><b>100% Originals items</b></p>available at company </p>
                    </div>
                </div>
                <div class="col-md-3 feature-box">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQjaaRz1Fu-1pqGM6rB4VU6wtPqJMNmZ3mxvisWLfr9crDfyTsp&usqp=CAU">
                    <div class="feature-text"><p><b>Return within 30 days</b></p>of receiving your order</p>
                    </div>
                </div>
                <div class="col-md-3 feature-box">
                    <img src="data:image/png;base64,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">
                    <div class="feature-text"><p><b>Get free delivery for every </b></p>order on more than price </p>
                    </div>
                </div>
                <div class="col-md-3 feature-box">
                    <img src="data:image/png;base64,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">
                    <div class="feature-text"><p><b>Pay online through multiple </b></p>options (Paypal/MasterCard) </p>
                    </div>
                </div>


            </div>
        </div>








</section>







<script>
    function openmenu() {
        document.getElementById("side-menu").style.display="block";
        document.getElementById("menu-btn").style.display="none";
        document.getElementById("close-btn").style.display="block";
    }
    function closemenu() {
        document.getElementById("side-menu").style.display="none";
        document.getElementById("menu-btn").style.display="block";
        document.getElementById("close-btn").style.display="none";
    }


</script>


</body>


</html>