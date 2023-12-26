<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ManufacturerController;


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

// Diplay all manufacturers
Route::get('/manufacturers', [ManufacturerController::class, 'index'])->name('manufacturers.index');

// Diplay all cars
Route::get('/cars', [CarController::class, 'index'])->name('cars.index');

// Create new car 
Route::post('/cars', [CarController::class, 'store'])->name('cars.store');

// Diplay create car form
Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');

// Show car details
Route::get('/cars/{id}', [CarController::class, 'show'])->name('cars.show');

Route::get('/cars/{id}/edit', [CarController::class, 'edit'])->name('cars.edit');

Route::put('/cars/{id}', [CarController::class, 'update'])->name('cars.update');

// Delete
Route::delete('/cars/{id}', [CarController::class, 'destroy'])->name('cars.destroy');
