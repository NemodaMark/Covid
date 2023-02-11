<?php

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

Route::get('/',"\\App\\Http\\Controllers\\CovidController@fooldal")->name('covid.fooldal');
Route::post('/europa',"\\App\\Http\\Controllers\\CovidController@europa")->name('covid.europa');
Route::post('/vilag',"\\App\\Http\\Controllers\\CovidController@vilag")->name('covid.vilag');

