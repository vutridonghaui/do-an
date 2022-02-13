<!doctype html>
<html class="no-js" lang="en">
<head>
    <!-- Basic page needs
    ============================================ -->
    <base href="{{ asset('frontend') }}/">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <!-- Mobile specific metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- font awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- carousel Theme CSS -->
    <link rel="stylesheet" href="css/owl.my_theme.css">
    <!-- carousel transitions CSS -->
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- nivo slider slider css -->
    <link rel="stylesheet" href="css/nivo-slider.css">
    <!-- animate css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Price jquery-ui  -->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- fancy-box theme -->
    <link rel="stylesheet" href="fancy-box/jquery.fancybox.css">
    <!-- normalizer -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Mobile menu css -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!--Start Header Top area -->
<div class="header_area_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <!--Start Search area -->
                <form action="{{route('shop')}}" name="myForm">
                    <div class="search_box">
                        <input name="keyword" id="itp" class="input_text" type="text" placeholder="Search"/>
                        <button type="submit" class="btn-search">
                            <span><i class="fa fa-search"></i></span>
                        </button>
                    </div>
                </form>
                <!--End Search area -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <!--Start Logo area -->
                <div class="logo">
                    <a href="{{asset('/')}}">
                        <img src="img/logo/logo3.png" alt="" />
                    </a>
                </div>
                <!--End Logo area -->
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <!--Start Header Right Cart area -->
                <div class="account_card_area">
                    <ul id="account_nav">
                        <li>
                            @if(isset(Auth::user()->id))
                                <a href="/"><i class="fa fa-key"></i>{{Auth::user()->name}}</a>

                                <div class="account_menu_list">
                                    <div class="account_single_item">
                                        <h2>Currency</h2>
                                        <ul id="account_single_nav_1">
                                            <li><a href="#">Euro</a></li>
                                            <li><a href="#">US Dollor</a></li>
                                        </ul>
                                    </div>
                                    <div class="account_single_item">
                                        <h2>Language</h2>
                                        <ul id="account_single_nav_2">
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">France</a></li>
                                            <li><a href="#">Germany</a></li>
                                        </ul>
                                    </div>
                                    <div class="account_single_item">
                                        <h2>Setting</h2>
                                        <ul id="account_single_nav_3">
                                            <li><a href="{{asset('my_account')}}">My Account</a></li>
                                            <li><a href="/">My Wishlist</a></li>
                                            <li><a href="{{asset('cart')}}">My Cart</a></li>
                                            <li><a href="{{asset('checkout')}}">Checkout</a></li>
                                            <li><a href="{{asset('logout_customer')}}">Log out</a></li>
                                        </ul>
                                    </div>
                                </div>
                            @else
                                <a ><i class="fa fa-key"></i>Login or Register</a>

                                <div class="account_menu_list">
                                    <div class="account_single_item">
                                        <h2>Currency</h2>
                                        <ul id="account_single_nav_1">
                                            <li><a href="#">Euro</a></li>
                                            <li><a href="#">US Dollor</a></li>
                                        </ul>
                                    </div>
                                    <div class="account_single_item">
                                        <h2>Language</h2>
                                        <ul id="account_single_nav_2">
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">France</a></li>
                                            <li><a href="#">Germany</a></li>
                                        </ul>
                                    </div>
                                    <div class="account_single_item">
                                        <h2>Setting</h2>
                                        <ul id="account_single_nav_3">
                                            <li><a href="{{asset('my_account')}}">My Account</a></li>
                                            <li><a href="/">My Wishlist</a></li>
                                            <li><a href="{{asset('cart')}}">My Cart</a></li>
                                            <li><a href="{{asset('checkout')}}">Checkout</a></li>
                                            <li><a href="{{asset('login_customer')}}">Log in</a></li>
                                        </ul>
                                    </div>
                                </div>
                            @endif
                        </li>
                        <li><a href="{{asset('cart/show')}}"><i class="fa fa-shopping-cart"></i>Cart
                                @if(Cart::content() )
                                    @php $total = 0; @endphp
                                    @foreach(Cart::content() as $item)
                                        @php
                                             $total += $item->qty;
                                        @endphp
                                    @endforeach
                                @endif
                                <span class="cart_zero">{{$total}}</span>
                            </a>
                            <div class="cart_down_area">
                                {{--@foreach($items as $item)
                                    <div class="cart_single">
                                        <a href="#"><img src="img/cart/cart-1.jpg" alt="" /></a>
                                        <h2><a href="#">{{$item->name}}</a> <a href="#"><span><i class="fa fa-trash"></i></span></a></h2>
                                        <p>{{$item->qty}} x $item->price</p>
                                    </div>
                                @endforeach--}}
                              {{--  <div class="cart_shoptings">
                                    <a href="{{asset('checkout')}}">Checkout</a>
                                </div>--}}
                            </div>
                        </li>
                    </ul>
                </div>
                <!--End Header Right Cart area -->
            </div>
        </div>
    </div>
</div>
<!--End Header Top area -->

<!--Start Main Menu area -->
<div class="header_botttom_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--Start desktop menu area -->
                <div class="main_menu">
                    <ul id="nav_menu" class="active_cl">
                        <li><a href="{{asset('/')}}"><span class="Home">Home</span></a>

                        </li>
                        <li><a href="{{asset('shop')}}"><span class="Clothings">Shop</span></a>
                            <div class="home_mega_menu">
                                <a href="{{asset('cart/show')}}">Cart</a>
                                <a href="{{asset('checkout')}}">Checkout</a>
{{--                                <a href="{{asset('my_account')}}">My Account</a>--}}
                            </div>
                        </li>
                        <li><a href="{{asset('blog')}}"><span class="Footwear">Blog</span></a></li>
                        <li><a href="{{asset('contact')}}"><span class="Contact">Contact</span></a>
                        <li><a href="{{asset('about_us')}}"><span class="About">About Us</span></a>
                        </li>
                        <li><a><span class="Accessaries">Pages</span></a>
                            <div class="home_mega_menu">
                                <a href="{{asset('about_us')}}">About Us</a>
                                <a href="{{asset('contact')}}">Contact</a>
                                <a href="{{asset('cart')}}">Cart</a>
                                <a href="{{asset('shop')}}">Shop</a>
                                <a href="{{asset('blog')}}">Blog</a>
                                <a href="{{asset('checkout')}}">Checkout</a>
                                <a href="{{asset('my_account')}}">My Account</a>
                                <a href="{{asset('wishlist')}}">Wishlist</a>

                            </div>
                        </li>
                    </ul>
                </div>
                <!--End desktop menu area -->
            </div>
        </div>
    </div>
    <!--start Mobile Menu area -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul>
                                <li><a href="{{asset('/')}}">Home</a>
                                   {{-- <ul>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                    </ul>--}}
                                </li>
                                {{--<li><a href="{{asset('shop')}}">Shop</a>
                                    <ul>
                                        <li><a href="{{asset('shop')}}">Learning</a>
                                            <ul>
                                                <li><a href="{{asset('shop')}}">Carnation</a></li>
                                                <li><a href="{{asset('shop')}}">Daisy</a></li>
                                                <li><a href="{{asset('shop')}}">Rose</a></li>
                                                <li><a href="{{asset('shop')}}">Gladiolus</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{asset('shop')}}">Lighting</a>
                                            <ul>
                                                <li><a href="{{asset('shop')}}">Carnation</a></li>
                                                <li><a href="{{asset('shop')}}">Daisy</a></li>
                                                <li><a href="{{asset('shop')}}">Rose</a></li>
                                                <li><a href="{{asset('shop')}}">Gladiolus</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{asset('shop')}}">Living Room</a></li>
                                        <li><a href="{{asset('shop')}}">Lamp</a></li>
                                    </ul>
                                </li>--}}
                               {{-- <li><a href="{{asset('shop')}}">Lookbook</a>
                                    <ul>
                                        <li><a href="{{asset('shop')}}">Yellow Rose</a></li>
                                        <li><a href="{{asset('shop')}}">White Ros</a></li>
                                    </ul>
                                </li>--}}
                                <li><a href="/">Blog</a>
                                   {{-- <ul>
                                        <li><a href="{{asset('blog')}}">Single Blog</a></li>
                                    </ul>--}}
                                </li>
                                <li><a href="{{asset('shop')}}">Shop</a>
                                    <ul>
                                        <li><a href="{{asset('cart')}}">Cart</a></li>
                                        <li><a href="{{asset('product')}}">Product</a></li>
                                        <li><a href="{{asset('checkout')}}">Checkout</a></li>
                                        <li><a href="{{asset('my_account')}}">My Account</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{asset('about_us')}}">About Us</a></li>
                                <li><a href="{{asset('contact')}}">Contact</a></li>
                                <li><a href="{{asset('about_us')}}">Pages</a>
                                    <ul>
                                        <li><a href="{{asset('about_us')}}">About Us</a></li>
                                        <li><a href="{{asset('contact')}}">Contact</a></li>
                                        <li><a href="{{asset('cart')}}">Cart</a></li>
                                        <li><a href="{{asset('shop')}}">Shop</a></li>
                                        <li><a href="{{asset('checkout')}}">Checkout</a></li>
                                        <li><a href="{{asset('my_account')}}">My Account</a></li>
                                        <li><a href="{{asset('wishlist')}}">Wishlist</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Mobile Menu area -->
</div>
<!--End Main Menu area -->


@yield('content')


<!--Start Branding area -->
<div class="branding_area">
    <div class="container">
        <div class="row">
            <div class="carousel_branding">
                <div class="col-lg-2">
                    <div class="single_branding">
                        <a href="#"><img src="img/branding-image/brand1.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_branding">
                        <a href="#"><img src="img/branding-image/brand2.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_branding">
                        <a href="#"><img src="img/branding-image/brand3.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_branding">
                        <a href="#"><img src="img/branding-image/brand4.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_branding">
                        <a href="#"><img src="img/branding-image/brand1.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_branding">
                        <a href="#"><img src="img/branding-image/brand2.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_branding">
                        <a href="#"><img src="img/branding-image/brand3.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_branding">
                        <a href=""><img src="img/branding-image/brand4.jpg" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="single_branding">
                        <a href="#"><img src="img/branding-image/brand1.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Branding area -->
<!--Start Footer area -->
<div class="footer_area home1_margin_top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="feature_text feature_newsletter">
                    <h4>Newsletter</h4>
                    <p>Get the latest new and special offers</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sign_up">
                    <form action="#">
                        <input class="sign_text" type="text" placeholder="Type your email..." />
                        <button type="submit" class="sign">
                            <span>Sign Up</span>
                            <img src="img/arrow/bkg_newsletter-1.png" alt="" />
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="footer_menu_area">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="help_support">
                        <h2>HELP & SUPPORT</h2>
                        <ul class="footer_menu">
                            <li><a href="{{asset('my_account')}}">My Account</a></li>
                            <li><a href="{{asset('login_customer')}}">Login</a></li>
                            <li><a href="{{asset('cart')}}">My Cart</a></li>
                            <li><a href="{{asset('wishlist')}}">Wishlist</a></li>
                            <li><a href="{{asset('checkout')}}">Checkout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="help_support help_border">
                        <h2>MY ACCOUNT</h2>
                        <ul class="footer_menu">
                            <li><a href="{{asset('my_account')}}">My Account</a></li>
                            <li><a href="{{asset('login_customer')}}">Login</a></li>
                            <li><a href="{{asset('cart')}}">My Cart</a></li>
                            <li><a href="{{asset('wishlist')}}">Wishlist</a></li>
                            <li><a href="{{asset('checkout')}}">Checkout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="help_support help_border">
                        <h2>HELP & SUPPORT</h2>
                        <ul class="footer_menu">
                            <li><a href="{{asset('my_account')}}">My Account</a></li>
                            <li><a href="{{asset('cart')}}">My Cart</a></li>
                            <li><a href="{{asset('wishlist')}}">Wishlist</a></li>
                            <li><a href="{{asset('checkout')}}">Checkout</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="help_support help_border">
                        <h2>STORE INFORMATION</h2>
                        <p>My Company: <span>FlowersWorld 228 Thanhbinh Street, Hadong, Hanoi, VN</span></p>
                        <p>Call us now: <span>(+84) 373539357</span></p>
                        <p>Email: <span>lamtuancong@yourcompany.com</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="footer_bottom_area">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="copy_visa">
                        <div class="copy_right">
{{--                            <h2>Copyright © 2021 <a href="http://freecssthemes.com/">FreeCssThemes</a>. All Rights Reserved.</h2>--}}
                        </div>
                        <div class="visa_card">
                            <img src="img/payment/payment.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Footer area -->

<!-- jquery JS -->
<script src="js/vendor/jquery-1.11.3.min.js"></script>
<!-- bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Mobile menu JS -->
<script src="js/jquery.meanmenu.js"></script>
<!-- jquery.easing js -->
<script src="js/jquery.easing.1.3.min.js"></script>
<!-- knob circle js -->
<script src="js/jquery.knob.js"></script>
<!-- fancybox JS -->
<script src="fancy-box/jquery.fancybox.pack.js"></script>
<!-- price slider JS  -->
<script src="js/price-slider.js"></script>
<!-- nivo slider JS -->
<script src="js/jquery.nivo.slider.pack.js"></script>
<!-- wow JS -->
<script src="js/wow.js"></script>
<!-- nivo-plugin JS -->
<script src="js/nivo-plugin.js"></script>
<!-- scrollUp JS -->
<script src="js/jquery.scrollUp.js"></script>
<!-- carousel JS -->
<script src="js/owl.carousel.min.js"></script>
<!-- plugins JS -->
<script src="js/plugins.js"></script>
<!-- main JS  -->
<script src="js/main.js"></script>
</body>
</html>
