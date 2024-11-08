<?php

use App\Http\Controllers\admin\DataTrainerController;
use App\Http\Controllers\admin\LaporanTrainer;
use App\Http\Controllers\api\nodeWaApi;
use App\Http\Controllers\bigDataController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\form\FormulirController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\profileAdmin\profile;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SistemKidsCoontroller;
use App\Http\Controllers\superAdmin\StaffController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    // role admin
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/data-siswa', [DashboardController::class, 'getDataSiswaPerTahun']);
    Route::get('/dataTrainer', [DataTrainerController::class, 'index'])->name('trainer.index');
    Route::middleware(['auth', 'pin.verified'])->group(function () {
        Route::get('/dataTrainer/private/{nama}', [DataTrainerController::class, 'dataPrivate'])->name('trainer.dataPrivate');
    });

    // email add trainer
    Route::post('/dataTrainer/private/email/{nama}', [DataTrainerController::class, 'emailAdd'])->name('emailAdd.code');

    // post trainer
    Route::post('/dataTrainer/add', [DataTrainerController::class, 'store'])->name('trainer.add');
    Route::post('/dataTrainer/edit/{nama}', [DataTrainerController::class, 'edited'])->name('trainer.edit');
    Route::get('/dataTrainer/delete/{nama}', [DataTrainerController::class, 'delete'])->name('trainer.delete');

    // pin password trainer
    Route::post('/dataTrainer/verifyPin/{id}', [DataTrainerController::class, 'verifyPIN'])->name('trainer.verifyPIN');
    Route::post('dataTrainer/private/custom/{nama}', [DataTrainerController::class, 'custom'])->name('trainer.custom');

    // export route data trainer
    Route::get('dataTrainer/export', [DataTrainerController::class, 'export'])->name('trainer.export');

    Route::post('/daftar/prosses/', [SistemKidsCoontroller::class, 'addSchool'])->name('add.school');
    Route::get('/dataKids', [SistemKidsCoontroller::class, 'index'])->name('index.kids');
    Route::get('/datakids/delete/{nama_lengkap}', [SistemKidsCoontroller::class, 'delete'])->name('delete.kids');
    Route::post('/datakids/edit/{nama_lengkap}', [SistemKidsCoontroller::class, 'edit'])->name('edit.kids');
    Route::post('/datakids/loading', [SistemKidsCoontroller::class, 'store'])->name('input.kids');
    Route::post('/datakids/loading/admin', [SistemKidsCoontroller::class, 'storeAdmin'])->name('admin.kids');

    // datakidsroute
    Route::get('/datakids/privateData/{nama_lengkap}', [SistemKidsCoontroller::class, 'privateData'])->name('private.kids');
    Route::get('/datakids/allExport', [SistemKidsCoontroller::class, 'exportDataKids'])->name('excel.kids');

    // bigData Route
    Route::get('/bigData', [bigDataController::class, 'index'])->name('bigaData.index');
    Route::post('/bigData/program', [bigDataController::class, 'storeProgram'])->name('bigaData.program');
    Route::post('/bigData/level', [bigDataController::class, 'storeLevel'])->name('bigaData.level');
    Route::post('/bigData/class', [bigDataController::class, 'storeClass'])->name('bigaData.class');
    Route::post('/bigData/tools', [bigDataController::class, 'storeTools'])->name('bigaData.tools');
    Route::post('/bigData/materi', [bigDataController::class, 'storeMateri'])->name('bigaData.materi');
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

    // route bigData Materi
    Route::get('/bigData/deleteMateri/{materi}', [bigDataController::class, 'deleteMateri'])->name('materis.delete');
    Route::post('/bigData/editMateri/{materi}', [bigDataController::class, 'editMateri'])->name('materis.edit');

    // Route jadwal admin
    Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule.index');
    Route::post('/update-status/{id_schedule}', [ScheduleController::class, 'updateStatus']);
    Route::get('/schedule/create', [ScheduleController::class, 'indexCreate'])->name('schedule.create');
    Route::get('/schedule/edit/{id_schedules}', [ScheduleController::class, 'editSchedule'])->name('schedule.edit');
    Route::post('/schedule/prosess/{id_schedules}', [ScheduleController::class, 'prossesEdit'])->name('schedule.prossesEdit');
    Route::post('/schedule/create/prosses', [ScheduleController::class, 'post'])->name('schedule.post');
    Route::post('/schedule/replaceTrainer/{id_schedules}', [ScheduleController::class, 'replace'])->name('schedule.replace');
    Route::post('/schedule/replaceStatus/{id_schedules}', [ScheduleController::class, 'status'])->name('schedule.status');
    Route::get('/schedule/deleteSchedule/{id_schedules}', [ScheduleController::class, 'delete'])->name('schedule.delete');

    // fitur superAdmin
    Route::get('/dataStaff', [StaffController::class, 'index'])->name('dataStaff.index');
    Route::post('/superadmin/update/{id}', [StaffController::class, 'update'])->name('superadmin.update');
    Route::post('/superadmin/delete/{id}', [StaffController::class, 'delete'])->name('superadmin.delete');

    // route profile admin
    Route::get('/profileAdmin', [profile::class, 'index'])->name('profileAdmin.index');

    // route laporan trainer admin
    Route::get('/laporanTrainerAdmin', [LaporanTrainer::class, 'index'])->name('laporan.trainer.admin');
    Route::get('/laporanTrainer/{id_schedules}', [LaporanTrainer::class, 'laporan'])->name('laporan.berkas');
    //  route laporan excel
    Route::get('/laporanTrainer/Excel/{id_schedules}', [LaporanTrainer::class, 'excel'])->name('laporan.excel');

    // route custom laporan
    Route::get('customLaporan', [LaporanTrainer::class, 'customLaporan'])->name('laporan.custom');
    Route::post('ExportLaporanCustom', [LaporanTrainer::class, 'exportCustom'])->name('export.custom');
    Route::post('ImportTemplate', [LaporanTrainer::class, 'ImportExcel'])->name('import.excel');

    // privacyPin
    Route::get('/privacy', [PrivacyController::class, 'show'])->name('privacy.show');
    Route::post('/privacy/{nama}', [PrivacyController::class, 'checkPin'])->name('privacy.checkPin');
    Route::get('/privacy-content', [PrivacyController::class, 'content'])->name('privacy.content')->middleware('check.pin');

    // backend node js wa
    Route::get('/qr-code', [nodeWaApi::class, 'getQrCode'])->name('qr-code');
    Route::get('/waApi', [nodeWaApi::class, 'ViewWaApi'])->name('wa-api');
    Route::post('/send-message', [nodeWaApi::class, 'sendMessage'])->name('sendMessage');

});

// dataKidsRoute
Route::get('/daftar', [FormulirController::class, 'index'])->name('formulir.index');
Route::get('/formulirPendaftaran/selesai', [FormulirController::class, 'done'])->name('formulir.done');

Route::get('/trainerForm', [FormulirController::class, 'trainer'])->name('trainer.form');

Route::get('/selesai', [FormulirController::class, 'trainerDone'])->name('done.form');
Route::post('/trainerForm/prosses', [FormulirController::class, 'postTrainerData'])->name('trainer.post');