<?php

use App\Http\Controllers\ArmyController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
})->name('home');

// Ruta para mostrar soldados verificados en los ejercitos y no verificados que pertenecen al ejercito del usuario
// Route::get('/listSoldier', function () {
//     return view('listuserarmy');
// })->middleware(['auth', 'verified'])->name('listSoldier');
// Tenia puesto range.more16 en la lista de soldados


// Middleware para usuarios logueados
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile/photo', [ProfileController::class, 'updatePhoto'])->name('profile.updatePhoto');
});

// Middleware para usuarios logueados y verificados    ---->>> Añadir validacion de Correo
Route::middleware(['auth', 'verifiedUser'])->group(function () {
    // Ejercitos
    Route::get('/listSoldier', [ArmyController::class, 'index'])->name('listSoldier');
    // Misiones
    Route::get('/listMissions', [MissionController::class, 'index'])->name('listMissions');
    Route::get('/getMissionsDetails/{id}', [MissionController::class, 'getMissionsDetails']);
    Route::get('/editMission/{id}', [MissionController::class, 'edit'])->name('editMission');
    Route::patch('/updateMission', [MissionController::class, 'update'])->name('updateMission');
    Route::get('/createMission', [MissionController::class, 'create'])->name('createMission');
    Route::post('/storeMission', [MissionController::class, 'store'])->name('storeMission');
    Route::delete('/deleteMission/{id}', [MissionController::class, 'deleteMission'])->name('deleteMission');
    // Usuarios
    Route::get('/getUserDetails/{id}', [UserController::class, 'getUserDetails']);
    Route::get('/editUser/{id}', [UserController::class, 'edit'])->name('editUser');
    Route::patch('/updateUser', [UserController::class, 'update'])->name('updateUser');
    Route::post('/verificarUser/{id}', [UserController::class, 'verificarUser'])->name('verificarUser');
    Route::delete('/deleteUser/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');
    //Destinos
    Route::get('/listDestinations', [DestinationController::class, 'index'])->name('listDestinations');
    Route::get('/getDestinationsDetails/{id}', [DestinationController::class, 'getDestinationsDetails']);
    
    Route::get('/createDestination', [DestinationController::class, 'create'])->name('createDestination');
    Route::delete('/deleteDestination/{id}', [DestinationController::class, 'deleteDestination'])->name('deleteDestination');
    Route::get('/editDestination/{id}', [DestinationController::class, 'edit'])->name('editDestination');
    Route::post('/storeDestination', [DestinationController::class, 'store'])->name('storeDestination');
    Route::patch('/updateDestination', [DestinationController::class, 'update'])->name('updateDestination');

});

// Middleware para Admins
Route::middleware(['admin', 'auth', 'verifiedUser'])->group(function () {
    Route::get('/listSoldierAdmin', [ArmyController::class, 'indexAdmin'])->name('listSoldierAdmin');
});

Route::get('/prueba', function () {
    return view('');
})->name('prueba');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__ . '/auth.php';



