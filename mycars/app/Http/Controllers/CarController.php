<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Car;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $User = User::find(Auth::id());
        $myCars = $User->mycars()->get();
        return view('car.index')->with('myCars', $myCars);
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

            $request->file('foto')->storeAs('public/img_car', $nombreFoto);

            return to_route('car.index')->with('statusCar', 'Coche Insertado Correctamente');

        } catch (QueryException $ex) {

            return to_route('car.index')->with('errorCar', 'Error en la Base de Datos');

        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        $ruta = 'storage/img_car/';
        return view('car.show')->with('mycar', $car)->with('ruta', $ruta);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        $ruta = 'storage/img_car/';
        return view('car.edit')->with('mycar', $car)->with('ruta', $ruta);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {


        $request->validate([
            'matricula' => 'required|unique:cars,matricula,' . $car->id . ',deleted_at,NULL',
            'marca' => 'required',
            'modelo' => 'required',
            'anio' => 'required|integer',
            'fecha_ultima_revision' => 'required|date',
            'foto' => 'image',
            'precio' => 'required|numeric',
        ]);

        try {
            $car->matricula = $request->matricula;
            $car->marca = $request->marca;
            $car->modelo = $request->modelo;
            $car->anio = $request->anio;
            $car->fecha_ultima_revision = $request->fecha_ultima_revision;
            $car->precio = $request->precio;

            if (is_uploaded_file($request->file('foto'))) {
                //Eliminamos la foto que tenemos en la base de datos para luego subir otra
                Storage::delete('public/img_car/' . $car->foto);
                $nombreFoto = time() . '-' . $request->file('foto')->getClientOriginalName();
                $car->foto = $nombreFoto;
                $request->file('foto')->storeAs('public/img_car', $nombreFoto);
            }
            $car->save();

            return to_route('car.index')->with('statusCar', 'Coche Editado Correctamente');
        } catch (QueryException $ex) {
            return to_route('car.index')->with('errorCar', 'Error en la Base de Datos');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        try {
            $car->delete();
            return to_route('car.index')->with('statusCar', 'Coche Borrado Correctamente');
        } catch (QueryException $ex) {
            return to_route('car.index')->with('errorCar', 'Error en la Base de Datos');
        }
    }
}
