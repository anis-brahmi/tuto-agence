<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.property.index', [
            'properties' => Property::orderBy('created_at', 'desc')->paginate(25)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.property.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'rooms' => 'required|integer',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'garages' => 'required|integer',
            'area' => 'required|numeric',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status' => 'required|in:available,sold',
        ]);
        $property = new Property();
        $property->title = $request->title;
        $property->description = $request->description;
        $property->rooms = $request->rooms;
        $property->bedrooms = $request->bedrooms;
        $property->bathrooms = $request->bathrooms;
        $property->garages = $request->garages;
        $property->area = $request->area;
        $property->price = $request->price;
        $property->status = $request->status == 'available' ? true : false;

        if ($request->hasFile('image')) {
            $property->image = $request->file('image')->store('properties', 'public');
        }

        $property->save();

        return redirect()->route('admin.properties.index')->with('success', 'Property created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $property)
    {
        return view('admin.property.edit', ['property' => $property]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Property $property)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'rooms' => 'required|integer',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'garages' => 'required|integer',
            'area' => 'required|numeric',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'status' => 'required|in:available,sold',
        ]);

        $property->title = $request->title;
        $property->description = $request->description;
        $property->rooms = $request->rooms;
        $property->bedrooms = $request->bedrooms;
        $property->bathrooms = $request->bathrooms;
        $property->garages = $request->garages;
        $property->area = $request->area;
        $property->price = $request->price;
        $property->status = $request->status == 'available' ? true : false;

        if ($request->hasFile('image')) {
            // Delete the old image if exists
            if ($property->image) {
                Storage::delete('public/' . $property->image);
            }
            $property->image = $request->file('image')->store('properties', 'public');
        }

        $property->save();

        return redirect()->route('admin.properties.index')->with('success', 'Property updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {
        $property->delete();
        return redirect()->route('admin.properties.index')->with('success', 'Property deleted successfully!');
    }
}
