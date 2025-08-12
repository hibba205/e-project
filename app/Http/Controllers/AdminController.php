<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function bookings()
    {
        $bookings = Booking::with('movie')->latest()->get();

        return view('admin.booking', compact('bookings'));
    }
}
