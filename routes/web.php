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
    Route::get('/penduduk/print_all', 'PendudukController@print_all')->name('penduduk.print_all');
    Route::resource('penduduk', 'PendudukController');
    //kartu keluarga
    Route::resource('kartu-keluarga', 'KartuKeluargaController');
    Route::get('/kartu-keluarga/{id_kk}/create_anggota', 'KartuKeluargaController@create_anggota')->name('create_anggota');
    Route::post('/kartu-keluarga/{id_kk}/anggota/store_anggota', 'KartuKeluargaController@store_anggota')->name('store_anggota');
    Route::get('/kartu-keluarga/{id_kk}/anggota/{id_detail_kk}/edit_anggota', 'KartuKeluargaController@edit_anggota')->name('edit_anggota');
    Route::patch('/kartu-keluarga/{id_kk}/anggota/{id_detail_kk}', 'KartuKeluargaController@update_anggota')->name('update_anggota');
    Route::delete('/kartu-keluarga/{id_kk}/anggota/{id_detail_kk}', 'KartuKeluargaController@destroy_anggota')->name('destroy_anggota');
    //kelahiran
    Route::get('/kelahiran/getayah', 'KelahiranController@getAyah');
    Route::get('/kelahiran/getibu', 'KelahiranController@getIbu');
    Route::get('/kelahiran/{kelahiran}/print_kelahiran', 'KelahiranController@print_kelahiran')->name('kelahiran.print_kelahiran');
    Route::resource('kelahiran', 'KelahiranController');
    //kematian
    Route::get('/kematian/getpenduduk', 'KematianController@getPenduduk');
    Route::get('/kematian/getayah', 'KematianController@getAyah');
    Route::get('/kematian/getibu', 'KematianController@getIbu');
    Route::get('/kematian/{kematian}/print_kematian', 'KematianController@print_kematian')->name('kematian.print_kematian');
    Route::resource('kematian', 'KematianController');
    //pindah datang
    Route::resource('pindah-datang', 'PindahDatangController');
    //pindah pergi
    Route::get('/pindah-pergi/getkk', 'PindahPergiController@getKK');
    Route::resource('pindah-pergi', 'PindahPergiController');
    //user
    Route::resource('user', 'UserController');
    Route::get('/update-status/{id}', 'UserController@update_status');
    Route::patch('/user/{id}/reset-password', 'UserController@reset_password')->name('user.reset-password');
});
