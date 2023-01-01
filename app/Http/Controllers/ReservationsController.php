<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservations;
use App\Models\Listing;
use App\Notifications\MyReservations;
use DB;
class ReservationsController extends Controller
{
    public function store(Request $request, Reservations $reservation)
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
        // MailTo::$reservation->user_email(new MyReservations())->content('asdasdsd');

        return redirect('/')->with('message', 'Your reservation was submitted');
    }

    public function manage(Request $request, Listing $listing, Reservations $reservations)
    {
        
        if ($listing->id == $reservations->listing_id) {
            dd($request->user());
        }
 
            return view('reservations.manage', [
                'reservations' => auth()
                ->user()
                ->reservations()
                ->get(),
            ]);
            
            
            
        
    }

    // public function sendEmail(Request $request, Listing $listing, Reservations $reservations) {
        
    //     if ($listing->id == $reservations->listing_id) {
    //         dd($request->user()->email);
    //     }
    //     return view('reservations.manage',[
    //         'reservations' => auth()
    //         ->user()
    //         ->reservations()
    //         ->get(),
    //     ]);
    // }
}
