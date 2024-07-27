<?php

use App\Http\Controllers\admin\DataTrainerController;
use App\Http\Controllers\bigDataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\form\FormulirController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\SistemKidsCoontroller;
use Illuminate\Support\Facades\Route;

// role admin
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dataTrainer', [DataTrainerController::class, 'index'])->name('trainer.index');
Route::get('/dataTrainer/private/{nama}', [DataTrainerController::class, 'dataPrivate'])->name('trainer.dataPrivate');

// post trainer
Route::post('/dataTrainer/add', [DataTrainerController::class, 'store'])->name('trainer.add');
Route::post('/dataTrainer/edit/{nama}', [DataTrainerController::class, 'edited'])->name('trainer.edit');
Route::get('/dataTrainer/delete/{nama}', [DataTrainerController::class, 'delete'])->name('trainer.delete');

// dataKidsRoute
Route::get('/daftar', [FormulirController::class, 'index'])->name('formulir.index');
Route::get('/formulirPendaftaran/selesai', [FormulirController::class, 'done'])->name('formulir.done');
Route::post('/daftar/prosses/', [SistemKidsCoontroller::class, 'addSchool'])->name('add.school');
Route::get('/dataKids', [SistemKidsCoontroller::class, 'index'])->name('index.kids');
Route::get('/datakids/delete/{nama_lengkap}', [SistemKidsCoontroller::class, 'delete'])->name('delete.kids');
Route::post('/datakids/edit/{nama_lengkap}', [SistemKidsCoontroller::class, 'edit'])->name('edit.kids');
Route::post('/datakids/loading', [SistemKidsCoontroller::class, 'store'])->name('input.kids');
Route::post('/datakids/loading/admin', [SistemKidsCoontroller::class, 'storeAdmin'])->name('admin.kids');
// datakidsroute
Route::get('/datakids/privateData/{nama_lengkap}', [SistemKidsCoontroller::class, 'privateData'])->name('private.kids');

// bigData Route
Route::get('/bigData', [bigDataController::class, 'index'])->name('bigaData.index');
Route::post('/bigData/program', [bigDataController::class, 'storeProgram'])->name('bigaData.program');
Route::post('/bigData/level', [bigDataController::class, 'storeLevel'])->name('bigaData.level');
Route::post('/bigData/class', [bigDataController::class, 'storeClass'])->name('bigaData.class');
Route::post('/bigData/tools', [bigDataController::class, 'storeTools'])->name('bigaData.tools');
Route::get('/bigData/deleteSekolah/{sekolah}', [bigDataController::class, 'deleteSekolah'])->name('sekolah.delete');
Route::post('/bigData/editSekolah/{sekolah}', [bigDataController::class, 'editSekolah'])->name('sekolah.edit');

// route bigData program
Route::get('/bigData/deleteProgram/{program}', [bigDataController::class, 'deleteProgram'])->name('program.delete');
Route::post('/bigData/editProgram/{program}', [bigDataController::class, 'editProgram'])->name('program.edit');

// route bigData levels
Route::get('/bigData/deleteLevel/{levels}', [bigDataController::class, 'deleteLevel'])->name('level.delete');
Route::post('/bigData/editLevel/{levels}', [bigDataController::class, 'editLevel'])->name('level.edit');

// Route bigData Class
Route::get('/bigData/deleteClass/{kelas}', [bigDataController::class, 'deleteClass'])->name('class.delete');
Route::post('/bigData/editClass/{kelas}', [bigDataController::class, 'editClass'])->name('class.edit');

// route bigData Tools
Route::get('/bigData/deleteTools/{alat}', [bigDataController::class, 'deleteTools'])->name('tools.delete');
Route::post('/bigData/editTools/{alat}', [bigDataController::class, 'editTools'])->name('tools.edit');

// Route

// privacyPin
Route::get('/privacy', [PrivacyController::class, 'show'])->name('privacy.show');
Route::post('/privacy/{nama}', [PrivacyController::class, 'checkPin'])->name('privacy.checkPin');
Route::get('/privacy-content', [PrivacyController::class, 'content'])->name('privacy.content')->middleware('check.pin');
