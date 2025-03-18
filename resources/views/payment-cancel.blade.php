@extends('layouts.app')

@section('title', 'Payment Cancelled')

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
<section id="contact" class="ps-8 pe-8 lg-ps-4 lg-pe-4 md-ps-0 md-pe-0 py-10">
    <div class="container-fluid">
        <div class="row g-0 bg-very-light-gray justify-content-center border-radius-10px overflow-hidden flex-lg-row flex-column-reverse">
            <div class="col-lg-8 p-6 lg-p-50px xs-ps-30px xs-pe-30px">
                <span
                    class="fs-16 lh-22 fw-700 mb-15px d-inline-block text-uppercase text-dark-gray border-bottom border-2 border-color-base-color">Mofat Van services</span>
                <h4 class="fw-700 text-dark-gray ls-minus-1px mb-35px">Payment Cancelled!</h4>

 
      
    <p>Your payment has been cancelled.</p>
 

    </div>
        </div>
    </div>
</section>

@endsection