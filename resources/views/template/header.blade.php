<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('img/fav-icon.png') }}" type="image/x-icon" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Persuit</title>

    <!-- Icon css link -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/line-icon/css/simple-line-icons.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/elegant-icon/style.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
{{--        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
<!-- Rev slider css -->
    <link href="{{asset('vendors/revolution/css/settings.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/revolution/css/layers.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/revolution/css/navigation.css')}}" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="{{asset('vendors/owl-carousel/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/bootstrap-selector/css/bootstrap-select.min.css')}}" rel="stylesheet">

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- HTML5
     shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>
<!--================Top Header Area =================-->
<div class="header_top_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="top_header_left">
                    <select class="selectpicker usd_select">
                        <option>USD</option>
                        <option>$</option>
                        <option>$</option>
                    </select>
                    <div class="input-group">
                        <form action="{{route('products.search')}}" method="get">
                            <input type="search" class="form-control" placeholder="Search" aria-label="Search" name="search">
                            <span class="input-group-btn">
                                <button class="btn btn-secondary" type="submit"><i class="icon-magnifier"></i></button>
                                </span>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="top_header_middle">
                    <a href="#"><i class="fa fa-phone"></i> Call Us: <span>+84 866688124</span></a>
                    <a href="#"><i class="fa fa-envelope"></i> Email: <span>phamphong5499@gmail.com</span></a>
                    <img src="{{asset('img/logo.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-3">
                <div class="top_right_header">
                    <ul class="header_social">
                        <li><a href="{{route('login.facebook')}}"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                    <ul class="top_right">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                               <li class="nav-item dropdown submenu">
                                   <a class="nav-link " href="" role="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       {{ Auth::user()->name }} <i class="dropdown-toggle" aria-hidden="true"></i>
                                   </a>
                                   <ul class="dropdown-menu">
                                       <li class=""><a class="nav-link" href="{{route('bills.listBills')}}">My Bills</a></li>
                                       <li class="nav-item"><a class="nav-link" href="{{route('customers.edit',Auth::user()->id)}}">Update</a></li>
                                       <li class=""><a class="dropdown-item" href="{{ route('logout') }}"
                                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                               {{ __('Logout') }}
                                           </a>

                                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                               @csrf
                                           </form></li>
                                   </ul>
                               </li>

                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="{{route('products.index')}}">List Products</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{route('products.create')}}">Create</a></li>
                            </ul>
                        @endguest
                        {{--                                <li class="user"><a href=""><i class="icon-user icons"></i></a></li>--}}

                        <li class="cart"><a href="{{route('cart.index')}}"><i class="icon-handbag icons" ></i>
                                <span style="color: black">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span></a>

                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--================End Top Header Area =================-->


<!--================Menu Area =================-->
<header class="shop_header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="{{asset('img/logo.png')}}" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav categories">
                    <li class="nav-item">
                        <select class="selectpicker">
                            <option>Categories</option>
                            <option>Categories 2</option>
                            <option>Categories 3</option>
                        </select>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown submenu active">
                        <a class="nav-link dropdown-toggle" href="" role="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Home <i class="dropdown-toggle" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home Simple</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown submenu">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Shop <i class="dropdown-toggle" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="{{route('shirts.index')}}">Shirts</a></li>
{{--                            <li class="nav-item"><a class="nav-link" href="{{route('bills.create')}}">Checkout Method</a></li>--}}
                            <li class="nav-item"><a class="nav-link" href="{{route('home.index')}}">Test</a></li>
                        </ul>
                    </li>
                    @can('crud-users')
                     <li class="nav-item dropdown submenu">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ADMIN <i class="dropdown-toggle" aria-hidden="true"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="{{route('products.index')}}">List Products</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('customers.index')}}">List Customer</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{route('products.create')}}">Create</a></li>
                        </ul>
                     </li>
                     @endcan
                </ul>
            </div>

        </nav>
    </div>
</header>
<!--================End Menu Area =================-->
<main class="py-4">
    @yield('content')
</main>
<!--================Footer Area =================-->
<footer class="footer_area">
    <div class="container">
        <div class="footer_widgets">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-6">
                    <aside class="f_widget f_about_widget">
                        <img src="{{asset('img/logo.png')}}" alt="">
                        <p>Persuit is a Premium PSD Template. Best choice for your online store. Let purchase it to enjoy now</p>
                        <h6>Social:</h6>
                        <ul>
                            <li><a href="#"><i class="social_facebook"></i></a></li>
                            <li><a href="#"><i class="social_twitter"></i></a></li>
                            <li><a href="#"><i class="social_pinterest"></i></a></li>
                            <li><a href="#"><i class="social_instagram"></i></a></li>
                            <li><a href="#"><i class="social_youtube"></i></a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <aside class="f_widget link_widget f_info_widget">
                        <div class="f_w_title">
                            <h3>Information</h3>
                        </div>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Delivery information</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Returns & Refunds</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <aside class="f_widget link_widget f_service_widget">
                        <div class="f_w_title">
                            <h3>Customer Service</h3>
                        </div>
                        <ul>
                            <li><a href="{{route()}}">My account</a></li>
                            <li><a href="#">Ordr History</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Newsletter</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <aside class="f_widget link_widget f_extra_widget">
                        <div class="f_w_title">
                            <h3>Extras</h3>
                        </div>
                        <ul>
                            <li><a href="#">Brands</a></li>
                            <li><a href="#">Gift Vouchers</a></li>
                            <li><a href="#">Affiliates</a></li>
                            <li><a href="#">Specials</a></li>
                        </ul>
                    </aside>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <aside class="f_widget link_widget f_account_widget">
                        <div class="f_w_title">
                            <h3>My Account</h3>
                        </div>
                        <ul>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Ordr History</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Newsletter</a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
        <div class="footer_copyright">
            <h5>© <script>document.write(new Date().getFullYear());</script> <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </h5>
        </div>
    </div>
</footer>
<!--================End Footer Area =================-->



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- Rev slider js -->
<script src="{{asset('vendors/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<!-- Extra plugin css -->
<script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('vendors/bootstrap-selector/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('vendors/image-dropdown/jquery.dd.min.js')}}"></script>
<script src="{{asset('js/smoothscroll.js')}}"></script>
<script src="{{asset('vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('vendors/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('vendors/magnify-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('vendors/vertical-slider/js/jQuery.verticalCarousel.js')}}"></script>
<script src="{{asset('vendors/jquery-ui/jquery-ui.js')}}"></script>
<script src="{{assert('js/home.js')}}"></script>
<script src="{{asset('js/theme.js')}}"></script>
</body>
