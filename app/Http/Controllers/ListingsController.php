<?php

namespace App\Http\Controllers;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Blade;

class ListingsController extends Controller
{
    public function index()
    {
        return view('listings.index', [
            'listing' => Listing::all(),
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
            'description' => 'required'
        ]);
        
        $formField['user_id'] = auth()->id();
        // d($formField);
        if ($request->hasFile('logo')) {
            $formField['logo'] = $request->file('logo')->store('logos', 'public');
        }
        

        Listing::create($formField);
        return redirect('/')->with('message', 'Your hosting offer was created successfully');
    }


}
