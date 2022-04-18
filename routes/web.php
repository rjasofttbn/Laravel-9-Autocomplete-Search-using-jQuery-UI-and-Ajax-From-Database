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


Route::get('/search', 'App\Http\Controllers\AutoCompleteController@index');
Route::get('autocomplete', 'App\Http\Controllers\AutoCompleteController@autocomplete');

//Route::get('search', [AutoCompleteController::class, 'index'])->name('search');
//Route::get('autocomplete', [AutoCompleteController::class, 'autocomplete'])->name('autocomplete');

