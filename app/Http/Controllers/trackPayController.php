<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ShippingEstimate;
use App\Models\User;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class trackPayController extends Controller{

public function trackOrder(Request $request)
{
    $user = auth()->user(); // Get the authenticated user
    
    $validated = $request->validate([
        'email' => 'required|email',
        'tracking_number' => 'required|string',
    ]);

    // Retrieve the shipping estimate based on email and tracking number
    $shippingEstimate = ShippingEstimate::where('email', $validated['email'])
        ->where('tracking_number', $validated['tracking_number'])
        ->first();

    if (!$shippingEstimate) {
        return response()->json(['error' => 'Order not found.'], 404);
    }

    return view('userdashboardtrack', compact('shippingEstimate'));

}

// Redirect to PayPal
public function payNow(Request $request)
{
    $amount = $request->input('amount');
    $estimateId = $request->input('id');

    // Store the estimate ID in session
    session(['estimate_id' => $estimateId]);

    $provider = new PayPalClient();
    $provider->setApiCredentials(config('paypal'));
    $paypalToken = $provider->getAccessToken();

    $response = $provider->createOrder([
        "intent" => "CAPTURE",
        "application_context" => [
            'brand_name' => 'Mofat Van Services',
            'locale' => 'en-GB',
            "return_url" => route('paypal.success'),
            "cancel_url" => route('paypal.cancel'),
        ],
        "purchase_units" => [
            [
                "amount" => [
                    "currency_code" => "GBP",
                    "value" => $amount,
                ]
            ]
        ]
    ]);

    if (isset($response['id'])) {
        // Redirect the user to PayPal checkout page
        return redirect($response['links'][1]['href']);
    } else {
        return redirect()->route('paypal.cancel');
    }
     
}

// Success Payment
public function paymentSuccess(Request $request)
{
    $provider = new PayPalClient();
    $provider->setApiCredentials(config('paypal'));
    $provider->getAccessToken();

    $response = $provider->capturePaymentOrder($request->get('token'));

    if ($response['status'] == 'COMPLETED') {
        
        // Retrieve estimate ID from session
        $estimateId = session('estimate_id');
        $shippingEstimate = ShippingEstimate::find($estimateId);

        if ($shippingEstimate) {
            $shippingEstimate->status = 'Paid';  // Set status to 'Paid'
            $shippingEstimate->save();
        }
         
        return view('payment-success');
    }

    return redirect()->route('paypal.cancel');
}

// Cancel Payment
public function paymentCancel()
{
    return view('payment-cancel');
}
}
 


