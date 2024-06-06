<?php

namespace App\Http\Controllers;

use App\Http\Requests\DestinationRequest;
use App\Models\Country;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('destination.listDestination');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $countries = Country::all();
        return view('destination.createDestinations', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DestinationRequest $request)
    {
        $request->validated();
        $destination = new Destination();
        $destination->name = $request->nombre;
        $destination->country_id = $request->identificardor_pais;
        $destination->description = $request->descripcion;
        $destination->save();
        return redirect()->route('destination.createDestination')->with('success', 'Destino Creado Correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Destination $destination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $destination = Destination::find($id);

        $countries = Country::all();


        return view('destination.editDestination', compact('destination', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DestinationRequest $request)
    {
        $request->validated();
        $destination = Destination::find($request->id);
        
        $destination->name = $request->nombre;
        $destination->country_id = $request->identificardor_pais;
        $destination->description = $request->descripcion;

        $destination->save();

        return redirect()->route('editDestination', ['id' => $request->id])->with('success', 'Destino Actualizado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Destination $destination)
    {
        //
    }

    public function deleteDestination($id)
    {
        $Destination = Destination::find($id);
        if (!$Destination) {
            return response()->json(['error' => 'Destination no encontrado'], 404);
        }
        $Destination->delete();
        return response()->json(['success' => 'Destination eliminado correctamente']);
    }

    public function getDestinationsDetails($id)
    {
        $destination = Destination::with(['country'])->find($id);
        $countryName = $destination->country->name;
        $countryDescription = $destination->country->description;

        return response()->json([
            'destination' => $destination,
            'countryName' => $countryName,
            'countryDescription'=> $countryDescription
        ]);
    }
}
