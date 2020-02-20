<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#03a6f3">
    <link rel="stylesheet" href="{{asset('css/bootstrap-book-store.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    @yield('add-link')
</head>

<body>
<header>
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3"><a href="#" class="web-url">www.bookstore.com</a></div>
                <div class="col-md-6">
                    <h5>Free Shipping Over $99 + 3 Free Samples With Every Order</h5></div>
                <div class="col-md-3">
                    <span class="ph-number">Call : 800 1234 5678</span>
                </div>
            </div>
        </div>
    </div>
    <div class="main-menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="{{route('shop.home')}}"><img src="{{asset('images/logo.png')}}" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="navbar-item active">
                            <a href="index.html" class="nav-link">Home</a>
                        </li>
                        <li class="navbar-item">
                            <a href="shop.html" class="nav-link">Shop</a>
                        </li>
                        <li class="navbar-item">
                            <a href="about.html" class="nav-link">About</a>
                        </li>
                        <li class="navbar-item">
                            <a href="faq.html" class="nav-link">FAQ</a>
                        </li>
{{--                           C1 phan quyen trong view--}}
{{--                            C2 phan quyen trong controller'function index'--}}
                            @can('user')
                            <li class="navbar-item">
                                <span class="nav-link" style="color: #363636">Hello,{{Auth::user()->name}}</span>
                            </li>
                            <li class="navbar-item">
                                <a href="{{route('logout')}}" class="nav-link">Logout</a>
                            </li>
                            @else
                            <li class="nav-link">
                                <a class="" href="{{route('login')}}" style="color: black">Login/</a>
                                <a class="" href="{{route('register')}}" style="color: black">Register</a>
                            </li>
                                @endcan
                    </ul>
                    <div class="cart my-2 my-lg-0">
                            <span>
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                        <span class="quntity">3</span>
                    </div>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search here..." aria-label="Search">
                        <span class="fa fa-search"></span>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</header>
@yield('content')
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="address">
                    <h4>Our Address</h4>
                    <h6>The BookStore Theme, 4th Store
                        Beside that building, USA</h6>
                    <h6>Call : 800 1234 5678</h6>
                    <h6>Email : info@bookstore.com</h6>
                </div>
                <div class="timing">
                    <h4>Timing</h4>
                    <h6>Mon - Fri: 7am - 10pm</h6>
                    <h6>​​Saturday: 8am - 10pm</h6>
                    <h6>​Sunday: 8am - 11pm</h6>
                </div>
            </div>
            <div class="col-md-3">
                <div class="navigation">
                    <h4>Navigation</h4>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="terms-conditions.html">Terms</a></li>
                        <li><a href="products.html">Products</a></li>
                    </ul>
                </div>
                <div class="navigation">
                    <h4>Help</h4>
                    <ul>
                        <li><a href="">Shipping & Returns</a></li>
                        <li><a href="privacy-policy.html">Privacy</a></li>
                        <li><a href="faq.html">FAQ’s</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5">
                <div class="form">
                    <h3>Quick Contact us</h3>
                    <h6>We are now offering some good discount
                        on selected books go and shop them</h6>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <input placeholder="Name" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" placeholder="Email" required>
                            </div>
                            <div class="col-md-12">
                                <textarea placeholder="Messege"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn black">Alright, Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>(C) 2017. All Rights Reserved. BookStore Wordpress Theme</h5>
                </div>
                <div class="col-md-6">
                    <div class="share align-middle">
                        <span class="fb"><i class="fa fa-facebook-official"></i></span>
                        <span class="instagram"><i class="fa fa-instagram"></i></span>
                        <span class="twitter"><i class="fa fa-twitter"></i></span>
                        <span class="pinterest"><i class="fa fa-pinterest"></i></span>
                        <span class="google"><i class="fa fa-google-plus"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{asset('js/bootstrap-book-store.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
@yield('add-js')
</body>

</html>
