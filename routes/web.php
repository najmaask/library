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

Route::resource('anggota','MAnggota');
Route::resource('buku','MBuku');
Route::resource('kembali','MKembali');
Route::resource('pinjam','MPinjam');
Route::resource('petugas','MPetugas');
Route::resource('santri','MSantri');

//pemnggilan antara view ke view
Route::get('/', function () {
    return view('home');
});
Route::get('anggota',function(){
	return view('anggota/anggota');
});
Route::get('buku',function(){
	return view('buku/buku');
});
Route::get('petugas',function(){
	return view('petugas/petugas');
});
Route::get('pinjam',function(){
	return view('pinjam/pinjam');
});
Route::get('kembali',function(){
	return view('kembali/kembali');
});
Route::get('petugas',function(){
	return view('santri/santri');
});
//Route::get('dataAnggota',function(){
//	return view('anggota/dataAnggota');
//});
//Route::get('dataBuku',function(){
//	return view('buku/dataBuku');
//});
//Route::get('dataPetugas',function(){
//	return view('petugas/dataPetugas');
//});

Route::get('anggota','MAnggotaController@index');
Route::get('tambah','MAnggotaController@create');
Route::post('simpan','MAnggotaController@store');
Route::get('editanggota{id}','MAnggotaController@edit');
Route::post('updateanggota{id}','MAnggotaController@update');
Route::get('deleteanggota{id}','MAnggotaController@destroy');

Route::get('buku','MBukuController@index');
Route::get('petugas','MPetugasController@index');
Route::get('pinjam','MPinjamController@index');
Route::get('kembali','MKembaliController@index');
Route::get('santri','MSantriController@index');