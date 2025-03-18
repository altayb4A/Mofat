<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\ShipmentEstimate;

class ClientsController extends Controller
{
    public function index(Request $request)
    {
        $contacts = ContactForm::query();

        if ($request->has('search')) {
            $search = $request->get('search');
            $contacts->where(function($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('subject', 'like', "%{$search}%");
            });
        }

        $contacts = $contacts->latest()->paginate(10);

        return view('contacts', compact('contacts'));
    }

    // public function countUsers(Request $request){
    //     $clientsServed = User::count();
    //     $deliveriesCompleted = ShipmentEstimate::count();
 
    //     return response()->json([
    //         'clientsServed' => $clientsServed,
    //         'deliveriesCompleted' => $deliveriesCompleted, 
    //     ]);
    // }
     

    public function index1(Request $request)
    {

        $user = auth()->user();
        $contacts = ContactForm::where('user_id', $user->id);

        if ($request->has('search')) {
            $search = $request->get('search');
            $contacts->where(function($query) use ($search) {
                $query->where('name', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('subject', 'like', "%{$search}%");
            });
        }

        $contacts = $contacts->latest()->paginate(10);

        return view('contacts_user', compact('contacts'));
    }

    public function destroy($id)
    {
        $contact = ContactForm::findOrFail($id);
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Contact form entry deleted successfully.');
    }
}