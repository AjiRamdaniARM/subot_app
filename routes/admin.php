<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\admin\DataTrainerController;
use Illuminate\Support\Facades\Route;

// role admin
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dataTrainer', [DataTrainerController::class, 'index'])->name('trainer.index');

// post trainer
Route::post('/dataTrainer/add', [DataTrainerController::class, 'store'])->name('trainer.add');
