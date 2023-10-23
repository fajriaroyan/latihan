<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepanController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(DepanController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/siswa', 'siswa')->name('siswa');
    Route::get('/guru', 'guru')->name('guru');
    Route::get('/mapel', 'mapel')->name('mapel');
});

Route::controller(SiswaController::class)->group(function(){
    Route::get('/dataSiswa', 'index')->name('dataSiswa');
    Route::get('/tambahDataSiswa', 'create')->name('tambahDataSiswa');
});

Route::controller(MapelController::class)->group(function(){
    Route::get('/dataMapel', 'index')->name('dataMapel');
    Route::get('/tambahDataMapel', 'create')->name('tambahDataMapel');
});

Route::controller(GuruController::class)->group(function(){
    Route::get('/dataGuru', 'index')->name('dataGuru');
    Route::get('/tambahDataGuru', 'create')->name('tambahDataGuru');
});
