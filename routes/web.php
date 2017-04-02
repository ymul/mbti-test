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

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::resource('peserta', 'PesertaController');
Route::group(['middleware' => 'auth'], function () {
    Route::resource('kategori-soal', 'KategoriSoalController');
    Route::resource('soal', 'SoalsController');
    Route::get('soal-test', [
        'uses' => 'SoalTestController@soalTest',
        'middleware' => 'role:Peserta',
    ]);
    Route::get('soal-test/form/{id}', [
        'uses' => 'SoalTestController@formTest',
        'middleware' => 'role:Peserta',
    ]);
    Route::post('soal-test/form/{id}', [
        'uses' => 'SoalTestController@proccessTest',
        'middleware' => 'role:Peserta',
    ]);
});