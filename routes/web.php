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


Route::get('/', 'Pos\PosController@index');
// Index
Route::get('/index', 'Pos\PosController@index');
// akun create
Route::get('/signup', 'Pos\PosController@signup');
// akun success_register
Route::get('/success_register', 'Login\LoginController@success_register');
// TES SMS
Route::get('/sms', 'Login\LoginController@testapi');

// akun login
Route::get('/login', 'Login\LoginController@show');
// dashboard
Route::get('/dashboard', 'Pos\PosController@dashboard');
// create master
Route::get('/master', 'Pos\PosController@master');
// list trans_master
Route::get('/trans_master', 'Pos\PosController@trans_master');
// list user_master
Route::get('/user_master', 'Pos\PosController@user_master');

// AUTOCOMPLETE  
Route::get('nama_barang','Crud\Master_pembelianController@nama_barang'); 
Route::get('kode_barang','Crud\Master_pembelianController@kode_barang'); 

// USER MANAGEMENT
// view user management
Route::get('/user_management', 'Crud\User_managementController@list_user_management');
// add user management
Route::get('/user_management/tambah', 'Crud\User_managementController@tambah_user_management');
// input user management
Route::get('/user_management/{id}/edit', 'Crud\User_managementController@edit_user_management');
// gantipas user management
Route::get('/user_management/{id}/gantipas', 'Crud\User_managementController@gantipas_user_management');
// crud management
Route::post('/user_management/tambah','Crud\User_managementController@insert'); 
Route::put('/user_management/{id}/edit','Crud\User_managementController@update'); 
Route::put('/user_management/{id}/gantipas','Crud\User_managementController@ubah_password'); 
Route::delete('/user_management/{id}/delete','Crud\User_managementController@delete');

// USER GROUP
// view user group
Route::get('/user_group', 'Crud\User_groupController@list_user_group');
// add user group
Route::get('/user_group/tambah', 'Crud\User_groupController@tambah_user_group');
// input user group
Route::get('/user_group/{id}/edit', 'Crud\User_groupController@edit_user_group');
// crud GROUP
Route::post('/user_group/tambah','Crud\User_groupController@insert'); 
Route::put('/user_group/{id}/edit','Crud\User_groupController@update'); 
Route::delete('/user_group/{id}/delete','Crud\User_groupController@delete');

// list barang
Route::get('/barang', 'Crud\Master_barangController@list_barang');
// list outlet
Route::get('/outlet', 'Crud\Master_outletController@list_outlet');
// list pegawai
Route::get('/pegawai', 'Crud\Master_pegawaiController@list_pegawai');
// list pelanggan
Route::get('/pelanggan', 'Crud\Master_pelangganController@list_pelanggan');
// list pembelian
Route::get('/pembelian', 'Crud\Master_pembelianController@list_pembelian');
// list pembelian
Route::get('/tes_pembelian', 'Crud\Master_pembelianController@list_pembelian_test');
// list penjualan
Route::get('/penjualan', 'Crud\Master_penjualanController@list_penjualan');
// list pemesanan
Route::get('/pemesanan', 'Crud\Master_pemesananController@list_pemesanan');
// list kategori
Route::get('/kategori', 'Crud\Master_kategoriController@list_kategori');

// add barang
Route::get('/barang/tambah', 'Crud\Master_barangController@tambah_barang');
// add outlet
Route::get('/outlet/tambah', 'Crud\Master_outletController@tambah_outlet');
// add pegawai
Route::get('/pegawai/tambah', 'Crud\Master_pegawaiController@tambah_pegawai');
// add pelanggan
Route::get('/pelanggan/tambah', 'Crud\Master_pelangganController@tambah_pelanggan');
// add pembelian
Route::get('/pembelian/tambah', 'Crud\Master_pembelianController@tambah_pembelian');
// add penjualan
Route::get('/penjualan/tambah', 'Crud\Master_penjualanController@tambah_penjualan');
// add pemesanan
Route::get('/pemesanan/tambah', 'Crud\Master_pemesananController@tambah_pemesanan');
// add kategori
Route::get('/kategori/tambah', 'Crud\Master_kategoriController@tambah_kategori');

// edit barang
Route::get('/barang/{id}/edit', 'Crud\Master_barangController@edit_barang');
// edit outlet
Route::get('/outlet/{id}/edit', 'Crud\Master_outletController@edit_outlet');
// edit pegawai
Route::get('/pegawai/{id}/edit', 'Crud\Master_pegawaiController@edit_pegawai');
// edit pelanggan
Route::get('/pelanggan/{id}/edit', 'Crud\Master_pelangganController@edit_pelanggan');
// edit pembelian
Route::get('/pembelian/{id}/edit', 'Crud\Master_pembelianController@edit_pembelian');
// edit penjualan
Route::get('/penjualan/{id}/edit', 'Crud\Master_penjualanController@edit_penjualan');
// edit pemesanan
Route::get('/pemesanan/{id}/edit', 'Crud\Master_pemesananController@edit_pemesanan');
// edit kategori
Route::get('/kategori/{id}/edit', 'Crud\Master_kategoriController@edit_kategori');

// crud barang
Route::post('/barang/tambah','Crud\Master_barangController@insert'); 
Route::put('/barang/{id}/edit','Crud\Master_barangController@update'); 
Route::delete('/barang/{id}/delete','Crud\Master_barangController@delete');

// crud Login
Route::post('/login', 'Login\LoginController@login');
Route::post('/signup', 'Login\LoginController@signup');
Route::get('/logout', 'Login\LoginController@logout');

// crud outlet
Route::post('/outlet/tambah','Crud\Master_outletController@insert'); 
Route::put('/outlet/{id}/edit','Crud\Master_outletController@update'); 
Route::delete('/outlet/{id}/delete','Crud\Master_outletController@delete');

// crud pegawai
Route::post('/pegawai/tambah','Crud\Master_pegawaiController@insert'); 
Route::put('/pegawai/{id}/edit','Crud\Master_pegawaiController@update'); 
Route::delete('/pegawai/{id}/delete','Crud\Master_pegawaiController@delete');

// crud pelanggan
Route::post('/pelanggan/tambah','Crud\Master_pelangganController@insert'); 
Route::put('/pelanggan/{id}/edit','Crud\Master_pelangganController@update'); 
Route::delete('/pelanggan/{id}/delete','Crud\Master_pelangganController@delete');

// crud pembelian
Route::post('/pembelian/tambah','Crud\Master_pembelianController@insert');  
Route::put('/pembelian/{id}/edit','Crud\Master_pembelianController@update'); 
Route::delete('/pembelian/{id}/delete','Crud\Master_pembelianController@delete');

// crud pemesanan
Route::post('/pemesanan/tambah','Crud\Master_pemesananController@insert'); 
Route::put('/pemesanan/{id}/edit','Crud\Master_pemesananController@update'); 
Route::delete('/pemesanan/{id}/delete','Crud\Master_pemesananController@delete');

// crud penjualan
Route::post('/penjualan/tambah','Crud\Master_penjualanController@insert'); 
Route::put('/penjualan/{id}/edit','Crud\Master_penjualanController@update'); 
Route::delete('/penjualan/{id}/delete','Crud\Master_penjualanController@delete');

// crud kategori
Route::post('/kategori/tambah','Crud\Master_kategoriController@insert'); 
Route::put('/kategori/{id}/edit','Crud\Master_kategoriController@update'); 
Route::delete('/kategori/{id}/delete','Crud\Master_kategoriController@delete');

