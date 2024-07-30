<?php

namespace App\Http\Controllers;

use App\Models\BigData;
use App\Models\DataAlat;
use App\Models\DataKelas;
use App\Models\DataLevel;
use App\Models\DataProgram;
use App\Models\DataSekolah;
use App\Models\DataSiswa;
use App\Models\dataTrainer;
use App\Models\Schedules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    public function index()
    {

        $getDataSchedule = DB::table('schedules')
        ->join('big_data', 'schedules.id_bigData', '=', 'big_data.id_bigData')
        ->join('data_sekolahs', 'big_data.id_sekolah', '=', 'data_sekolahs.id_sekolah')
        ->join('data_trainers', 'schedules.id_trainer', '=', 'data_trainers.id')
        ->join('data_kelas', 'schedules.id_kelas', '=', 'data_kelas.id')
        ->select('schedules.*', 'big_data.*', 'data_sekolahs.*' ,'data_trainers.*','data_kelas.*')
        ->paginate(2);

        return view('admin.build.pages.jadwal', compact('getDataSchedule'));
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

    public function post(Request $request)
    {

        // Membuat kode unik id untuk relasi 2 tabel
        $getDataTrainer = DataTrainer::where('id', $request->input('id_trainer'))->first();
        $selectedSiswa = $request->input('id_siswa', []);
        if ($selectedSiswa === null) {
            return response()->json(['error' => 'Trainer tidak ditemukan'], 404);
        }
        $uniqueId = $this->generateUniqueId($getDataTrainer->nama);
        // Hasil validasi masuk ke tabel schedule
        Schedules::create([
            'id_trainer' => $request->id_trainer,
            'id_alat' => $request->id_alat,
            'id_kelas' => $request->id_kelas,
            'hari' => $request->hari,
            'jm_awal' => $request->jm_awal,
            'jm_akhir' => $request->jm_akhir,
            'id_bigData' => $uniqueId,
            'pj_eskul' => $request->pj_eskul,
            'ket' => $request->ket,
            'dj_akhir' => $request->dj_akhir,
            'tanggal_jd' => $request->tanggal_jd,
        ]);

        // Insert data siswa ke tabel BigData

        foreach ($selectedSiswa as $siswaId) {
            BigData::create([
                'id_bigData' => $uniqueId,
                'id_sekolah' => $request->id_sekolah,
                'id_level' => $request->id_level,
                'id_siswa' => $siswaId,
                'id_program' => $request->id_program,
                'api_maps' => $request->api_maps,
            ]);
        }

        return redirect()->route('schedule.index')->with('message', 'You have successfully created a trainer schedule');
    }

    private function generateUniqueId($nama)
    {
        // Ambil inisial dari nama (misal 3 karakter pertama)
        $initials = strtoupper(substr($nama, 0, 3));

        // Buat ID unik
        $uniqueId = $initials.'-'.uniqid();

        // Pastikan ID unik
        while (dataTrainer::where('nama', $uniqueId)->exists()) {
            $uniqueId = $initials.'-'.uniqid();
        }

        return $uniqueId;
    }
}
