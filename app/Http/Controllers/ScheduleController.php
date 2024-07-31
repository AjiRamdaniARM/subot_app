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
            ->join('data_trainers', 'schedules.id_trainer', '=', 'data_trainers.id')
            ->join('data_kelas', 'schedules.id_kelas', '=', 'data_kelas.id')
            ->select('schedules.*', 'schedules.id as id_schedules', 'data_trainers.*', 'data_trainers.id as id_trainer', 'data_kelas.*')
            ->paginate(10);

        $getDataTrainer = dataTrainer::orderBy('nama', 'asc')->get();

        return view('admin.build.pages.jadwal', compact('getDataSchedule', 'getDataTrainer'));
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
            'id_sekolah' => $request->id_sekolah,
            'id_level' => $request->id_level,
            'id_program' => $request->id_program,
            'hari' => $request->hari,
            'jm_awal' => $request->jm_awal,
            'jm_akhir' => $request->jm_akhir,
            'id_bigData' => $uniqueId,
            'pj_eskul' => $request->pj_eskul,
            'ket' => $request->ket,
            'dj_akhir' => $request->dj_akhir,
            'tanggal_jd' => $request->tanggal_jd,
            'api_maps' => $request->api_maps,
        ]);

        // Insert data siswa ke tabel BigData

        foreach ($selectedSiswa as $siswaId) {
            BigData::create([
                'id_bigData' => $uniqueId,
                'id_siswa' => $siswaId,
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

    public function replace(Request $request, $nama)
    {

        if ($nama == null) {
            return response()->json(['status' => 404]);
        }

        $getDataTrainer = dataTrainer::where('nama', $nama)->first();

        if (!$getDataTrainer) {
            return response()->json(['status' => 404, 'message' => 'Trainer not found']);
        }

        $getData = Schedules::where('id_trainer', $getDataTrainer->id)->firstOrFail();

        $getData->id_trainer = $request->input('id_trainer');
        $getData->save();

        return redirect()->back()->with('message', 'Trainer change has been successful');
    }
}
