<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;

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
Route::get('/create', function(){
    return view('create-update-user');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::resource('carro',CarController::class);

Route::resource('user',UserController::class);

// Route::get('/carro',[CarController::class, 'index'])->nanme('carro.index');
