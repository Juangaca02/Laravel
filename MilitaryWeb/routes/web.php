<?php

use App\Http\Controllers\MissionController;
use App\Http\Controllers\ProfileController;
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
    return view('index');
})->name('home');

Route::get('/home', function () {
    return view('index');
});

// Ruta para mostrar soldados verificados en los ejercitos y no verificados que pertenecen al ejercito del usuario
Route::get('/listSoldier', function () {
    return view('listuserarmy');
})->middleware(['range.more16','auth', 'verified'])->name('listSoldier');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Nuevo
    Route::post('/verificarUser/{id}', [ProfileController::class, 'verificarUser'])->name('verificarUser');
    Route::delete('/deleteUser/{id}', [ProfileController::class, 'deleteUser'])->name('deleteUser');
});


Route::get('/prueba', function () {
    return view('createMissions');
});







Route::get('/createMission', function () {
    return view('createMission');
})->name('createMission');

Route::get('/createMission', function () {
    return view('mission.create');
})->middleware(['auth', 'verified'])->name('createMission');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__ . '/auth.php';
