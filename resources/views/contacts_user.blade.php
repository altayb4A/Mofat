@extends('layouts.user')

@section('title', 'Contact Messages')

@section('content')
<section class="section">
    <div class="container-fluid">
        <!-- Title -->
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title d-flex align-items-center flex-wrap">
                        <h2 class="mr-40">Your Sent Messages</h2>
                    </div>
                </div>
                <!-- Search Bar -->
                <div class="col-md-6">
                    <div class="search-wrapper title d-flex input-style-8">
                        <form action="{{ route('contacts_user') }}" method="GET" class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search..." aria-label="Search" name="search" value="{{ request('search') }}">
                        </form>
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

        <!-- Search Results -->
        @if(request('search'))
        <div class="alert alert-info">
            You searched for "{{ request('search') }}"
            @if($contacts->total() == 0)
            . No results match your query.
            @endif
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
                                    <th><h6 class="text-sm text-medium">Subject</h6></th>
                                    <th><h6 class="text-sm text-medium">Message</h6></th>
                                    <th><h6 class="text-sm text-medium">Date</h6></th>
        
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($contacts as $contact)
                                <tr>
                                    <td><p class="text-sm">{{ $contact->id }}</p></td>
                                    <td><p class="text-sm">{{ $contact->name }}</p></td>
                                    <td><p class="text-sm">{{ $contact->email }}</p></td>
                                    <td><p class="text-sm">{{ $contact->phone }}</p></td>
                                    <td><p class="text-sm">{{ $contact->subject }}</p></td>
                                    <td><p class="text-sm">{{ Str::limit($contact->message, 50) }}</p></td>
                                    <td><p class="text-sm">{{ $contact->created_at->format('M d, Y') }}</p></td>
                                     
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center text-sm">No contact form entries found.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Pagination -->
                <nav>
                    {{ $contacts->links('pagination::bootstrap-5') }}
                </nav>
                
            </div>
        </div>
    </div>
</section>
@endsection