<?php

namespace App\Http\Controllers;
use App\Models\ShippingEstimate;
use Illuminate\Http\Request;
use App\Models\User;
class UserDashboardController extends Controller
{
    /**
     * Display the user dashboard.
     */
    public function index()
    {
        
        $user = auth()->user(); // Get the authenticated user

        // Retrieve only the shipping estimates for the logged-in user
        $estimates = ShippingEstimate::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('userdashboard', compact('user', 'estimates'));

    }

    public function destroy($id)
    {
        $estimate = ShippingEstimate::findOrFail($id);

        // Ensure the user can only delete their own estimates
        if ($estimate->user_id !== auth()->id()) {
            return redirect()->route('userdashboard')->with('error', 'You are not authorized to delete this estimate.');
        }

        $estimate->delete();

        return redirect()->route('userdashboard')->with('success', 'Shipping estimate request deleted successfully.');
    }
    
}
