<?php

use App\Http\Controllers\admin\DataTrainerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PrivacyController;
use Illuminate\Support\Facades\Route;

// role admin
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dataTrainer', [DataTrainerController::class, 'index'])->name('trainer.index');
Route::get('/dataTrainer/private/{nama}', [DataTrainerController::class, 'dataPrivate'])->name('trainer.dataPrivate');

// post trainer
Route::post('/dataTrainer/add', [DataTrainerController::class, 'store'])->name('trainer.add');
Route::post('/dataTrainer/edit/{nama}', [DataTrainerController::class, 'edited'])->name('trainer.edit');
Route::get('/dataTrainer/delete/{nama}', [DataTrainerController::class, 'delete'])->name('trainer.delete');



// privacyPin
Route::get('/privacy', [PrivacyController::class, 'show'])->name('privacy.show');
Route::post('/privacy/{nama}', [PrivacyController::class, 'checkPin'])->name('privacy.checkPin');
Route::get('/privacy-content', [PrivacyController::class, 'content'])->name('privacy.content')->middleware('check.pin');
