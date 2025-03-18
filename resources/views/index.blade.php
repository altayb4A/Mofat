@extends('layouts.app')

@section('title', 'Mofat Van Services')

@section('content')
<!-- start slider -->
 <head>
    <style>
        .btn{
            background-color: #00165B !important;
            color: #fff !important;
            padding: 5px 10px !important;
            border-radius: 5px !important;
        }
        .btn:hover{
            color:#F9A332 !important;
        }
    </style>
 
 </head>
<section class="p-0 top-space-margin full-screen md-h-600px sm-h-650px">
    <div class="swiper h-100 magic-cursor swiper-light-pagination"
        data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-pagination-bullets", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
        <div class="swiper-wrapper">
            <!-- start slider item -->
            <div class="swiper-slide cover-background"
                style="background-image:url('images/movemax-slider-01.jpg');">
                <div class="container h-100">
                    <div class="row align-items-center h-100 xl-ps-10 sm-ps-0">
                        <div class="col-xxl-7 col-xl-10 text-white">
                            <h1 class="fw-600">Trusted freight &amp; logistics services.</h1>
                            <div class="fs-20 opacity-6 mb-40px sm-mb-30px">Providing flexible and reliable delivery
                                all over the UK.</div>
                            <div class="lg-mb-8 md-mb-0">
                                <a href="#our-services"
                                    class="btn btn-white btn-extra-large btn-round-edge fw-700 btn-box-shadow me-35px">Explore
                                    Services</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            <!-- start slider item -->
            <div class="swiper-slide cover-background"
                style="background-image:url('images/mofat4.png');" >
                <div class="container h-100">
                    <div class="row align-items-center h-100 xl-ps-10 sm-ps-0">
                        <div class="col-xxl-7 col-xl-10 text-white">
                            <h1 class="fw-600">Swift & Secure Last Mile Delivery.</h1>
                            <div class="fs-20 opacity-6 mb-40px sm-mb-30px"> Secure packing and movimg for small and large
                                items across the UK.</div>
                            <div class="lg-mb-8 md-mb-0">
                                <a href="{{ route('contact') }}"
                                    class="btn btn-white btn-extra-large btn-round-edge fw-700 btn-box-shadow me-35px">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            <!-- start slider item -->
            <div class="swiper-slide cover-background"
                style="background-image:url('images/movemax-slider-033.jpg');">
                <div class="container h-100">
                    <div class="row align-items-center h-100 xl-ps-10 sm-ps-0">
                        <div class="col-xxl-7 col-xl-10 text-white">
                            <h1 class="fw-600">Seamless Local Moving Services.</h1>
                            <div class="fs-20 opacity-6 mb-40px sm-mb-30px">Efficient local moving services for
                                businesses and individuals.</div>
                            <div class="lg-mb-8 md-mb-0">
                                <a href="{{ route('contact') }}"
                                    class="btn btn-white btn-extra-large btn-round-edge fw-700 btn-box-shadow me-35px">Speak
                                    To Us</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
        </div>
        <!-- start slider pagination -->
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets d-block d-md-none"></div>
        <!-- end slider pagination -->
        <!-- start slider navigation -->
        <div
            class="slider-one-slide-prev-1 icon-very-medium text-white swiper-button-prev slider-navigation-style-06 bg-black-transparent-medium h-60px w-60px d-none d-sm-flex border-radius-100">
            <i class="bi bi-arrow-left-short"></i>
        </div>
        <div
            class="slider-one-slide-next-1 icon-very-medium text-white swiper-button-next slider-navigation-style-06 bg-black-transparent-medium h-60px w-60px d-none d-sm-flex border-radius-100">
            <i class="bi bi-arrow-right-short"></i>
        </div>
        <!-- end slider navigation -->
    </div>
</section>
<!-- end slider -->
<!-- start section -->
<section class="p-0 lg-pt-8 xs-pt-50px">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-5 outside-box-top-205px lg-mt-0 position-relative z-index-1">
                <div class="border-radius-10px overflow-hidden">
                    <div class="bg-base-color p-50px xs-p-30px position-relative">
                        <span class="text-dark-gray opacity-8 fw-500 d-block mb-5px">Mofat Logistics in UK.
                            Limited</span>
                        <h5 class="mb-0 fw-700 text-dark-gray">Swift, Secure, and Seamless Logistics.</h5>
                        <div class="position-absolute top-0 end-0">
                            <img src="images/demo-logistics-diagonal-line-01.svg" alt="" height="100" width="100">
                        </div>
                    </div>
                    <div class="bg-dark-gray ps-50px pe-50px pt-20px pb-20px sm-ps-30px sm-pe-30px">
                        <a href="{{ route('shippingform') }}" class="fs-19 fw-500 text-white d-flex w-100 align-items-center">Get a Van<i class="feather icon-feather-plus ms-auto icon-extra-medium"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- @auth
<li class="line-icon-Company text-base-color me-10px" style=""><a href="{{ route('track') }}" class="widget text-light-gray text-white-hover">Track Your Order</a></li>
@endauth -->
<!-- start section -->
<section id="about-us" class="position-relative">
    <div class="container">
        <img src="images/demo-logistics-home-bg-01.jpg" class="position-absolute bottom-10px right-0px z-index-minus-1"
            data-bottom-top="transform: translateY(150px)" data-top-bottom="transform: translateY(-150px)" alt="" />
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-10 md-mb-50px"
                data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <img src="images/mofat.png" class="w-100"
                    data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)" alt="">
            </div>
            <div class="col-xl-5 col-lg-6 col-md-10 offset-xl-1"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h2 class="fw-700 ls-minus-1px text-dark-gray mb-20px">About Mofat Services Limited.</h2>
                <p class="w-90 lg-w-100">Mofat is a leading provider of freight, moving, and local logistics
                    services based in Manchester, The UK. We provide a full range of services in House Removals,Goods delivery,
                    Warehousing, eBay Delivery, items delivery, and moving.</p>
                <div class="icon-with-text-style-08 mb-10px">
                    <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                        <div
                            class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-light-medium-gray rounded-circle me-15px">
                            <i class="fa-solid fa-check fs-14 text-dark-gray"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="text-dark-gray fw-500">Nationwide coverage with local expertise

                            </span>
                        </div>
                    </div>
                </div>
                <div class="icon-with-text-style-08 mb-10px">
                    <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                        <div
                            class="feature-box-icon feature-box-icon-rounded w-40px h-40px bg-light-medium-gray rounded-circle me-15px">
                            <i class="fa-solid fa-check fs-14 text-dark-gray"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="text-dark-gray fw-500">We Deliver reliably, with with Integrity &amp;
                                Excellence</span>
                        </div>
                    </div>
                </div>
                <div class="mt-35px d-flex flex-wrap">
                    <a href="#our-services"
                        class="btn btn-large btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow btn-icon-right me-30px" style="display: flex; align-items: center; justify-content: center; text-align: center; padding: 10px 20px;">
                        <span style="display: flex; align-items: center; justify-content: center; width: 100%;">
                            <span class="btn-text">Our services</span>
                            <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                        </span>
                    </a>
                    <div class="feature-box feature-box-left-icon-middle xs-mt-20px">
                        <div
                            class="feature-box-icon feature-box-icon-rounded bg-base-color w-60px h-60px rounded-circle me-15px">
                            <i
                                class="feather icon-feather-phone-call align-middle icon-extra-medium text-dark-gray"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-block fw-500">Get in touch</span>
                            <a href="tel:+44 7723166744" class="d-block text-dark-gray fw-700">+44 7723166744</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section id="our-services" class="overflow-hidden bg-very-light-gray mt-5">
    <div class="container">
        <div class="row justify-content-center mb-3 xs-mb-2">
            <div class="col-lg-7 text-center"
                data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [0, 0], "staggervalue": 200, "easing": "easeInOutSine" }'>
                <span
                    class="fs-16 lh-22 fw-700 mb-10px d-inline-block text-uppercase text-dark-gray border-bottom border-2 border-color-base-color">What
                    We Do</span>
                <h2 class="text-dark-gray fw-700 mb-0 ls-minus-1px">Our Services</h2>
            </div>
        </div>
        <div class="row" >
            <div class="col-12 position-relative">
                <div  class="outside-box-right-50 md-outside-box-right-70 sm-outside-box-right-0 pb-2 mb-20px"
                    data-anime='{ "translateX": [100, 0], "opacity": [0,1], "duration": 800, "delay": 100, "staggervalue": 250, "easing": "easeOutQuad" }'>
                    <div class="swiper magic-cursor ps-30px pe-30px sm-ps-0 sm-pe-0"
                        data-slider-options='{ "slidesPerView": 1, "spaceBetween": 35, "loop": true, "autoplay": { "delay": 300000, "disableOnInteraction": false },  "pagination": { "el": ".slider-four-slide-pagination-1", "clickable": true, "dynamicBullets": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 3 }, "992": { "slidesPerView": 2, "spaceBetween": 50 }, "768": { "slidesPerView": 2, "spaceBetween": 40 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                        <div  class="swiper-wrapper pt-30px pb-30px">
                            <!-- start slider item -->
                            <div  class="swiper-slide">
                                <div class="row g-0 services-box-style-02">
                                    <div
                                        class="col-sm-6 services-box bg-white p-10 xxl-p-8 xl-p-6 box-shadow-extra-large">
                                        <div class="services-box-icon">
                                            <i class="line-icon-Truck icon-double-large text-base-color mb-25px"></i>
                                        </div>
                                        <div class="services-box-content">
                                            <a href="{{ route('shippingform') }}"
                                                class="d-inline-block text-dark-gray fs-22 fw-700 mb-5px">Goods Delivery</a>
                                            <p class="mb-15px">Efficient and reliable goods transportation services
                                                across UK.</p>
                                            <a href="{{ route('shippingform') }}"
                                                class="btn btn-extra-large thin btn-link text-dark-gray p-0">Book Now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 services-box-img xs-h-300px">
                                        <div class="h-100 cover-background"
                                            style="background-image: url(images/road.jpg);background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; height: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide">
                                <div class="row g-0 services-box-style-02">
                                    <div
                                        class="col-sm-6 services-box bg-white p-10 xxl-p-8 xl-p-6 box-shadow-extra-large">
                                        <div class="services-box-icon">
                                            <i class="line-icon-Home-2 icon-double-large text-base-color mb-25px"></i>
                                        </div>
                                        <div class="services-box-content">
                                            <a href="{{ route('shippingform') }}"
                                                class="d-inline-block text-dark-gray fs-22 fw-700 mb-5px">House Removals</a>
                                            <p class="mb-15px">Swift house items moving solutions for time-sensitive shipments.
                                            </p>
                                            <a href="{{ route('shippingform') }}"
                                                class="btn btn-extra-large thin btn-link text-dark-gray p-0">Book now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 services-box-img xs-h-300px">
                                        <div class="h-100 cover-background"
                                            style="background-image: url(images/house.png); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; height: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide">
                                <div class="row g-0 services-box-style-02">
                                    <div
                                        class="col-sm-6 services-box bg-white p-10 xxl-p-8 xl-p-6 box-shadow-extra-large">
                                        <div class="services-box-icon">
                                            <i class="line-icon-Scooter icon-double-large text-base-color mb-25px"></i>
                                        </div>
                                        <div class="services-box-content">
                                            <a href="{{ route('shippingform') }}"
                                                class="d-inline-block text-dark-gray fs-22 fw-700 mb-5px">Items Delivery</a>
                                            <p class="mb-15px">Timely and convenient delivery of items to final destinations.</p>
                                            <a href="{{ route('shippingform') }}"
                                                class="btn btn-extra-large thin btn-link text-dark-gray p-0">Book now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 services-box-img xs-h-300px">
                                        <div class="h-100 cover-background"
                                            style="background-image: url(images/local-moving.jpg);background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; height: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end slider item -->
                            <!-- start slider item -->
                            <div class="swiper-slide">
                                <div class="row g-0 services-box-style-02">
                                    <div
                                        class="col-sm-6 services-box bg-white p-10 xxl-p-8 xl-p-6 box-shadow-extra-large">
                                        <div class="services-box-icon">
                                            <i class="line-icon-Box-Open icon-double-large text-base-color mb-25px"></i>
                                        </div>
                                        <div class="services-box-content">
                                            <a href="{{ route('shippingform') }}"
                                                class="d-inline-block text-dark-gray fs-22 fw-700 mb-5px">eBay delivery</a>
                                            <p class="mb-15px">Make your order on eBay and we will deliver it to in no time.</p>
                                            <a href="{{ route('shippingform') }}"
                                                class="btn btn-extra-large thin btn-link text-dark-gray p-0">Book now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 services-box-img xs-h-300px">
                                        <div class="h-100 cover-background"
                                            style="background-image: url(images/Ebay.png);background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; height: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end slider item -->
                        </div>
                    </div>
                </div>
                <!-- start slider pagination -->
                <div
                    class="swiper-pagination slider-four-slide-pagination-1 swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets mt-5 pt-5">
                </div>
                <!-- end slider pagination -->
            </div>
        </div>
    </div>
</section>
<!-- end section -->
  
<!-- start section -->
<!-- <section class="p-0 bg-base-color">
    <div class="container">
        <div class="row align-items-center justify-content-center g-0">
            <div class="col-auto d-flex align-items-center"
                data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <img src="images/demo-data-analysis-08.png" alt="" / class="xs-w-120px">
                <div class="fs-22 last-paragraph-no-margin fw-500 text-dark-gray pt-15px pb-15px">
                    <p>Let us handle your logistics needs efficiently and professionally. <a href="{{route('contact')}}#contact"
                            class="text-decoration-line-bottom fw-700 text-dark-gray">Get in touch today</a></p>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- end section -->
 
 
<!-- start section -->
<section>
    <div class="container-fluid" style="width: 80%;">
        <div class="row">
            <div class="col-xl-6 col-lg-6 md-mb-30px p-0">
                <div class="h-100 md-h-400px xs-h-300px cover-background background-position-left" style="display: flex; justify-content: center; align-items: center; width: 100%;">

                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2374.22029799501!2d-2.2620415!3d53.4823935!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487bb1deb15e044b%3A0x821515bac7f4cb9e!2s32%20Rodney%20St%2C%20Salford%20M3%205HG%2C%20UK!5e0!3m2!1sen!2sqa!4v1741766405219!5m2!1sen!2sqa" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>

                </div>

                     
            </div>
            <div class="col-xl-5 col-lg-6 ps-70px lg-ps-15px"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span
                    class="fs-16 lh-22 fw-700 mb-15px d-inline-block text-uppercase text-dark-gray border-bottom border-2 border-color-base-color">Areas
                    covered across UK</span>
                <h2 class="fw-700 text-dark-gray ls-minus-1px mb-20px w-80 xxl-w-100">All places across The UK.</h2>
                <p class="w-75 xxl-w-100 mb-30px">We provide logistics and Moving Services to all locations in the UK. This is made
                    possible through our partnerships, collaborations with various services providers all over the UK.</p>
                <div>
                    <a href="{{route('shippingform')}}"
                        class="btn btn-large btn-dark-gray btn-hover-animation-switch btn-round-edge btn-box-shadow me-15px">
                        <span> 
                            <span class="btn-text">See Moving Costs</span> 
                            <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
 
 
@endsection
 

