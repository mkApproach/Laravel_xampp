<?php

//use App\Http\Controllers;
//use App\Http\Controllers\meController;
//use Illuminate\Routing\Router;
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
Auth::routes();

Route::get('/', [App\Http\Controllers\HelloController::class, 'index']);

//Route::get('/hello', [App\Http\Controllers\HelloController::class, 'index']);
//Route::get('/', [App\Http\Controllers\MeController::class, 'index']);
/*
Route::get('/', function () {
   return view('common');
});*/