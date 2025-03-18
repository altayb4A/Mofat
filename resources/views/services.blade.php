@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<!-- start page title -->
<section class="top-space-margin page-title-big-typography cover-background pt-0 pb-0"
    style="background-image: url(images/demo-logistics-contact-title-bg.jpg)">
    <div class="container">
        <div class="row align-items-center justify-content-center small-screen">
            <div class="col-xl-5 col-sm-8 page-title-double-large text-center"
                data-anime='{ "el": "childs", "opacity": [0, 1], "translateY": [30, 0], "duration": 600, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h1 class="text-base-color fw-700 mb-5px">Our Services</h1>
                <h2 class="text-white fw-600 ls-1px mb-0 text-uppercase">Explore our core logistic services</h2>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
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
        <div class="row">
            <div class="col-12 position-relative">
                <div class="outside-box-right-50 md-outside-box-right-70 sm-outside-box-right-0 pb-2 mb-20px"
                    data-anime='{ "translateX": [100, 0], "opacity": [0,1], "duration": 800, "delay": 100, "staggervalue": 250, "easing": "easeOutQuad" }'>
                    <div class="swiper magic-cursor ps-30px pe-30px sm-ps-0 sm-pe-0"
                        data-slider-options='{ "slidesPerView": 1, "spaceBetween": 35, "loop": true, "autoplay": { "delay": 300000, "disableOnInteraction": false },  "pagination": { "el": ".slider-four-slide-pagination-1", "clickable": true, "dynamicBullets": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 3 }, "992": { "slidesPerView": 2, "spaceBetween": 50 }, "768": { "slidesPerView": 2, "spaceBetween": 40 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper pt-30px pb-30px">
                            <!-- start slider item -->
                            <div class="swiper-slide">
                                <div class="row g-0 services-box-style-02">
                                    <div
                                        class="col-sm-6 services-box bg-white p-10 xxl-p-8 xl-p-6 box-shadow-extra-large">
                                        <div class="services-box-icon">
                                            <i class="line-icon-Truck icon-double-large text-base-color mb-25px"></i>
                                        </div>
                                        <div class="services-box-content">
                                            <a href="#contact"
                                                class="d-inline-block text-dark-gray fs-22 fw-700 mb-5px">Goods Delivery</a>
                                            <p class="mb-15px">Efficient and reliable goods transportation services
                                                across UK.</p>
                                            <a href="#contact"
                                                class="btn btn-extra-large thin btn-link text-dark-gray p-0">Book Now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 services-box-img xs-h-300px">
                                        <div class="h-100 cover-background"
                                            style="background-image: url(images/road.jpg)"></div>
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
                                            <a href="#contact"
                                                class="d-inline-block text-dark-gray fs-22 fw-700 mb-5px">House Removals</a>
                                            <p class="mb-15px">Swift house items moving solutions for time-sensitive shipments.
                                            </p>
                                            <a href="#contact"
                                                class="btn btn-extra-large thin btn-link text-dark-gray p-0">Book now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 services-box-img xs-h-300px">
                                        <div class="h-100 cover-background"
                                            style="background-image: url(images/house.png)"></div>
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
                                            <a href="#contact"
                                                class="d-inline-block text-dark-gray fs-22 fw-700 mb-5px">Items Delivery</a>
                                            <p class="mb-15px">Timely and convenient delivery of items to final destinations.</p>
                                            <a href="#contact"
                                                class="btn btn-extra-large thin btn-link text-dark-gray p-0">Book now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 services-box-img xs-h-300px">
                                        <div class="h-100 cover-background"
                                            style="background-image: url(images/local-moving.jpg)"></div>
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
                                            <a href="#contact"
                                                class="d-inline-block text-dark-gray fs-22 fw-700 mb-5px">eBay delivery</a>
                                            <p class="mb-15px">Make your order on eBayand we will deliver it to in no time.</p>
                                            <a href="{{ route('userdashboard') }}"
                                                class="btn btn-extra-large thin btn-link text-dark-gray p-0">Book now</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 services-box-img xs-h-300px">
                                        <div class="h-100 cover-background"
                                            style="background-image: url(images/Ebay.png)"></div>
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
@endsection