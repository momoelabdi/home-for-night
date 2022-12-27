<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservations;

class ReservationsController extends Controller
{
    //

    public function create()
    {
        return view('reservations.create');
    }
}
