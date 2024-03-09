<?php

use App\Http\Controllers\BetController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
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
Route::get('/', [HomeController::class, 'show'])->name('home');

// Route::get('/', function () {
//     return view('home');
//})->name('home');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/userProfile', function () {
    return view('userProfile.index');
})->middleware(['auth', 'verified'])->name('userProfile');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/photo', [ProfileController::class, 'updatePhoto'])->name('profile.updatePhoto');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('bet', BetController::class)->middleware(['auth', 'verified']);
Route::resource('transaction', TransactionController::class)->middleware(['auth', 'verified']);

Route::get('/listUsers', function () {
    return view('listUsers.index');
})->middleware(['auth', 'verified', 'admin'])->name('listUsers');

require __DIR__ . '/auth.php';
