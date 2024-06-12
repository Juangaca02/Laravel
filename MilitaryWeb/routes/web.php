<?php

use App\Http\Controllers\ArmyController;
use App\Http\Controllers\CountryController;
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

// Ruta para redirigir a la vista de inicio cuando se ingresa a una ruta que no existe
Route::fallback(function () {
    return redirect()->route('home');
});

// Middleware para usuarios logueados pero no verificados
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile/photo', [ProfileController::class, 'updatePhoto'])->name('profile.updatePhoto');
});

// Middleware para usuarios logueados y verificados
Route::middleware(['auth', 'verifiedUser'])->group(function () {
    // Seguir Misiones
    Route::post('/missions/{id}/follow', [MissionController::class, 'follow'])->name('missions.follow');
    Route::post('/missions/{id}/unfollow', [MissionController::class, 'unfollow'])->name('missions.unfollow');
    Route::get('/missions/followed', [MissionController::class, 'followedMissions'])->name('missions.followed');
    Route::get('/missions/{id}/followers', [MissionController::class, 'getFollowers']);

});

// Middleware para usuarios con rango mayor a 5 pero inferior a 11
Route::middleware(['auth', 'verifiedUser', 'range.more5'])->group(function () {
    Route::get('/listSoldier', [ArmyController::class, 'index'])->name('listSoldier');
    Route::get('/getUserDetails/{id}', [UserController::class, 'getUserDetails']);
    Route::post('/verificarUser/{id}', [UserController::class, 'verificarUser'])->name('verificarUser');
});

// Middleware para usuarios con rango mayor a 11  ---->>> Añadir validacion de Correo
Route::middleware(['auth', 'verifiedUser', 'range.more11'])->group(function () {

    // Misiones
    Route::get('/listMissions', [MissionController::class, 'index'])->name('listMissions');
    Route::get('/getMissionsDetails/{id}', [MissionController::class, 'getMissionsDetails']);
    Route::get('/editMission/{id}', [MissionController::class, 'edit'])->name('editMission');
    Route::get('/createMission', [MissionController::class, 'create'])->name('createMission');
    Route::post('/storeMission', [MissionController::class, 'store'])->name('storeMission');
    Route::patch('/updateMission', [MissionController::class, 'update'])->name('updateMission');
    Route::delete('/deleteMission/{id}', [MissionController::class, 'deleteMission'])->name('deleteMission');

    // Usuarios
    Route::get('/editUser/{id}', [UserController::class, 'edit'])->name('editUser');
    Route::patch('/updateUser', [UserController::class, 'update'])->name('updateUser');
    Route::delete('/deleteUser/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');
    // Route::get('/listSoldier', [ArmyController::class, 'index'])->name('listSoldier');
    // Route::get('/getUserDetails/{id}', [UserController::class, 'getUserDetails']);
    // Route::post('/verificarUser/{id}', [UserController::class, 'verificarUser'])->name('verificarUser');

    //Destinos
    Route::get('/listDestinations', [DestinationController::class, 'index'])->name('listDestinations');
    Route::get('/getDestinationsDetails/{id}', [DestinationController::class, 'getDestinationsDetails']);
    Route::get('/editDestination/{id}', [DestinationController::class, 'edit'])->name('editDestination');
    Route::get('/createDestination', [DestinationController::class, 'create'])->name('createDestination');
    Route::post('/storeDestination', [DestinationController::class, 'store'])->name('storeDestination');
    Route::patch('/updateDestination', [DestinationController::class, 'update'])->name('updateDestination');
    Route::delete('/deleteDestination/{id}', [DestinationController::class, 'deleteDestination'])->name('deleteDestination');

    //Paises
    Route::get('/listCountries', [CountryController::class, 'index'])->name('listCountries');
    Route::get('/getCountryDetails/{id}', [CountryController::class, 'getCountryDetails']);
    Route::get('/editCountry/{id}', [CountryController::class, 'edit'])->name('editCountry');
    Route::get('/createCountry', [CountryController::class, 'create'])->name('createCountry');
    Route::post('/storeCountry', [CountryController::class, 'store'])->name('storeCountry');
    Route::patch('/updateCountry', [CountryController::class, 'update'])->name('updateCountry');
    Route::delete('/deleteCountry/{id}', [CountryController::class, 'deleteCountry'])->name('deleteCountry');
});

// Middleware para Admins
Route::middleware(['admin', 'auth', 'verifiedUser'])->group(function () {
    Route::get('/listSoldierAdmin', [ArmyController::class, 'indexAdmin'])->name('listSoldierAdmin');
});

Route::get('/prueba', function () {
    return view('');
})->name('prueba');

require __DIR__ . '/auth.php';