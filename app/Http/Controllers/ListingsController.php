<?php

namespace App\Http\Controllers;
use App\Models\Listing;
use App\Models\Reservations;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationStatus;
use DB;

class ListingsController extends Controller
{
    public function index()
    {
        return view('listings.index', [
            'listing' => Listing::latest()
                ->filter(request(['location', 'search']))
                ->paginate(10),
        ]);
    }

    public function show(Listing $listing)
    {
        return view('listings.show', [
            'item' => $listing,
        ]);
    }

    public function create()
    {
        return view('listings.create');
    }

    public function store(Request $request)
    {
        $formField = $request->validate([
            'title' => 'required',
            'email' => 'required',
            'tags' => 'required',
            'hoster' => ['required', Rule::unique('listings', 'hoster')],
            'logo' => 'required',
            'location' => 'required',
            'description' => 'required',
        ]);

        $formField['user_id'] = auth()->id();
        $formField['status'] = $request->input('status');
        if ($request->hasFile('logo')) {
            $formField['logo'] = $request->file('logo')->store('logos', 'public');
        }

        Listing::create($formField);
        return redirect('/')->with('message', 'Your hosting offer was created successfully');
    }

    public function edit(Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }

    public function update(Request $request, Listing $listing)
    {
        // Error page to be customized
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized action');
        }

        $formField = $request->validate([
            'title' => 'required',
            'email' => 'required',
            'tags' => 'required',
            'hoster' => ['required'],
            'logo' => 'required|mimes:jpg,bmp,png|max:500000',
            'location' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $formField['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formField);
        return redirect('/')->with('message', 'Your hosting offer was updated successfully'); // Back()
    }

    public function destroy(Listing $listing)
    {
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }
        $listing->delete();
        return redirect('/')->with('message', 'Your hosting was deleted');
    }

    public function manage()
    {
        $reservations = Reservations::get();
        return view('listings.manage', [
            'listings' => auth()
                ->user()
                ->listings()
                ->get(),
        ])->with('reservations', $reservations);
    }

    public function status(Request $request, $id)
    {
        $listing = Listing::find($id);
        $listing['status'] = $request->input('status');
        $listing->update();
        $listings = Listing::get();

        $listingId = $listing->id;
        $reservationEmail = DB::table('reservations')
            ->select('user_email')
            ->where('listing_id', '=', $listingId)
            ->get();



        Mail::to($reservationEmail)->send(new ReservationStatus($reservationEmail));

        return redirect('/');
    }
}
