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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');



Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');



Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    
	
	Route::get('/veiculos',  [App\Http\Controllers\VeiculoController::class, 'index']);
	Route::get('/veiculos/new',  [App\Http\Controllers\VeiculoController::class, 'new']);
	Route::post('/veiculos/add',  [App\Http\Controllers\VeiculoController::class, 'add']);
	Route::post('/veiculos/update/{id}',  [App\Http\Controllers\VeiculoController::class, 'update']);
    Route::get('/veiculos/{id}/edit',  [App\Http\Controllers\VeiculoController::class, 'edit']);
    Route::delete('/veiculos/delete/{id}',  [App\Http\Controllers\VeiculoController::class, 'delete']);

	Route::get('/transacao',  [App\Http\Controllers\TransacaoController::class, 'index']);
	Route::get('/transacao/new',  [App\Http\Controllers\TransacaoController::class, 'new']);
	Route::post('/transacao/add',  [App\Http\Controllers\TransacaoController::class, 'add']);
	Route::post('/transacao/update/{id}',  [App\Http\Controllers\TransacaoController::class, 'update']);
    Route::get('/transacao/{id}/edit',  [App\Http\Controllers\TransacaoController::class, 'edit']);
    Route::delete('/transacao/delete/{id}',  [App\Http\Controllers\TransacaoController::class, 'delete']);

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
