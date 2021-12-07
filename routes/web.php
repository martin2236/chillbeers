<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RecomendacionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@index');


Route::middleware(['auth:sanctum', 'verified'])->group( function () {
    Route::resource('/producto', 'ProductoController')->names('producto');
    Route::resource('/recomendacion', 'RecomendacionController')->names('recomendacion');
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
});
