<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MinumanController extends Controller
{
    public function index()
    {
        // Fetch and return a list of minuman
        $minumans = \App\Models\Minuman::all();
        return view('minuman.index', compact('minumans'));
    }

    public function create()
    {
        // Show form to create a new minuman
        return view('minuman.create');
    }

    public function store(Request $request)
    {
        // Validate and store new minuman
        $request->validate([
            'nama_minuman' => 'required|string|max:255',
            'jenis_minuman' => 'required|in:alkohol,non-alkohol',
            'jumlah_minuman' => 'required|integer|min:1',
        ]);

        \App\Models\Minuman::create($request->all());

        return redirect()->route('minuman.index')->with('success', 'Minuman created successfully.');
    }

    public function show($id)
    {
        // Fetch and return a specific minuman
        $minuman = \App\Models\Minuman::findOrFail($id);
        return view('minuman.show', compact('minuman'));
    }

    public function edit($id)
    {
        
        // Show form to edit an existing minuman
        $minuman = \App\Models\Minuman::findOrFail($id);
        return view('minuman.edit', compact('minuman'));
    }

    public function update(Request $request, $id)
    {
        // Validate and update existing minuman
        $request->validate([
            'nama_minuman' => 'required|string|max:255',
            'jenis_minuman' => 'required|in:alkohol,non-alkohol',
            'jumlah_minuman' => 'required|integer|min:1',
        ]);

        $minuman = \App\Models\Minuman::findOrFail($id);
        $minuman->update($request->all());

        return redirect()->route('minuman.index')->with('success', 'Minuman updated successfully.');
    }

    public function destroy($id)
    {
        // Delete a specific minuman
        $minuman = \App\Models\Minuman::findOrFail($id);
        $minuman->delete();

        return redirect()->route('minuman.index')->with('success', 'Minuman deleted successfully.');
    }
}
