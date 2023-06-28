<?php

use App\Http\Controllers\productoController;
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


// rutas producto



Route::get('producto/create',[productoController::class, 'create']);
Route::post('producto',[productoController::class,'store'])->name('producto.store');