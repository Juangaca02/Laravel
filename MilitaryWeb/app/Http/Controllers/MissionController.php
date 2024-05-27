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
        $loggedInUser = Auth::user();
        $loggedInUserArmyId = $loggedInUser->army_id;
        $loggedInUserRangeId = $loggedInUser->range_id;

        // Depuración: verificar los valores del usuario autenticado
        $usersInRange = User::where('army_id', $loggedInUserArmyId)
            ->whereBetween('range_id', [$loggedInUserRangeId, 9])
            ->get();

        // Depuración: verificar los resultados de la consulta
        // dd($usersInRange);
        // Obtener los usuarios que están dentro del rango especificado y pertenecen a la misma army
        $usersInRange = User::where('army_id', Auth::user()->army_id)
            ->whereBetween('range_id', [Auth::user()->range_id, 9]);

        // dd($usersInRange);
        $destination = Destination::all();

        return view("createMissions", compact('destination', 'usersInRange'));
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
