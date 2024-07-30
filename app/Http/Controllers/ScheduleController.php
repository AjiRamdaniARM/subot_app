<?php

namespace App\Http\Controllers;

use App\Models\DataAlat;
use App\Models\DataKelas;
use App\Models\DataLevel;
use App\Models\DataProgram;
use App\Models\DataSekolah;
use App\Models\DataSiswa;
use App\Models\dataTrainer;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index()
    {
        return view('admin.build.pages.jadwal');
    }

    public function indexCreate()
    {
        $getDataTrainer = dataTrainer::orderBy('nama', 'asc')->get();
        $getDataTools = DataAlat::orderBy('created_at', 'asc')->get();
        $getDataClass = DataKelas::orderBy('created_at', 'asc')->get();
        $getDataSchool = DataSekolah::orderBy('created_at', 'asc')->get();
        $getDataProgram = DataProgram::orderBy('created_at', 'asc')->get();
        $getDataLevel = DataLevel::orderBy('created_at', 'asc')->get();
        $getDataSiswa = DataSiswa::orderBy('nama_lengkap', 'asc')->get();

        return view('admin.build.components.jadwal.createSchedule', compact('getDataTrainer', 'getDataTools', 'getDataClass', 'getDataSchool', 'getDataProgram', 'getDataLevel', 'getDataSiswa'));
    }

    public function post(Request $request) {

    }
}
