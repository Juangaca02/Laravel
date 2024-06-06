<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryRequest;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('country.listCountry');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('country.createCountry');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CountryRequest $request)
    {
        $request->validated();
        $country = new Country();
        $country->name = $request->nombre;
        $country->description = $request->descripcion;
        $country->save();
        return redirect()->route('createCountry')->with('success', 'Pais Creado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $country = Country::find($id);
        return view('country.editCountry', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CountryRequest $request)
    {
        $request->validated();
        $country = Country::find($request->id);

        $country->name = $request->nombre;
        $country->description = $request->descripcion;

        $country->save();

        return redirect()->route('editCountry', ['id' => $request->id])->with('success', 'Paies Actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        //
    }

    public function deleteCountry($id)
    {
        $Country = Country::find($id);
        if (!$Country) {
            return response()->json(['error' => 'Pais no encontrado'], 404);
        }
        $Country->delete();
        return response()->json(['success' => 'Pais eliminado correctamente']);
    }

    public function getCountryDetails($id)
    {
        $country = Country::find($id);

        return response()->json([
            'country' => $country,
        ]);
    }
}
