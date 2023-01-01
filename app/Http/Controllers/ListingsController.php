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
            'listing' => Listing::latest()->filter(request(['location', 'search']))->paginate(10)
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

    public function manage() {
        return view('listings.manage', ['listing' => auth()->user()->listings()->get()]);
    }
}
