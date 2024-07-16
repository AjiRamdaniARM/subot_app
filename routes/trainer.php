<?php

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

Route::get('/jd', function () {
    return view('trainer.index');
});

Route::get('/absen', function () {
    return view('absen');
});
Route::get('/jadwal', function () {
    return view('jadwal');
});
Route::get('/instruktur', function () {
    return view('instruktur');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/loginTrainer', function () {
    return view('auth.loginTrainer');
});
Route::get('/login', function () {
    return view('trainer.index');
});
Route::get('/laporantrainer', function () {
    return view('laporantrainer');
});


