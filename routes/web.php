<?php


use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('home');
});

// register hidden
Route::get('/registerPrivate', [RegisterController::class, 'index'])->name('registerprivate');
Route::post('/registerPrivate/register', [RegisterController::class, 'create'])->name('create');

// auth role login
Route::get('/login/Admin', [LoginAdminController::class, 'index'])->name('loginAdmin');
Route::post('/login/Admin', [LoginAdminController::class, 'store'])->name('loginAdmin');
Route::get('/login/Trainer', [LoginAdminController::class, 'index'])->name('loginTrainer');



 require __DIR__.'/admin.php';
 require __DIR__.'/trainer.php';
