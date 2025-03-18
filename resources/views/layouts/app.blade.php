<!doctype html>
<html class="no-js" lang="en">
<head>
    <title>@yield('title', 'Mofat | Freight, Moving and Local Logistics Services, Manchester - The UK')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="Delivering Excellence, Every Time.">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{ asset('css/vendors.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/icon.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/responsive.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/logistics.css') }}"/>

 
    <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <a href="https://api.whatsapp.com/send?phone=+447904061402&text=Hello Mr. Mofat Manager. Greetings From .......!" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

<style>

.float{
	position:fixed;
	width:40px;
	height:40px;
	bottom:120px;
	right:10px;
	background-color: transparent;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	 
  z-index:100;
}

.my-float{
	margin-top:16px;
  color:#25d366;
}

.btn-link{
    background: none;
    border: none;
    color: #d1d3d4 !important;
    text-decoration: none;
    font-size: inherit;
    padding: 0;
    border-bottom: 0px !important;
}

.btn-link:hover {
    color: #D0D0D0; /* Change the color on hover */
    text-decoration: none; /* Remove underline on hover */
}
 

</style>
</head>
<body data-mobile-nav-style="classic">
    <!-- start header -->
    <header class="header-with-topbar">
        <div class="header-top-bar top-bar-dark" style="background-color:rgb(32, 34, 37)">
            <div class="container-fluid">
                <div class="row h-45px align-items-center m-0">
                    <div class="col-12 col-lg-7 fw-500 justify-content-lg-start justify-content-center">
                        <span class="me-25px fs-15 md-m-0">
                            <i class="feather icon-feather-phone-call text-base-color me-10px"></i><a href="tel:+447904061402" class="widget text-light-gray text-white-hover"><span >Phone: +44 7723166744</span></a>
                        </span>

                        <span class="d-xl-inline-block d-none fs-15"><i class="feather icon-feather-mail text-base-color me-10px"></i><a href="mailto:info@mofat.co.uk" class="widget text-light-gray text-white-hover"><span class="__cf_email__"> info@mofat.co.uk </span></a></span>
                    </div>
                    <div class="col-md-5 text-end d-none d-lg-flex fs-15">
                     
                        @guest
                            <!-- If the user is not logged in -->
                            <li class="line-icon-Company text-base-color me-10px text-light-gray text-white-hover "><a href="{{ route('login') }}" class="widget text-light-gray text-white-hover">Login</a></li>
                            <li class="line-icon-Company text-base-color me-10px"><a href="{{ route('signup') }}"class="widget text-light-gray text-white-hover">Sign Up</a></li>  
                        @endguest

                        @auth
                            <!-- If the user is logged in -->
                            @if(auth()->user()->is_admin !== 1) 
                            <li class="line-icon-Company text-base-color me-10px" style=""><a href="{{ route('userdashboard') }}" class="widget text-light-gray text-white-hover">Dashboard</a></li>
                            <li class="line-icon-Company text-base-color me-10px" class="widget text-light-gray text-white-hover">
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-link">Logout</button>
                                </form>
                                
                            </li>
                            @endif
                        @endauth

                        @auth
                            <!-- If the user is logged in -->
                            @if(auth()->user()->is_admin === 1) 
                            <li class="line-icon-Company text-base-color me-10px" style=""><a href="{{ route('dashboard') }}" class="widget text-light-gray text-white-hover">Dashboard</a></li>
                            <li class="line-icon-Company text-base-color me-10px" class="widget text-light-gray text-white-hover">
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-link">Logout</button>
                                </form>
                                
                            </li>
                            @endif
                        @endauth
        
                    </div>
                </div>
            </div>
        </div>
        <!-- start navigation -->
        <nav class="navbar navbar-expand-lg header-light bg-white header-reverse" data-header-hover="light">
            <div class="container-fluid"> 
                <div class="col-auto">
                    <a class="navbar-brand" href="/">
                    <img src="{{ asset('images/logo1.png') }}" data-at2x="{{ asset('images/logo1.png') }}" alt="" class="default-logo">
                    <img src="{{ asset('images/logo1.png') }}" data-at2x="{{ asset('images/logo1.png') }}" alt="" class="alt-logo">
                    <img src="{{ asset('images/logo1.png') }}" data-at2x="{{ asset('images/logo1.png') }}" alt="" class="mobile-logo">
                    </a>
                </div>
                <div class="col-auto menu-order left-nav">
                    <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="{{ route('about-us') }}" class="nav-link section-link">About us</a></li>
                            <li class="nav-item dropdown dropdown-with-icon-style02"><a href="{{ route('our-services') }}" class="nav-link">Our services</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                    <li><a href="{{ route('our-services') }}"><i class="line-icon-Home align-middle text-base-color"></i>House Removals</a></li>
                                    <li><a href="{{ route('our-services') }}"><i class="line-icon-Truck align-middle text-base-color"></i>Goods Delivery</a></li>
                                    <li><a href="{{ route('our-services') }}"><i class="line-icon-Scooter align-middle text-base-color"></i>Items Delivery</a></li>
                                    <li><a href="{{ route('our-services') }}"><i class="line-icon-Car align-middle text-base-color"></i>eBay Delivery</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="/contact" class="nav-link">Contact us</a></li>

                            <li class="nav-item dropdown dropdown-with-icon-style02"><a href="{{ route('our-services') }}" class="nav-link"> </a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                  
                        <li> 
                        @guest
                            <!-- If the user is not logged in -->
                            <li class="line-icon-Company text-base-color me-10px text-light-gray text-white-hover "><a href="{{ route('login') }}" class="widget text-light-gray text-white-hover">Login</a></li>
                            <li class="line-icon-Company text-base-color me-10px"><a href="{{ route('signup') }}"class="widget text-light-gray text-white-hover">Sign Up</a></li>  
                        @endguest

                        @auth
                            <!-- If the user is logged in -->
                            @if(auth()->user()->is_admin !== 1) 
                            <li class="line-icon-Company text-base-color me-10px" style=""><a href="{{ route('userdashboard') }}" class="widget text-light-gray text-white-hover">Dashboard</a></li>
                            <li class="line-icon-Company text-base-color me-10px" class="widget text-light-gray text-white-hover">
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-link">Logout</button>
                                </form>
                                
                            </li>
                            @endif
                        @endauth
                        </li>
                        <li>
                         @auth
                            <!-- If the user is logged in -->
                            @if(auth()->user()->is_admin === 1) 
                            <li class="line-icon-Company text-base-color me-10px" style=""><a href="{{ route('dashboard') }}" class="widget text-light-gray text-white-hover">Dashboard</a></li>
                            <li class="line-icon-Company text-base-color me-10px" class="widget text-light-gray text-white-hover">
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="btn btn-link">Logout</button>
                                </form>
                                
                            </li>
                            @endif
                        @endauth </li>
                                     
                                </ul>
                             
                        </ul>
                    </div>
                </div>
                <div  class="col-auto ms-auto ps-lg-0 d-none d-sm-flex"> 
                    <div class="header-icon">
                    @auth
                            <div class="d-none d-xl-inline-block"><div class="fw-600">
                                  <a href="{{ route('track') }}" class=" btn btn-xs btn-primary"style="background-color: #00165B; padding-right: 10px;">Track Your order </a>  </div>
                                                         
                            </div>

                    @endauth
                        <!-- <div class="d-none d-xl-inline-block"><div class="fw-600"><a href="tel:+2348059065288" class="widget-text"><i class="feather icon-feather-phone-call me-10px"></i>+44 7723166744</a></div></div>
 -->


                        <div class="header-button ms-25px">
                            <a href="{{ route('shippingform') }}" class="btn btn-small btn-base-color btn-hover-animation-switch btn-round-edge btn-box-shadow fw-700 ls-0px btn-icon-left">
                                <span> 
                                    <span class="btn-text">Request a Quote</span>
                                    <span class="btn-icon"><i class="feather icon-feather-mail"></i></span>
                                    <span class="btn-icon"><i class="feather icon-feather-mail"></i></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
    </header>
    <!-- end header -->


    <!-- Main content -->
    <main>
        @yield('content')
    </main>


    <!-- start footer --> 
    <footer class="fs-17 footer-dark p-0 bg-dark-gray"> 
        <div class="container"> 
            <div class="row justify-content-center pt-6 sm-pt-40px text-sm-start text-center">
                <!-- start footer column -->
                <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 md-mb-30px">
                    <a href="/" class="footer-logo mb-20px d-inline-block"> 
                        <img src="images/logo2.png" data-at2x="images/logo2.png" alt="">
                    </a>
                    <p class="fs-17 mx-auto xs-w-90" style="color:rgb(255, 255, 255);">Mofat Logistics Services Limited. We Provide Reliable Logistics Services for Every Move.</p>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-lg-2 col-md-3 col-sm-5 offset-xl-1 offset-md-0 offset-sm-1 md-mb-30px">
                    <span class="fs-18 d-block text-white fw-500 mb-10px">Navigation</span>
                    <ul>
                        <li><a href="{{ route('about-us') }}" class="section-link" style="color:rgb(255, 255, 255);">About Us</a></li>
                        <li><a href="{{ route('our-services') }}" class="section-link" style="color:rgb(255, 255, 255);">Services</a></li>
                        <li><a href="{{ route('why-us') }}" class="section-link" style="color:rgb(255, 255, 255);">Why Choose Us</a></li>
                        <!-- <li><a href="#about-us">About Us</a></li>
                        <li><a href="#our-services">Services</a></li>
                        <li><a href="#why-us">Why Choose Us</a></li> -->
                        <li><a href="/contact" style="color:rgb(255, 255, 255);">Contact Us</a></li>
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-lg-3 col-md-4 col-sm-5 offset-md-0 offset-sm-1 order-5 order-md-3 xs-mb-30px">
                    <span class="fs-18 d-block text-white fw-500 mb-10px">Need help?</span>
                    <span class="d-block" style="color:rgb(255, 255, 255);">Speak with us.</span>
                    <a href="tel:+234 805 906 5288" class="mb-15px d-inline-block" style="color:rgb(255, 255, 255);">+44 7723166744</a>
                    <span class="d-block" style="color:rgb(255, 255, 255);">Need delivery support?</span>
                    <a href="mailto:info@movemax.com.ng" class="d-sm-inline-block d-block"><span class="__cf_email__" style="color:rgb(255, 255, 255);">info@mofat.co.uk</span></a>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-lg-3 col-md-10 col-sm-6 text-md-center text-lg-start order-last order-sm-4">
                    <span class="fs-18 d-block text-white fw-500 mb-10px">Our Location</span>
                    <div class="d-flex align-items-center justify-content-lg-start justify-content-md-center justify-content-sm-start justify-content-center">
                        <i class="line-icon-Location align-middle icon-medium me-10px" style="color: #F9A332;"></i>
                        <span class="fs-16" style="color:rgb(255, 255, 255);">32 Rodney Street Salford 
M3 5HG.</span>
                    </div>
                     
                </div>
                <!-- end footer column -->
            </div> 
            <div class="row justify-content-center align-items-center pt-5 md-pt-30px">
                <div class="col-12">
                    <div class="divider-style-03 divider-style-03-01 border-color-transparent-white-light"></div>
                </div>
                <div class="col-lg-9 pt-25px pb-25px fs-15 last-paragraph-no-margin text-center order-2 order-sm-1" ><p style="color:rgb(255, 255, 255);">©2025 Mofat Limited | All rights reserved.  Design by <a href="https://www.azoomzone.com" target="_blank" style="color: #F9A332;text-decoration: none;">Azoomzone</a></p></div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->

    <!-- javascript libraries -->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/vendors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/shipping.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/smooth-scroll.js') }}" defer></script>
    @stack('scripts')

</body>
</html>
                            