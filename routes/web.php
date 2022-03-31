<?php

use App\Http\Controllers\ProprieteController;
use App\Http\Controllers\TypeProprieteController;
use \App\Http\Controllers\CommuneController;
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


Route::get('/type', [TypeProprieteController::class,'index']);
Route::get('/type', [TypeProprieteController::class,'index'])->name('typepropriete.index');
Route::get('/type/create', [TypeProprieteController::class,'create'])->name('typepropriete.create');
Route::post('/type/store', [TypeProprieteController::class,'store'])->name('typepropriete.store');
Route::post('/type/edit/{id}','TypeProprieteController@edit')->name('typepropriete.edit');
Route::get('/type/edit/{id}','TypeProprieteController@destroy')->name('typepropriete.destroy');


Route::get('/propriete', [ProprieteController::class,'index']);
Route::get('/propriete', [ProprieteController::class,'index'])->name('propriete.index');
Route::get('/propriete/create', [ProprieteController::class,'create'])->name('propriete.create');
Route::post('/propriete/store', [ProprieteController::class,'store'])->name('propriete.store');
Route::post('/propriete/edit/{id}','ProprieteController@edit')->name('propriete.edit');
Route::get('/propriete/edit/{id}','ProprieteController@destroy')->name('propriete.destroy');



Route::get('/commune', [CommuneController::class,'index']);
Route::get('/commune', [CommuneController::class,'index'])->name('commune.index');
Route::get('/commune/create', [CommuneController::class,'create'])->name('commune.create');
Route::post('/commune/store', [CommuneController::class,'store'])->name('commune.store');
Route::post('/commune/edit/{id}','CommuneController@edit')->name('commune.edit');
Route::get('/commune/edit/{id}','CommuneController@destroy')->name('commune.destroy');
