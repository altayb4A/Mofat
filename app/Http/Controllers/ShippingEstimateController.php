<?php

namespace App\Http\Controllers;

use App\Models\ShippingEstimate;
use App\Mail\TrackingNumberMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Twilio\Rest\Client;
use Illuminate\Support\Str;
use App\Mail\ShippingEstimateSubmitted;

class ShippingEstimateController extends Controller
{
    public function store(Request $request)
    {
        // Validate form inputs
        $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'pickup_location' => 'required|string|max:255',
                'pickup_address' => 'required|string',
                'mobile' => 'required|string|max:20',
                'item_weight' => 'required|numeric|min:0',
                'delivery_location' => 'required|string|max:255',
                'delivery_address' => 'required|string',
                'item_description' => 'required|string',
                'delivery_cost' => 'required|numeric|min:0',
                'services' => 'nullable|array',      
        ]);

        // Generate a tracking number
        $trackingNumber = 'MOFAT-' . strtoupper(Str::random(8));

        $services = $request->input('services'); //Get the array of services
        $servicesString = is_array($services) ? implode(", ", $services) : ''; 
        // $services_string = json_encode($services);

        // Save booking details (assume a `ShippingEstimate` model exists)
        $booking = auth()->user()->shippingEstimates()->create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'item_weight' => $request->item_weight,
            'pickup_location' => $request->pickup_location,
            'delivery_location' => $request->delivery_location,
            'pickup_address' => $request->pickup_address,
            'delivery_address' => $request->delivery_address,
            'item_description' => $request->item_description,
            'tracking_number' => $trackingNumber,
            'delivery_cost'  =>$request->delivery_cost,
             'services' =>  $servicesString,
        ]);

        

        // Send email notification
        Mail::to($booking->email)->send(new TrackingNumberMail($trackingNumber, $booking));

        return redirect()->back()->with('success', 'Your booking has been received. Check your email for the tracking number.');
    }



    
    // protected $googleMapsService;

    // public function __construct(GoogleMapsService $googleMapsService)
    // {
    //     $this->googleMapsService = $googleMapsService;
    // }

    // public function calculateShippingCost(Request $request)
    // {
    //     $validated = $request->validate([
    //         'origin' => 'required|string',
    //         'destination' => 'required|string',
    //         'weight' => 'required|numeric|min:1',
    //     ]);

    //     $distance = $this->googleMapsService->getDistance($validated['origin'], $validated['destination']);

    //     if (!$distance) {
    //         return response()->json(['error' => 'Could not calculate distance'], 400);
    //     }

    //     $cost = $distance * 1.5 + $validated['weight'] * 2;

    //     return view('shipping-cost', [
    //         'distance' => $distance,
    //         'cost' => $cost,
    //         'origin' => $validated['origin'],
    //         'destination' => $validated['destination'],
    //         'weight' => $validated['weight']
    //     ]);
    // }
 

}

// $services = explode(',', $shippingEstimate->services); // Convert the stored string back into an array

// @if(!empty($services))
//     <ul>
//         @foreach($services as $service)
//             <li>{{ $service }}</li>
//         @endforeach
//     </ul>
// @endif