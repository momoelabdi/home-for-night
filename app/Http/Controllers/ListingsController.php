<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingsController extends Controller
{
    public function index()
    {
        return view('listings.index');
    }
}
