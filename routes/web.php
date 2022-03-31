<?php

use App\Http\Controllers\ProprieteController;
use App\Http\Controllers\TypeProprieteController;
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


//Route::get('/propriete', [ProprieteController::class,'index']);
//Route::get('/propriete', [ProprieteController::class,'index'])->name('propriete.index');
//Route::get('/propriete/create', [ProprieteController::class,'create']);
//Route::post('/propriete/store', [ProprieteController::class,'store']);
