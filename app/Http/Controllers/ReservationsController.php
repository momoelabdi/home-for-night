<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservations;
use App\Models\Listing;


class ReservationsController extends Controller
{
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
        $formField['listing_id'] = $request->input('listing_id');
        Reservations::create($formField);
        return redirect('/')->with('message', 'Your reservation was submitted');
    }
}
