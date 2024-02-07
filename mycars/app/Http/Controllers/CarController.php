<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Car;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('car.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarRequest $request)
    {
        $request->validated();
        try {
            $newcar = new Car();
            $newcar->matricula = $request->matricula;
            $newcar->marca = $request->marca;
            $newcar->modelo = $request->modelo;
            $newcar->anio = $request->anio;
            $newcar->fecha_ultima_revision = $request->fecha_ultima_revision;
            $newcar->precio = $request->precio;
            $newcar->user_id = Auth::id();

            $nombreFoto = time() . '-' . $request->file('foto')->getClientOriginalName();
            $newcar->foto = $nombreFoto;
            $newcar->save();
        } catch (QueryException $ex) {

        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }
}
