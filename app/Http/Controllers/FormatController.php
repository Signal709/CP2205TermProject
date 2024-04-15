<?php

namespace App\Http\Controllers;

use App\Models\Format;
use Illuminate\Http\Request;

class FormatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $format = Format::all();
        return view('Format.index', compact('format'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // TODO
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'format' => 'required'
        ]);

        $format = new Format;
        $format->format = $request->format;
        $format->save();
        return redirect()->route('Format.index')->with('success', 'Format has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $format = Format::findorFail($id);
        return view('Format.show', compact('format'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // TODO
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'format' => 'required'
        ]);

        $format = Format::findOrFail($id);
        $format->format = $request->format;
        $format->save();
        return redirect()->route('Format.index')->with('success', 'Format has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // TODO
    }
}
