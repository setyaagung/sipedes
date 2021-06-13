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

Auth::routes([
    'register' => false,
    'reset' => false
]);

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    //penduduk
    Route::resource('penduduk', 'PendudukController');
    //kartu keluarga
    Route::resource('kartu-keluarga', 'KartuKeluargaController');
    //kelahiran
    Route::get('/kelahiran/getayah', 'KelahiranController@getAyah');
    Route::get('/kelahiran/getibu', 'KelahiranController@getIbu');
    Route::resource('kelahiran', 'KelahiranController');
    //user
    Route::resource('user', 'UserController');
    Route::get('/update-status/{id}', 'UserController@update_status');
    Route::patch('/user/{id}/reset-password', 'UserController@reset_password')->name('user.reset-password');
});
