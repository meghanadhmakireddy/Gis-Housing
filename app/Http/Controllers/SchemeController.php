<?php

namespace App\Http\Controllers;

use App\Models\Scheme;
use Illuminate\Http\Request;

class SchemeController extends Controller
{
    // Show all schemes
    public function index()
    {
        $schemes = Scheme::all();
        return view('schemes.index', compact('schemes'));
    }

    // Show create form
    public function create()
    {
        return view('schemes.create');
    }

    // Store new scheme
    public function store(Request $request)
    {
        $request->validate([
            'owner_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'helping_people' => 'nullable|integer',
            'fund_usage' => 'nullable|numeric',
        ]);

        Scheme::create($request->only(
            'owner_name',
            'description',
            'latitude',
            'longitude',
            'helping_people',
            'fund_usage'
        ));

        return redirect()->route('schemes.index')->with('success', 'Housing details added successfully!');
    }

    // Show edit form
    public function edit(Scheme $scheme)
    {
        return view('schemes.edit', compact('scheme'));
    }

    // Update existing scheme
    public function update(Request $request, Scheme $scheme)
    {
        $request->validate([
            'owner_name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'helping_people' => 'nullable|integer',
            'fund_usage' => 'nullable|numeric',
        ]);

        $scheme->update($request->only(
            'owner_name',
            'description',
            'latitude',
            'longitude',
            'helping_people',
            'fund_usage'
        ));

        return redirect()->route('schemes.index')->with('success', 'Housing details updated successfully!');
    }

    // Delete a scheme
    public function destroy(Scheme $scheme)
    {
        $scheme->delete();
        return redirect()->route('schemes.index')->with('success', 'Housing details deleted successfully!');
    }

    // Show single map
    public function showMap($id)
    {
        $scheme = Scheme::findOrFail($id);
        return view('schemes.map', compact('scheme'));
    }
}
