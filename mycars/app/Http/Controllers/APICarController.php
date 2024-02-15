<?php

namespace App\Http\Controllers;

use App\Http\Requests\APICarRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class APICarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allCar = Car::all();
        return response()->json([
            'status' => true,
            'cars' => $allCar
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(APICarRequest $request)
    {

        $car = Car::create($request->all());
        return response()->json([
            'status' => true,
            'cars' => $car,
            'message' => 'Car created successfully'
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $oneCar = Car::find($id);
        return response()->json([
            'status' => true,
            'cars' => $oneCar
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $oneCar = Car::find($id);
        $oneCar->update($request->all());
        return response()->json([
            'status' => true,
            'cars' => $oneCar,
            'message' => 'Car created successfully'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $oneCar = Car::find($id);
        $oneCar->delete();
    }
}
