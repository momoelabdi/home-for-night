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
        return view('listings.index',  [
            'listing' => Listing::all()
        ]);
        // var_dump($listing);
    }

    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

}
