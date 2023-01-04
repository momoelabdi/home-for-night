<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservations;
use App\Models\Listing;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationCompleted;
use DB;

class ReservationsController extends Controller
{
    public function store(Request $request, Listing $listing, Reservations $reservation)
    {
        $formField = $request->validate([
            'start' => 'required',
            'end' => 'required',
            'message' => 'required',
        ]);

        $formField['user_id'] = auth()->id();
        $formField['user_name'] = $request->input('user_name'); //auth()->user()->name;
        $formField['user_email'] = $request->input('user_email'); //auth()->user()->email;
        $formField['listing_id'] = $request->input('listing_id');
        Reservations::create($formField);

        $listingId = $request->input('listing_id');
        $listingEmail = DB::table('listings')
            ->select('email')
            ->where('id', '=', $listingId)
            ->get();
        Mail::to($request->input('user_email'))->send(new ReservationCompleted($reservation));
        Mail::to($listingEmail)->send(new ReservationCompleted($listingEmail));
        return redirect('/reservations/manage')->with('message', 'Your reservation was submitted');
    }
    public function manage(Reservations $reservations)
    {
        $listings = Listing::get();
        // $reservations = collect($reservations)->groupBy('listing_id');
        // dd($reservations);
        return view('reservations.manage', [
            'reservations' => auth()
                ->user()
                ->reservations()
                ->get(),
        ])->with('listings', $listings);
    }
}
