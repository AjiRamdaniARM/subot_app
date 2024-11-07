<?php

use App\Http\Controllers\trainer\Absensi;
use App\Http\Controllers\trainer\akun\AkunController;
use App\Http\Controllers\trainer\laporan\laporanController;
use App\Http\Controllers\trainer\drive\uploadDriveController;
use App\Http\Controllers\trainer\homeController;
use App\Http\Controllers\trainer\jadwalMenu\JadwalController;
use App\Http\Controllers\trainer\LaporanController as TrainerLaporanController;
use App\Http\Controllers\trainer\LoginTrainerController;
use App\Livewire\UpdateAccount;
use Illuminate\Support\Facades\Route;


Route::middleware('check.trainer.auth')->group(function () {
    Route::get('/home', [homeController::class, 'home'])->name('home');
    
    // === route absen === //
    Route::get('/home/absen/{id_schedules}', [homeController::class, 'absen'])->name('absen');
    Route::get('/home/absen/', [homeController::class, 'test'])->name('absenTest');
    Route::get('/absenSiswa', [Absensi::class, 'absensiSiswa'])->name('ab_siswa');

    // === session upload drive === //
    Route::get('/drive/{id}', [uploadDriveController::class, 'index'])->name('drive');
    Route::post('/drive/{id}/uploaded', [uploadDriveController::class, 'DriveUploaded'])->name('drive.upload');

    // === route akun profile === //
    Route::get('/akun', [AkunController::class, 'index'])->name('akun');
    Route::get('/edit', [AkunController::class, 'edited'])->name('akun.edited');
    Route::post('/edit/prossess/{id}', [AkunController::class, 'prosess'])->name('akun.post');
    Route::post('/edit/profile/{id}', [AkunController::class, 'uploadProfile'])->name('trainer.upload');

    // === route jadwal trainer === //
    Route::get('/jadwalTrainer', [JadwalController::class, 'index'])->name('jadwal.menu');

    // === route laporan trainer === //
    Route::get('/laporanTrainer', [laporanController::class, 'index'])->name('laporan.menu');

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
    Route::get('/riwayattrainer', [LoginTrainerController::class, 'riwayattrainer'])->name('riwayattrainer');

    // === backup route === //
    Route::post('/laporantrainer/porsses/{id_schedules}', [Absensi::class, 'UpDrive']);

    // absensi siswa route
    Route::post('/absensiswa/prossess/{id}', [Absensi::class, 'absensi'])->name('absensiSiswa.update');
    // route post laporan
    Route::post('/laporantrainer/prossess/{id_schedules}', [TrainerLaporanController::class, 'postLaporan'])->name('absensiSiswa.update');

    // route logout user trainer
    Route::post('/logout', [LoginTrainerController::class, 'destroy'])->name('logout');
});




Route::get('/LoginTrainer', [LoginTrainerController::class, 'index'])->name('login.trainer');
Route::post('/login-trainer/prosses', [LoginTrainerController::class, 'loginTrainer'])->name('login.prosses');
