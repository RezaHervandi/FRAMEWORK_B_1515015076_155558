<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello-world', function () {
    return 'Hello World';
});

// Route::get('pengguna/{pengguna}', function ($pengguna) {
//     return "Hello World dari pengguna $pengguna";
// });

Route::get('berita/{berita?}', function ($berita = "Laravel 5") {
    return "berita $berita belum dibaca";
});

Route::get('kelas_b/framework/{mhs?}', function ($mhs = "Anonim") {
    return "Selamat Datang $mhs";
});

Route::get('pengguna','Penggunacontroller@awal');
Route::get('pengguna/tambah','Penggunacontroller@tambah');

Route::get('dosen', 'dosencontroller@awal');
Route::get('dosen/tambah', 'dosencontroller@tambah');

Route::get('mahasiswa', 'mahasiswacontroller@awal');
Route::get('mahasiswa/tambah', 'mahasiswacontroller@tambah');

Route::get('ruangan', 'ruangancontroller@awal');
Route::get('ruangan/tambah', 'ruangancontroller@tambah');

Route::get('matakuliah', 'matakuliahcontroller@awal');
Route::get('matakuliah/tambah', 'matakuliahcontroller@tambah');

Route::get('dosen_matakuliah', 'dosen_matakuliahcontroller@awal');
Route::get('dosen_matakuliah/tambah', 'dosen_matakuliahcontroller@tambah');

Route::get('jadwal_matakuliah', 'jadwal_matakuliahcontroller@awal');
Route::get('jadwal_matakuliah/tambah', 'jadwal_matakuliahcontroller@tambah');