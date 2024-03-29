<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profesor = User::find(Auth::id());
        $alumnos = $profesor->estudiantes()->paginate(2);;
        //$alumnos = $profesor->estudiantes()->where('asignatura','Romance')->paginate(1);
        return view("profesor.index")->with('alumnos',$alumnos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("profesor.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alum = new Student();
        $alum->dni=$request->dni;
        $alum->nombre=$request->nombre;
        $alum->apellidos=$request->apellidos;
        $alum->email=$request->email;
        $alum->curso=$request->curso;
        $alum->save();
        $alum->profesores()->attach(Auth::id(),['asignatura'=>$request->asignatura,'nota'=>$request->nota]);


        return to_route('prof.index');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
