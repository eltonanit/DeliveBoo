<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\RestaurantController;
use App\Http\Controllers\Admin\DishController;
use Illuminate\Support\Facades\Route;

// Rotta principale
Route::get('/', function () {
    return view('welcome');
});

// Rotta per il dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rotte protette per il profilo utente
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Rotte per il pannello admin
Route::middleware(['auth', 'verified'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [RestaurantController::class, 'index'])->name('dashboard'); // Dashboard Admin

    // Rotte per la gestione dei ristoranti
    Route::resource('restaurants', RestaurantController::class);

    // Rotte per la gestione dei piatti
    Route::resource('restaurants.dishes', DishController::class)->except(['index']); // Escludiamo l'indice se non necessario

    Route::resource('dishes', DishController::class);
});

Route::get('/restaurants/filter', [RestaurantController::class, 'filterByTypes'])->name('restaurants.filter');

// Includi le rotte di autenticazione
require __DIR__ . '/auth.php';
