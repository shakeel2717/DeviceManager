<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.country.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.country.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'flag' => 'required|url',
            'description' => 'required|string',
        ]);

        // storing this in the database
        $country = new Country();
        $country->name = $validatedData['name'];
        $country->flag = $validatedData['flag'];
        $country->description = $validatedData['description'];
        $country->save();

        return redirect()->route('admin.countries.index')->with('success', 'Country Added Successfully');
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
    public function edit(Country $country)
    {
        return view('admin.country.edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Country $country)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'flag' => 'required|url',
            'description' => 'required|string',
        ]);

        // storing this in the database
        $country->name = $validatedData['name'];
        $country->flag = $validatedData['flag'];
        $country->description = $validatedData['description'];
        $country->save();

        return redirect()->route('admin.countries.index')->with('success', 'Country Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
