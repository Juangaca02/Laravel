<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Mission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener los usuarios que están dentro del rango especificado (excluyendo los límites) y pertenecen a la misma army
        $usersInRange = User::where('army_id', Auth::user()->army_id)
            ->where('range_id', '>', 9)
            ->where('range_id', '<', Auth::user()->range_id)
            ->get();

        // Obtener todos los destinos
        $destination = Destination::all();

        // Devolver la vista con los datos necesarios
        return view("createMissions")
            ->with('destination', $destination)
            ->with('usersInRange', $usersInRange);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Mission $mission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mission $mission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mission $mission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mission $mission)
    {
        //
    }
}
