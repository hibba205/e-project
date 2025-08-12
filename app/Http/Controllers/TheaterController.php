<?php

namespace App\Http\Controllers;

use App\Models\Theater;
use Illuminate\Http\Request;

class TheaterController extends Controller
{
     public function index()
    {
        $theaters = Theater::all();
        return view('admin.theaters.index', compact('theaters'));
    }

    public function create()
    {
         $theater = new Theater(); 
          return view('admin.theaters.create', compact('theater'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|string',
            'location'=>'required|string',
            'seats'=>'required|integer',
            'image'=>'nullable|image|max:2048'
        ]);
        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('theaters','public');
        }
        Theater::create($data);
        return redirect()->route('theaters.create')->with('success','Added');
    }

    public function edit(Theater $theater)
    {
        return view('admin.theaters.create', compact('theater'));
    }

    public function update(Request $request, Theater $theater)
    {
        $data = $request->validate([
            'name'=>'required|string',
            'location'=>'required|string',
            'seats'=>'required|integer',
            'image'=>'nullable|image|max:2048'
        ]);
        if ($request->file('image')) {
            $data['image'] = $request->file('image')->store('theaters','public');
        }
        $theater->update($data);
        return redirect()->route('theaters.create')->with('success','Updated');
    }

    public function destroy(Theater $theater)
    {
        $theater->delete();
        return redirect()->route('theaters.create')->with('success','Deleted');
    }

    public function publicList()
    {
        $theaters = Theater::all();
        return view('user.theaters', compact('theaters'));
    }
}
