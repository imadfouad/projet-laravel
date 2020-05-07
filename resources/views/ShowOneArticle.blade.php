<html>
<head>

    <title> Show Product </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/test.index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" > </script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" > </script>
    <style type="text/css" href="stylesheet">

        *{
            margin:0;
            padding:1px;
            text-decoration: none;
            font-family:"montserrat";

        }
        body
        {
            background-color: #2ab27b;
        }
        .single-product{
            width:500px;
            background: #fff;
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
        }
        .one-product{
            height: 600px;
            overflow: hidden;
            background: #fff;
            position: relative;
        }
        .one-product img {
            height: 490px;
            padding-top:1px;
        }
        #image-container{
                width:360px;
                height: 240px;
        }
        .price{
            position: absolute;
            top:20px;
            right:20px;
            color:#2ab27b;
            font-size:24px;

        }
        .product-info{
            padding:0px;

        }


        .name{
            text-transform:uppercase;
            font-size:20px;
            color:#333;

        }
        .dis{
            font-size:21px;
           color: orange;
        }
        .btn{
           display: block;
            background: #2ab27b;
            text-align: center;
            color:#fff;
            padding: 5px;
            margin-top:2px;
            transition:0.3s;
        }
        .btn:hover{
            background: #333;



        }




    </style>

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

<!----------------------------------Single-product--------------------------------------->
<div class="single-product">

    <div class="one-product">
        <div class="image-container"  alt="">

            <img  src="https://padbyte.com/wp-content/uploads/2020/01/JBL-LIVE-300TWS.jpg" alt="">
        </div>
        <div class="price" > $200

        </div>
        <div class="product-info">
            <div class="name"> Iphone </div>
            <div class="dis"> -20% OFF</div>
            <a href="#" class="btn" > Add to Cart </a>

        </div>


    </div>

</div>





</body>
</html>