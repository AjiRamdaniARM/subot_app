<?php

use App\Http\Controllers\laporan\LaporanController;
use Illuminate\Support\Facades\Route;

Route::get('users/export/', [LaporanController::class, 'export']);
