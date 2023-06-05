<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
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
    return redirect(\route('cars.list'));
});
Route::get('/cars', [CarController::class, 'carsList'])->name("cars.list");
Route::get('/cars/new', [CarController::class, 'showCarForm'])->name('cars.form');
Route::post('/cars/add', [CarController::class, 'addCar'])->name('cars.add');
Route::get('/cars/edit/{id}', [CarController::class, 'showEditCarForm'])->name('cars.editForm');
Route::put('/cars/update/{id}', [CarController::class, 'updateCar'])->name('cars.update');
Route::delete('/cars/delete/{id}', [CarController::class, 'deleteCar'])->name('cars.delete');
