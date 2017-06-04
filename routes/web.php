<?php

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

Route::get('home', function () {
    $tampildata = ['bandung','pasar'];
    return view('home', compact( 'trainer'));
});

Route::get('peta', 'PetaController@index');
Route::post('petas', 'PetaController@store');

Route::get('pegawais/{id}', 'PetaController@show');

Route::get('peta/create', 'PetaController@create');

Route::get('petas/{id}/pegawais', function ($id) {
    $peta = \App\Peta::find($id);
    $pegawais = $peta->pegawais;
    return $pegawais;
});

Route::post('peta/{id}/pegawai','PetaController@storePegawai');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
