<?php

namespace App\Http\Controllers;

use App\Models\Army;
use Illuminate\Http\Request;

class ArmyController extends Controller
{
    /**
     * Vista de los soldados pertenecientes a un ejercito
     */
    public function index()
    {
        return view('listuserarmy');
    }

    /**
     * Vista de todos los soldados
     */
    public function indexAdmin()
    {
        return view('listSoldierAdmin');
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
    public function show(Army $army)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Army $army)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Army $army)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Army $army)
    {
        //
    }
}
