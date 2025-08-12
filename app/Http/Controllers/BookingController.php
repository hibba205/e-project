<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\movie;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    //  public function store(Request $request)
    // {
       
    //     $request->validate([
    //         'movie_id' => 'required|exists:movies,id',
    //         'day' => 'required|string',
    //         'screen' => 'required|string',
    //         'time' => 'required|string',
    //         'seats' => 'required|string',
    //     ]);
    //     $booking = Booking::create([
    //         'movie_id' => $request->movie_id,
    //         'day' => $request->day,
    //         'screen' => $request->screen,
    //         'time' => $request->time,
    //         'seats' => $request->seats,
    //     ]);

    //     return redirect()->route('eticket.show', $booking->id);
    // }
    // public function show($id)
    // {
    //     $booking = Booking::with('movie')->findOrFail($id);
    //     return view('eticket', compact('booking'));
    // }
    // public function index()
    // {
    //     $bookings = booking::with('movie')->latest()->paginate(10);
    //     return view('admin.bookings.index', compact('bookings'));
    // }
 
    // public function create()
    // {
    //     $movies = movie::all();

    //     return view('booking', compact('movies'));
    // }

    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'movie_id' => 'required|exists:movies,id',
    //         'day' => 'required|string',
    //         'screen' => 'required|string',
    //         'time' => 'required|string',
    //         'seats' => 'required|string',
    //     ]);

    //     $booking = Booking::create($validated);

    //     return redirect()->route('booking.show', $booking->id);
    // }

    // public function show(Booking $booking)
    // {
    //     $movie = $booking->movie;

    //     return view('eticket', [
    //         'booking' => $booking,
    //         'movieTitle' => $movie->title,
    //         'movieImg' => asset('storage/' . $movie->image),
    //     ]);
    // }
    // public function create(Request $request)
    // {
    //     $movieId = $request->query('movie_id');

    //     if (!$movieId) {
    //         // If no movie_id passed, redirect back to movies page
    //         return redirect()->route('movies.index')
    //             ->with('error', 'Please select a movie to book.');
    //     }

    //     $movie = Movie::findOrFail($movieId);

    //     return view('user.ticket-booking', [
    //         'movie' => $movie,
    //     ]);
    // }
    public function create(Request $request)
{
    $movieId = $request->query('movie_id');

    if (!$movieId) {
        return redirect()->route('movies.index')
            ->with('error', 'Please select a movie to book.');
    }

    $movie = Movie::findOrFail($movieId);

    return view('user.ticket-booking', [
        'movie' => $movie, // ← fix here
    ]);
}

    public function store(Request $request)
    {
        $validated = $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'day' => 'required|string',
            'screen' => 'required|string',
            'time' => 'required|string',
            'seats' => 'required|string',
        ]);

        $booking = Booking::create($validated);

        return redirect()->route('booking.show', $booking->id);
    }

    public function show(Booking $booking)
    {
        $movie = $booking->movie;

        return view('user.eticket', [
            'booking' => $booking,
            'movieTitle' => $movie->title,
            'movieImg' => asset('storage/' . $movie->image),
        ]);
    }
}


