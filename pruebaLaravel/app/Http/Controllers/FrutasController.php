<?php

namespace App\Http\Controllers;

use App\Models\Fruta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutasController extends Controller
{
    public function index()
    {
        //$frutas = DB::table('frutas')->get(); // Array de objetos con todos los campos
        //$frutas = DB::table('frutas')->where('temporada', '1')->get();
        //$frutas = DB::table('frutas')->select('temporada', '1')->get();
        $frutas = Fruta::all();
        return view("frutas.index")->with('frutas', $frutas);
    }

    public function anime($nom = "Kimetsu2", $nom2 = "jujutsu2")
    {
        return "Animes vistos: " . $nom . "," . $nom2;
    }
    public function deportes()
    {
        return "Vista de depotes";
    }

    public function guardarFruta(Request $request)
    {
        /*
            if ($request->input('nombre') == "Pino") {
                return redirect()->back()->withInput()->with('msg', 'Error nombre no añadido');
            }
            return $request->input('nombre');
        */
        $mensages = [
            'nombre.min' => 'El nombre debe tener al menos 3 caracteres',
            'descripcion.max' => 'La descripcion no puede tener de 10 caracteres'
        ];

        $request->validate([
            'nombre' => 'required|min:3|lowercase', //lowercase
            'descripcion' => 'required|max:10',
            'temp' => 'required'
        ], $mensages);
        return to_route('deportes');
    }

}
