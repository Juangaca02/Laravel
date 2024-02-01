<?php

use App\Http\Controllers\CatalogController;
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
/*

Route::get('/', function () {
    return view('bienvenido');
});
*/
/*
Route::get('/', function () {
    return view('welcome');
})->middleware(['auth', 'verified'])
*/
Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/catalog', function () {
    return view('catalog/index');
})->middleware(['auth', 'verified'])->name('catalog');

Route::get('/catalog/create', function () {
    return view('catalog.create');
})->middleware(['auth', 'verified'])->name('create');

// Route en la cual podemos pasar parametro y si no es asi, se nos ponen unos predeterminados
Route::get('/catalog/show/{id}', function ($id = "1") {
    return view('catalog.show')->with("id", $id);
})->name("show");

Route::get('/catalog/edit/{id}', function ($id = "1") {
    return view('catalog.edit')->with("id", $id);
})->name("edit");

Route::prefix('catalog')->group(function () {
    Route::get('/', [CatalogController::class, 'index'])->middleware(['auth', 'verified'])->name('catalog');
    Route::get('/create', [CatalogController::class, 'create'])->middleware(['auth', 'verified'])->name('create');
    Route::post('/show/{id}', [CatalogController::class, 'show'])->middleware(['auth', 'verified'])->name('show');
    Route::post('/edit/{id}', [CatalogController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit');
});

Route::get('/layouts/app', function () {
    return view('layouts.app');
})->name("app");

/*
Route::prefix('/catalog')->group(function () {
    Route::get('/index')->name('catalog');
});
*/
/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';
