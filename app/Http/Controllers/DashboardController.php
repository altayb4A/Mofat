<?php

namespace App\Http\Controllers;

use App\Models\ShippingEstimate;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $query = ShippingEstimate::query();

        // Search functionality
        if ($request->has('search')) {
            $searchTerm = $request->search;
            $query->where(function($q) use ($searchTerm) {
                $q->where('name', 'like', "%{$searchTerm}%")
                  ->orWhere('email', 'like', "%{$searchTerm}%")
                  ->orWhere('pickup_location', 'like', "%{$searchTerm}%")
                  ->orWhere('delivery_location', 'like', "%{$searchTerm}%");
            });
        }

        // Pagination
        $estimates = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('dashboard', compact('estimates'));
    }

    public function destroy($id)
    {
        $estimate = ShippingEstimate::findOrFail($id);
        $estimate->delete();

        return redirect()->route('dashboard')->with('success', 'Shipping estimate request deleted successfully.');
    }
    public function edit($id)
    {
        // Fetch the specific shipping estimate
        $estimate = ShippingEstimate::findOrFail($id);
    
        // Return the form with the shipping estimate data
        return view('edit-estimate', compact('estimate'));
    }
    

    public function update(Request $request, $id)
{
    // Validate the input data
    $request->validate([
        'delivery_cost' => 'required|numeric|min:0',
        'status' => 'required|in:Pending,Updated,Paid,Ready,OnWay,Delivered',
    ]);

    // Find the specific estimate and update it
    $estimate = ShippingEstimate::findOrFail($id);
    $estimate->update([
        'delivery_cost' => $request->delivery_cost,
        'status' => $request->status,
    ]);

    // Redirect back with a success message
    return redirect()->route('dashboard', $id)->with('success', 'Shipping estimate updated successfully.');
}

}
