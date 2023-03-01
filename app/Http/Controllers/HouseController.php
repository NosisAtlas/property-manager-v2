<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Http\Requests\StoreHouseRequest;
use App\Http\Requests\UpdateHouseRequest;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $houses = House::where("status", "in progress")->get();
        return view('houses.index', ['houses' => $houses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('house.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $file = $request->file('image');
        $fileName = Str::random(50) . "." . $file->getClientOriginalExtension();
        $file->storeAS('public', $fileName);

        House::create([
          'adress' => $request->adress,
          'image' => $fileName,
          'price' => $request->price,
          'status' => $request->status,
      ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(House $house)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(House $house)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, House $house)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(House $house)
    {
        //
    }
}
