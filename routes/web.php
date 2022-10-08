<?php

use App\Http\Controllers\PenilaianController;
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
//login
Route::post('/postlogin','LoginController@postlogin');
Route::get('/logout','LoginController@logout');
Route::get('/formregister','LoginController@create');
Route::post('/registerstore','LoginController@store');
Auth::routes();

// Route Kategori
Route::get('/kategori', 'KategoriController@index')->name('kategori');
Route::get('/kategori/tambah', 'KategoriController@tambah');
Route::post('/kategori/store', 'KategoriController@store');
Route::get('/kategori/edit/{id_kategori}', 'KategoriController@edit');
Route::put('/kategori/update/{id_kategori}', 'KategoriController@update');
Route::get('/kategori/delete/{id_kategori}', 'KategoriController@delete');
Route::get('/kategori/detail/{id_kategori}', 'KategoriController@detail');

// Route Siswa
Route::get('/siswa', 'SiswaController@index')->name('siswa');
Route::get('/siswa/tambah', 'SiswaController@tambah');
Route::post('/siswa/store', 'SiswaController@store');
Route::get('/siswa/edit/{nisn}', 'SiswaController@edit');
Route::put('/siswa/update/{nisn}', 'SiswaController@update');
Route::get('/siswa/delete/{nisn}', 'SiswaController@delete');
Route::get('/siswa/detail/{nisn}', 'SiswaController@detail');

// Route Pelanggaran
Route::get('/pelanggaran', 'PelanggaranController@index')->name('pelanggaran');
Route::get('/pelanggaran/tambah', 'PelanggaranController@tambah');
Route::post('/pelanggaran/store', 'PelanggaranController@store');
Route::get('/pelanggaran/edit/{id_pelanggaran}', 'PelanggaranController@edit');
Route::put('/pelanggaran/update/{id_pelanggaran}', 'PelanggaranController@update');
Route::get('/pelanggaran/delete/{id_pelanggaran}', 'PelanggaranController@delete');
Route::get('/pelanggaran/detail/{id_pelanggaran}', 'PelanggaranController@detail');

// Route Pengawas
Route::get('/pengawas', 'PengawasController@index')->name('pengawas');
Route::get('/pengawas/tambah', 'PengawasController@tambah');
Route::post('/pengawas/store', 'PengawasController@store');
Route::get('/pengawas/edit/{id_pengawas}', 'PengawasController@edit');
Route::put('/pengawas/update/{id_pengawas}', 'PengawasController@update');
Route::get('/pengawas/delete/{id_pengawas}', 'PengawasController@delete');
Route::get('/pengawas/detail/{id_pengawas}', 'PengawasController@detail');

// Route Penilaian
Route::get('/penilaian', 'PenilaianController@index')->name('penilaian');
Route::get('/penilaian/tambah', 'PenilaianController@tambah');
Route::post('/penilaian/store', 'PenilaianController@store');
Route::get('/penilaian/edit/{id_penilaian}', 'PenilaianController@edit');
Route::put('/penilaian/update/{id_penilaian}', 'PenilaianController@update');
Route::get('/penilaian/delete/{id_penilaian}', 'PenilaianController@delete');
Route::get('/penilaian/detail/{id_penilaian}', 'PenilaianController@detail');
Route::get('/penilaian/cetak', 'PenilaianController@cetak')->name('cetak');


// Route Kelas
Route::get('/kelas', 'KelasController@index')->name('kelas');
Route::get('/kelas/tambah', 'KelasController@tambah');
Route::post('/kelas/store', 'KelasController@store');
Route::get('/kelas/edit/{id_kelas}', 'KelasController@edit');
Route::put('/kelas/update/{id_kelas}', 'KelasController@update');
Route::get('/kelas/delete/{id_kelas}', 'KelasController@delete');
Route::get('/kelas/detail/{id_kelas}', 'KelasController@detail');

// Route Transaksi
Route::get('/transaksi', 'TransaksiController@index')->name('transaksi');
Route::get('/transaksi/tambah', 'TransaksiController@tambah');
Route::post('/transaksi/store', 'TransaksiController@store');
Route::get('/transaksi/edit/{id_transaksi}', 'TransasksiController@edit');
Route::put('/transaksi/update/{id_transaksi}', 'TransaksiController@update');
Route::get('/transaksi/delete/{id_transaksi}', 'TransaksiController@delete');
Route::get('/transaksi/detail/{id_transaksi}', 'TransaksiController@detail');
'Auth'::routes();

Route::get('/home', 'HomeController@index')->name('home');

'Auth'::routes();

