<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\InputController;
// use App\Http\Controllers\TampilController;
use App\Http\Controllers\PendudukController;

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
Route::resource('penduduk', PendudukController::class);