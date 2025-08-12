<?php

namespace App\Http\Controllers;

use App\Models\movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
     public function index()
    {
        $movies = Movie::all();
        return view('admin.movies.index', compact('movies'));
    }

    public function create()
    {
        $movie = new Movie();
        return view('admin.movies.create', compact('movie'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'release_date' => 'required|date',
            'venue' => 'required',
            'cast' => 'nullable',
            'trailer_url' => 'nullable|url',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('movies', 'public');
        }

        Movie::create($data);
        return redirect()->route('movies.index')->with('success', 'Movie added');
    }

    public function edit(Movie $movie)
    {
        return view('admin.movies.create', compact('movie'));
    }

    public function update(Request $request, Movie $movie)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'release_date' => 'required|date',
            'venue' => 'required',
            'cast' => 'nullable',
            'trailer_url' => 'nullable|url',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('movies', 'public');
        }

        $movie->update($data);
        return redirect()->route('movies.index')->with('success', 'Movie updated');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('movies.index')->with('success', 'Movie deleted');
    }

    public function publicList()
    {
        $movies = movie::all();
        return view('user.movies', compact('movies'));
    }
}
