<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();
        return view('Type.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        return view('Type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required'
        ]);

        $type = new Type();
        $type->type = $request->type;
        $type->save();
        return redirect()->route('Type.index')->with('success', 'Type has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $type = Type::findorFail($id);
        return view('Type.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // TO DO
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'type' => 'required'
        ]);

        $type = Type::findOrFail($id);
        $type->type = $request->type;
        $type->save();
        return redirect()->route('Type.index')->with('success', 'Type has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // TO DO
    }
}
