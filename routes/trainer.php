<?php

use App\Http\Controllers\trainer\Absensi;
use App\Http\Controllers\trainer\homeController;
use App\Http\Controllers\trainer\LaporanController as TrainerLaporanController;
use App\Http\Controllers\trainer\LoginTrainerController;
use Illuminate\Support\Facades\Route;

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
Route::middleware('auth:trainer')->group(function () {
    Route::get('/home', [homeController::class, 'home'])->name('home');
    Route::get('/home/absen/{id_schedules}', [homeController::class, 'absen'])->name('absen');
    Route::get('/laporantrainer/{id_schedules}', [TrainerLaporanController::class, 'laporantrainer'])->name('laporantrainer');
    Route::get('/jadwalhari', [LoginTrainerController::class, 'jadwalhari'])->name('jadwalhari');
    Route::get('/notifications', [LoginTrainerController::class, 'notifications'])->name('notifications');
    Route::get('/user', [LoginTrainerController::class, 'user'])->name('user');
    Route::get('/explore', [LoginTrainerController::class, 'explore'])->name('explore');
    Route::get('/jadwal', [LoginTrainerController::class, 'jadwal'])->name('jadwal');
    Route::get('/absensiswa/{id_schedules}', [homeController::class, 'absensiswa'])->name('absensiswa');
    Route::get('/pesan', [LoginTrainerController::class, 'pesan'])->name('pesan');
    Route::get('/chat', [LoginTrainerController::class, 'chat'])->name('chat');
    Route::get('/instruktur', [LoginTrainerController::class, 'instruktur'])->name('instruktur');
    Route::get('/gallery', [LoginTrainerController::class, 'gallery'])->name('gallery');
    Route::get('/pembayaran ', [LoginTrainerController::class, 'pembayaran'])->name('pembayaran');
    Route::get('/invoice', [LoginTrainerController::class, 'invoice'])->name('invoice');
    Route::get('/modul', [LoginTrainerController::class, 'modul'])->name('modul');
    Route::get('/event', [LoginTrainerController::class, 'event'])->name('event');
    Route::get('/useredit', [LoginTrainerController::class, 'useredit'])->name('useredit');
    Route::get('/historyabsen', [LoginTrainerController::class, 'historyabsen'])->name('historyabsen');

    // absensi siswa route
    Route::post('/absensiswa/prossess/{id}', [Absensi::class, 'absensi'])->name('absensiSiswa.update');
    // route post laporan
    Route::post('/laporantrainer/prossess/{id_schedules}', [TrainerLaporanController::class, 'postLaporan'])->name('absensiSiswa.update');
});
Route::get('/LoginTrainer', [LoginTrainerController::class, 'index'])->name('login.trainer');
Route::post('/login-trainer/prosses', [LoginTrainerController::class, 'loginTrainer'])->name('login.prosses');
