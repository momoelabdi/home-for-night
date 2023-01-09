<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservations;
use App\Models\Listing;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationCompleted;
use App\Mail\HostReserved;
use DB;

class ReservationsController extends Controller
{
    public function store(Request $request, Reservations $reservation)
    {
        //, Listing $listing
        $formField = $request->validate([
            'start' => 'required|date|after:tomorrow',
            'end' => 'required|date|after:start',
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
        Mail::to($listingEmail)->send(new HostReserved($listingEmail));
        return redirect('/reservations/manage')->with('message', 'Your reservation was submitted');
    }
    public function manage()
    {
        $listings = Listing::get();
        return view('reservations.manage', [
            'reservations' => auth()
                ->user()
                ->reservations()
                ->get(),
        ])->with('listings', $listings);
    }

    public function destroy(Reservations $reservation)
    {
        if ($reservation->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $reservation->delete();
        return back()->with('message', 'Your Reservations was deleted');
    }
}
