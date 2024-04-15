<?php

namespace App\Http\Controllers;

use App\Models\DVD;
use Illuminate\Http\Request;

class DVDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dvd = DVD::all();
        return view('DVDs.index', compact('dvds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // TODO need to add the all for format, type, genre, and location
        // $ = ::all();
        // return view('DVDs.create', compact(''));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'format' => 'required',
            'type' => 'required',
            'location' => 'required',
            'name' => 'required',
            'image' => 'required',
            'offical_website' => 'required',
            'imdb' => 'required',
            'rating' => 'required',
            'disc' => 'required'
        ]);

        $dvd = new DVD;
        $dvd->format = $request->format;
        $dvd->type = $request->type;
        $dvd->location = $request->location;
        $dvd->name = $request->name;
        $dvd->image = $request->image;
        $dvd->offical_website = $request->offical_website;
        $dvd->imdb = $request->imdb;
        $dvd->rating = $request->rating;
        $dvd->disc = $request->disc;
        $dvd->save();
        return redirect()->route('DVDs.index')->with('success', 'DVD has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dvd = DVD::findorFail($id);
        return view('DVDs.show', compact('dvds'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dvd = DVD::findOrFail($id);
        // TODO need to add the all for format, type, genre, and location
        // $ = ::all();
        // return view('DVDs.edit', compact('dvd', ''));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'format' => 'required',
            'type' => 'required',
            'location' => 'required',
            'name' => 'required',
            'image' => 'required',
            'offical_website' => 'required',
            'imdb' => 'required',
            'rating' => 'required',
            'disc' => 'required'
        ]);

        $dvd = DVD::findOrFail($id);
        $dvd->format = $request->format;
        $dvd->type = $request->type;
        $dvd->location = $request->location;
        $dvd->name = $request->name;
        $dvd->image = $request->image;
        $dvd->offical_website = $request->offical_website;
        $dvd->imdb = $request->imdb;
        $dvd->rating = $request->rating;
        $dvd->disc = $request->disc;
        $dvd->save();
        return redirect()->route('DVDs.index')->with('success', 'DVD has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // TODO
    }
}
