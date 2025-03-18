@extends('layouts.app')

@section('title', 'Tracking Order')

@section('content')
<head>
<link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.tailwindcss.com"></script>
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
 
    <style>
 

.pending {
    color: red;
}

.updated{
    color: orange;
}

.paid{
   color: blue;
}

.ready{
     color: darkblue;
}

.onway{
    color: darkgreen;
}

.delivered{
   color: green;
}

    </style>
</head>
<section  class="section" style="margin-left: 2%; margin-top: 2%;">
    <div class="container-fluid" >
        <!-- Title -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title d-flex align-items-center flex-wrap">
                        <h4 class="mr-40"style="color: #00165B">The status of Your Order</h4>
                    </div>
                </div> 
            </div>
        </div>

        <!-- Flash Messages -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

         

        <!-- Table Section -->
        <div class="row" style="height: 200px" >
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <div class="table-responsive">
                        <table class="table top-selling-table">
                            <thead>
                                <tr>
                                   <th><h6 class="text-sm text-medium">Tracking.No</h6></th>
                                    <th><h6 class="text-sm text-medium">Cost</h6></th>
                                    
                                    <th><h6 class="text-sm text-medium">Status</h6></th>
                                    
                                    <th><h6 class="text-sm text-medium">Date-Time</h6></th>

                                    
                                </tr>
                            </thead>
                            <tbody>
                               
                                <tr>
                                <td><p class="text-sm">{{ $shippingEstimate->tracking_number }}</p></td>
                                    
                                    <td><p class="text-sm">£{{ number_format($shippingEstimate->delivery_cost) }}</p></td>
                                    

                                    <td> 
                            <p class="text-sm @if ($shippingEstimate->status == 'Pending') 
                                    pending
                                    @elseif ($shippingEstimate->status == 'Updated') 
                                    Updated
                                    @elseif($shippingEstimate->status == 'Paid') 
                                    paid
                                @elseif ($shippingEstimate->status == 'Ready') 
                                ready
                                @elseif ($shippingEstimate->status == 'OnWay') 
                                    onway
                                @elseif ($shippingEstimate->status == 'Delivered') 
                                delivered
                                @endif
                            ">
                                    {{ $shippingEstimate->status }} </p>
                                    </td>

                                    <td><p class="text-sm">{{ $shippingEstimate->updated_at->format('M d,Y h:i A') }}</p></td>
                                    <td>
                                         
                                </tr>
                                @if ($shippingEstimate->status === 'Updated')
                                <tr>
                                    <td colspan="9" class="text-center text-sm"><form action="{{route('paypal.pay')}}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $shippingEstimate->id }}">
                                <input  type="hidden" name="amount" value="{{ $shippingEstimate-> delivery_cost }}">
                                <button type="submit" style="background-color: #00165B"class="btn btn-primary">Pay Now</button>
                                </form> </td>
                                </tr>
                                @endif
                                 
                            </tbody>
                        </table>
                    </div>
                </div>
                

                

            </div>
        </div>
    </div>
</section>


<!-- Tracking -->
<div class="flex justify-center items-center min-h-screen bg-gray-100">

<div class="w-full max-w-3xl p-6 bg-white shadow-lg rounded-lg" >
        <h2 class="text-xl font-semibold text-center mb-4">Tracking Status</h2>

        @php
            $statuses = ['Paid', 'Ready', 'OnWay', 'Delivered'];
            $currentIndex = array_search($shippingEstimate->status, $statuses);
        @endphp

        @if ($currentIndex !== false)
            <div class="flex items-center justify-between relative">
                @foreach ($statuses as $index => $status)
                @if ($index < count($statuses) - 3)
                            <div class="absolute top-3 left-0 w-full h-1 bg-gray-300"></div>
                        @endif
                    <div class="relative flex flex-col items-center w-full">
                        <div class="w-8 h-8 rounded-full text-white flex items-center justify-center
                            {{ $index <= $currentIndex ? 'bg-green-500' : 'bg-gray-300' }}">
                            {{ $index + 1 }}
                        </div>
                        <span class="mt-2 text-sm font-medium 
                            {{ $index <= $currentIndex ? 'text-green-600' : 'text-gray-400' }}">
                            {{ $status }}
                        </span>
                       
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-gray-500">Tracking will be available once payment is made.</p>
        @endif
    </div>


</div>
 
 