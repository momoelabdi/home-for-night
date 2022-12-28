<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservations;
use App\Models\Listing;
use DB;

class ReservationsController extends Controller
{
    public function create(Listing $listing)
    {
       
            return view('reservations.create', [
                'listings' => $listing
            ]);
    }
    public function store(Request $request)
    {
        $formField = $request->validate([
            'start' => 'required',
            'end' => 'required',
            'message' => 'required'
        ]);
        
        $formField['user_id'] = auth()->id();
        $formField['user_name'] = auth()->user()->name;
        $formField['user_email'] = auth()->user()->email;
        $formField['listing_id'] =  $request->session()->get('listing_id');
        Reservations::create($formField);
        return redirect('/')->with('message', 'Your reservation was submitted');
    }
}
