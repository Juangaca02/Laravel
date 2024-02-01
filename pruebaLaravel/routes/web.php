<?php

use App\Http\Controllers\FrutasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route en la cual podemos pasar parametro y si no es asi, se nos ponen unos predeterminados
Route::get('/contacto/{nombre?}/{edad?}', function ($nombre = "Juanan", $edad = 20) {
    //return view("contact.contacto",compact("nombre","edad"));
    //return view('contacto')->with("nom",$nombre)->with("edad",$edad);
    return view('contact.contacto')->with("nombre", $nombre)->with("edad", $edad)->with("frutas", array('anime', 'depotes', 'Pinos', 'aguayos'));
    //return ("Hola, soy $nombre y tengo $edad años");
})->where([
            "nombre" => "[A-Za-z]+", //"^[A-Za-z]+$" Para que empieze y termine de dicha manera
            "edad" => "[0-9]+"
        ])->middleware('mayoredad:10,Pino')->name("contacto");
//middleware(['mayoredad','otro'])

Route::get('/vistamaster', function () {
    return view('layouts.vista_master');
});

Route::get('/vistacomponente', function () {
    return view('layouts.vista_componente');
});


Route::prefix('grupo')->group(function () {
    Route::get('/frutas', [FrutasController::class, 'index'])->name('frutas');
    Route::post('/frutas', [FrutasController::class, 'guardarFruta'])->name('guardarFruta');
    Route::get('/anime/{nom?}', [FrutasController::class, 'anime'])->name('anime');
    Route::get('/deportes', [FrutasController::class, 'deportes'])->name('deportes');
});



