<!DOCTYPE html>
<html>
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
   
      .content-section {
    margin: 1em;
    max-width: 900px;
    margin: 0 auto;
    padding: 0 1.5em;
        }
   
}
.section-header {
    font-family: "Metal Mania";
    font-weight: normal;
    color: #333;
    text-align: center;
    font-size: 2.5em;
}
.btn {
    text-align: center;
    vertical-align: middle;
    padding: .67em .67em;
    cursor: pointer;
}

.btn-primary {
    color: white;
    background-color: #56CCF2;
    border: none;
    border-radius: .3em;
    font-weight: bold;
    margin-left: 25px;
}

.btn-primary:hover {
    background-color: #2D9CDB;
}
.shop-item {
    margin: 30px;
}

.shop-item-title {
    display: block;
    width: 100%;
    text-align: center;
    font-weight: bold;
    font-size: 1.5em;
    color: #333;
    margin-bottom: 15px;
}

.shop-item-image {
    height: 220px;
    width: 220px;
}
}

.shop-item-details {
    display: flex;
    align-items: center;
    padding: 5px;
}

.shop-item-price {
    flex-grow: 1;
    color: #333;
}

.shop-items {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}
.cart-header {
    font-weight: bold;
    font-size: 1.25em;
    color: #333;
}

.cart-column {
    display: flex;
    align-items: center;
    border-bottom: 1px solid black;
    margin-right: 1.5em;
    padding-bottom: 10px;
    margin-top: 10px;
}

.cart-row {
    display: flex;
}

.cart-item {
    width: 45%;
}

.cart-price {
    width: 20%;
    font-size: 1.2em;
    color: #333;
}

.cart-quantity {
    width: 35%;
}

.cart-item-title {
    color: #333;
    margin-left: .5em;
    font-size: 1.2em;
}

.cart-item-image {
    width: 75px;
    height: auto;
    border-radius: 10px;
}

.btn-danger {
    color: white;
    background-color: #EB5757;
    border: none;
    border-radius: .3em;
    font-weight: bold;
}

.btn-danger:hover {
    background-color: #CC4C4C;
}

.cart-quantity-input {
    height: 34px;
    width: 50px;
    border-radius: 5px;
    border: 1px solid #56CCF2;
    background-color: #eee;
    color: #333;
    padding: 0;
    text-align: center;
    font-size: 1.2em;
    margin-right: 25px;
}

.cart-row:last-child {
    border-bottom: 1px solid black;
}

.cart-row:last-child .cart-column {
    border: none;
}

.cart-total {
    text-align: end;
    margin-top: 10px;
    margin-right: 10px;
}

.cart-total-title {
    font-weight: bold;
    font-size: 1.5em;
    color: black;
    margin-right: 20px;
}

.cart-total-price {
    color: #333;
    font-size: 1.1em;
}

.btn-purchase {
    display: block;
    margin: 40px auto 80px auto;
    font-size: 1.75em;
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
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>
    <section class="container content-section">
            <h2 class="section-header">PANIER</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">PRODUIT</span>
                <span class="cart-price cart-header cart-column">PRIX</span>
                <span class="cart-quantity cart-header cart-column">QUANTITE</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">0DH</span>
            </div>
            <button class="btn btn-primary btn-purchase" type="button">acheter</button>
        </section>
       <section class="container content-section">
            <h2 class="section-header">Informatique</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <span class="shop-item-title">Hp laptop</span>
                    <img class="shop-item-image" src="https://i.pcmag.com/imagery/roundups/02naaOkVLe7DIiejFUyDPJp-22.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">12999DH</span>
                        <button class="btn btn-primary shop-item-button" type="button">ajouter au panier</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">phone</span>
                    <img class="shop-item-image" src="https://cdn.vox-cdn.com/thumbor/E8c5U6A_RrsyiwRANmcCLNE2dzc=/0x0:2040x1360/1400x933/filters:focal(860x560:1186x886):no_upscale()/cdn.vox-cdn.com/uploads/chorus_image/image/55855309/akrales_190913_3628_0277.19.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">4000DH</span>
                        <button class="btn btn-primary shop-item-button"type="button">ajouter au panier</button>
                    </div>
                </div>
                <div class="shop-item">
                    <span class="shop-item-title">Mac book Pro</span>
                    <img class="shop-item-image" src="https://i.pcmag.com/imagery/roundups/02naaOkVLe7DIiejFUyDPJp-31.jpg">
                    <div class="shop-item-details">
                        <span class="shop-item-price">30000DH</span>
                        <button class="btn btn-primary shop-item-button" type="button">ajouter au panier</button>
                    </div>
                </div>
            </div></section>
    </body>
    <script type="text/javascript">
      if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready);
} else {
    ready();
}

function ready() {
    var removeCartItemButtons = document.getElementsByClassName('btn-danger');
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i];
        button.addEventListener('click', removeCartItem);
    }

    var quantityInputs = document.getElementsByClassName('cart-quantity-input');
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i];
        input.addEventListener('change', quantityChanged);
    }

    var addToCartButtons = document.getElementsByClassName('shop-item-button');
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i];
        button.addEventListener('click', addToCartClicked);
    }

    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked);
}

function purchaseClicked() {
    alert('Thank you for your purchase');
    var cartItems = document.getElementsByClassName('cart-items')[0];
    while (cartItems.hasChildNodes()) {
        cartItems.removeChild(cartItems.firstChild);
    }
    updateCartTotal();
}
  /*function to remove the red tn nd its parent liakt includi div ptice the its parent lifih name...*/

function removeCartItem(event) {
    var buttonClicked = event.target;
    buttonClicked.parentElement.parentElement.remove();
    updateCartTotal();
}

function quantityChanged(event) {
    var input = event.target;
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
    }
    updateCartTotal();
}

function addToCartClicked(event) {
    var button = event.target;
    var shopItem = button.parentElement.parentElement;
    var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText;
    var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText;
    var imageSrc = shopItem.getElementsByClassName('shop-item-image')[0].src;
    addItemToCart(title, price, imageSrc);
    updateCartTotal();
}

function addItemToCart(title, price, imageSrc) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('This item is already added to the cart')
            return
        }
    }

    var cartRowContents = `
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger" type="button">SUPPRIMER</button>
        </div>`;
    cartRow.innerHTML = cartRowContents;
    cartItems.append(cartRow);
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem);
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged);
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0];
    var cartRows = cartItemContainer.getElementsByClassName('cart-row');
    var total = 0;
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i];
        var priceElement = cartRow.getElementsByClassName('cart-price')[0];
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0];
        var price = parseFloat(priceElement.innerText.replace('$', ''));
        var quantity = quantityElement.value;
        total = total + (price * quantity);
    }
    total = Math.round(total * 100) / 100;
    document.getElementsByClassName('cart-total-price')[0].innerText =  total+"DH";
}
    </script>
    </html>
