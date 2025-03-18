@extends('layouts.user')

@section('title', 'User Dashboard')

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
 
    <style>
            .badge-danger {
    background-color: red;
}

.badge-warning {
    background-color: orange;
}

.badge-primary {
    background-color: blue;
}
.badge-ready {
    background-color:  #00008B;
}
.badge-onway {
    background-color: #013220;
}

.badge-success {
    background-color: green;
}

    </style>
</head>
<section class="section">
    <div class="container-fluid">
        <!-- Title -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title d-flex align-items-center flex-wrap">
                        <h2 class="mr-40">Active Requests</h2>
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
        <div class="row">
            <div class="col-lg-12">
                <div class="card-style mb-30">
                    <div class="table-responsive">
                        <table class="table top-selling-table">
                            <thead>
                                <tr>
                                    <th><h6 class="text-sm text-medium">ID</h6></th>
                                    <th><h6 class="text-sm text-medium">Name</h6></th>
                                    <th><h6 class="text-sm text-medium">Email</h6></th>
                                    <th><h6 class="text-sm text-medium">Phone</h6></th>
                                    <th><h6 class="text-sm text-medium">Pickup</h6></th>
                                    <th><h6 class="text-sm text-medium">Pickup Address</h6></th>
                                    <th><h6 class="text-sm text-medium">Delivery</h6></th>
                                    <th><h6 class="text-sm text-medium">Delivery Address</h6></th>
                                    <th><h6 class="text-sm text-medium">Weight</h6></th>
                                    <th><h6 class="text-sm text-medium">Cost</h6></th>
                                    <th><h6 class="text-sm text-medium">Tracking.No</h6></th>
                                    <th><h6 class="text-sm text-medium">Status</h6></th>
                                    <th><h6 class="text-sm text-medium">Date</h6></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($estimates as $estimate)
                                <tr>
                                    <td><p class="text-sm">MO{{ $estimate->id }}1225</p></td>
                                    <td><p class="text-sm">{{ $estimate->name }}</p></td>
                                    <td><p class="text-sm">{{ $estimate->email }}</p></td>
                                    <td><p class="text-sm">{{ $estimate->mobile }}</p></td>
                                    <td><p class="text-sm">{{ $estimate->pickup_location }}</p></td>
                                    <td><p class="text-sm">{{ $estimate->pickup_address }}</p></td>
                                    <td><p class="text-sm">{{ $estimate->delivery_location }}</p></td>
                                    <td><p class="text-sm">{{ $estimate->delivery_address }}</p></td>
                                    <td><p class="text-sm">{{ $estimate->item_weight }} kg</p></td>
                                    <td><p class="text-sm">£{{ number_format($estimate->delivery_cost) }}</p></td>
                                    <td><p class="text-sm">{{ $estimate->tracking_number }}</p></td>

                                    <td> 
                                    <p class="text-sm">
                                    @if($estimate->status == 'Pending')
                                        <span class="badge badge-danger">{{ $estimate->status }}</span>
                                    @elseif($estimate->status == 'Updated')
                                        <span class="badge badge-warning">{{ $estimate->status }}</span>
                                    @elseif($estimate->status == 'Paid')
                                        <span class="badge badge-primary">{{ $estimate->status }}</span>
                                    @elseif($estimate->status == 'Ready')
                                        <span class="badge badge-ready">{{ $estimate->status }}</span>
                                    @elseif($estimate->status == 'OnWay')
                                        <span class="badge badge-onway">{{ $estimate->status }}</span>    
                                    @elseif($estimate->status == 'Delivered')
                                        <span class="badge badge-success">{{ $estimate->status }}</span>
                                    @endif
                                  </p>
                                    </td>
                                    <td><p class="text-sm">{{ $estimate->created_at->format('M d') }}</p></td>
                                    <td>
                                        <div class="action">
                                             
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="9" class="text-center text-sm">No shipping estimates found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Pagination -->
                <nav>
                    {{ $estimates->links('pagination::bootstrap-5') }}
                </nav>

                

            </div>
        </div>
    </div>
</section>
 
@endsection
