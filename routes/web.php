<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\AboutVoly;
use App\Http\Controllers\Prestasi;
use App\Http\Controllers\Kelola;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('dashboard', Dashboard::class);
Route::resource('aboutVoly', AboutVoly::class);
Route::resource('prestasi', Prestasi::class);
Route::resource('kelola', Kelola::class);

