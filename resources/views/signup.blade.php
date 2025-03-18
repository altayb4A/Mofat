@extends('layouts.app')

@section('title', 'signup')

@section('content')

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
<section class="h-450px sm-h-400px top-space-margin page-title-big-typography cover-background pt-0 pb-0"
    style="background-image: url(images/testimonials-section-01.jpg)">
</section>

<section>
    <div class="container overlap-section overlap-section-three-fourth">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="bg-very-light-gray p-8 border-radius-10px">
                    <div class="row">
                        <div class="col-12 text-center mb-6">
                            <h2 class="text-dark-gray mb-0 fw-700 ls-minus-1px">Sign Up</h2>
                        </div>
                    </div>
                     
                    <form method="POST" action="{{ route('signup') }}" class="row contact-form-style-01">
                        @csrf
                        <div class="col-md-12 mb-20px">
                            <div class="position-relative form-group">
                                <span class="form-icon"><i class="bi bi-person"></i></span>
                                <input class="form-control required" type="text" name="name"placeholder="Your username*" value="" required />
                            </div>  
                        </div>

                        <div class="col-md-12 mb-20px">
                            <div class="position-relative form-group">
                                <span class="form-icon"><i class="bi bi-envelope"></i></span>
                                <input class="form-control required" type="email" name="email" placeholder="Your email address*" value="" required />
                            </div>  
                        </div>
                         
                        <div class="col-md-12 mb-20px">
                            <div class="position-relative form-group">
                                <span class="form-icon"><i class="bi bi-lock"></i></span>
                                <input class="form-control required" type="password" name="password" placeholder="Your password*" required />
                            </div> 
                        </div>
                         
                        <div class="col-12">
                            <button
                                class="btn btn-base-color btn-switch-text btn-medium left-icon btn-round-edge submit btn-box-shadow w-100"
                                type="submit">
                                <span>
                                    <span><i class="feather icon-feather-user-plus"></i></span>
                                    <span class="btn-double-text" data-text="Sign Up">Sign Up</span>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
                <p class="text-dark-gray center mb-0 fw-700 ls-minus-1px">have an account? <a href="{{ route('login') }}">Login</a></p>
            </div>
        </div>
    </div>
</section>
@endsection
