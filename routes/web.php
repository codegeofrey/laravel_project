<?php

use App\Http\Controllers\EmpleadoController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('auth.login');
});

//Route::get('/',[EmpleadoController::class,'create']);

route::resource('empleados',EmpleadoController::class)->middleware('auth');

Auth::routes();

Route::resource('empleados',EmpleadoController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::group(['Middleware' =>'auth'],function(){
    route::get('/',[EmpleadoController::class, 'index'])->name('home');
});