<?php

namespace App\Http\Controllers\trainer;

use App\Http\Controllers\Controller;
use App\Models\BigData;
use App\Models\DataSiswa;
use App\Models\Schedules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function home()
    {
        // Mendapatkan ID dari trainer yang sedang terautentikasi
        $trainerId = Auth::guard('trainer')->id();

        // Pastikan ada ID trainer
        if (! $trainerId) {
            // Tangani jika trainer tidak terautentikasi
            return redirect()->route('trainer.login')->with('error', 'Please log in first.');
        }

        // $getScheduleTrainer = Schedules::where('id_trainer', $trainerId)->get();

        $getScheduleTrainer = DB::table('schedules')
            ->where('schedules.id_trainer', $trainerId)
            ->leftJoin('data_trainers', 'schedules.id_trainer', '=', 'data_trainers.id')
            ->leftJoin('data_kelas', 'schedules.id_kelas', '=', 'data_kelas.id')
            ->leftJoin('data_alats', 'schedules.id_alat', '=', 'data_alats.id')
            ->leftJoin('data_programs', 'schedules.id_program', '=', 'data_programs.id')
            ->leftJoin('data_levels', 'schedules.id_level', '=', 'data_levels.id')
            ->leftJoin('data_sekolahs', 'schedules.id_sekolah', '=', 'data_sekolahs.id_sekolah')
            ->select(
                'schedules.*',
                'schedules.id as id_schedules',
                'schedules.created_at as created_at_jd',
                'data_trainers.nama as trainer_name',
                'data_trainers.id as id_trainer',
                'data_kelas.kelas as kelas_name',
                'data_kelas.id as id_kelas',
                'data_alats.alat as nama_alat',
                'data_alats.id as id_alat',
                'data_programs.*',
                'data_programs.id as id_program',
                'data_levels.*',
                'data_levels.id as id_level',
                'data_sekolahs.*'

                // tambahkan kolom lainnya sesuai kebutuhan
            )
            ->orderBy('created_at_jd', 'DESC')
            ->get();

        // Periksa jika jadwal ditemukan
        if (! $getScheduleTrainer) {
            return redirect()->route('trainer.home')->with('info', 'No schedule found for this trainer.');
        }

        // Kembalikan view dengan data jadwal trainer

        return view('trainer.pages.home', compact('getScheduleTrainer'));
    }

    
  

    public function absen($id_schedules)
    {
        // Pastikan ada ID trainer
        if (! $id_schedules) {
            // Tangani jika trainer tidak terautentikasi
            return redirect()->route('trainer.login')->with('error', 'Please log in first.');
        }

        $getScheduleTrainer = DB::table('schedules')
            ->where('schedules.id', $id_schedules)
            ->leftJoin('data_trainers', 'schedules.id_trainer', '=', 'data_trainers.id')
            ->leftJoin('data_kelas', 'schedules.id_kelas', '=', 'data_kelas.id')
            ->leftJoin('data_alats', 'schedules.id_alat', '=', 'data_alats.id')
            ->leftJoin('data_programs', 'schedules.id_program', '=', 'data_programs.id')
            ->leftJoin('data_levels', 'schedules.id_level', '=', 'data_levels.id')
            ->leftJoin('data_sekolahs', 'schedules.id_sekolah', '=', 'data_sekolahs.id_sekolah')
            ->select(
                'schedules.*',
                'schedules.id as id_schedules',
                'data_trainers.nama as trainer_name',
                'data_trainers.id as id_trainer',
                'data_kelas.kelas as kelas_name',
                'data_kelas.id as id_kelas',
                'data_alats.alat as nama_alat',
                'data_alats.id as id_alat',
                'data_programs.*',
                'data_programs.id as id_program',
                'data_levels.*',
                'data_levels.id as id_level',
                'data_sekolahs.*'
                // tambahkan kolom lainnya sesuai kebutuhan
            )
            ->first();

        $getDataBig = BigData::where('id_bigData', $getScheduleTrainer->id_bigData)->pluck('id_siswa');

        // Dapatkan data siswa berdasarkan id_siswa dari hasil sebelumnya
        $getDataStudent = DataSiswa::whereIn('id', $getDataBig)->get();

        // Periksa jika jadwal ditemukan
        if (! $getScheduleTrainer) {
            return redirect()->route('trainer.home')->with('info', 'No schedule found for this trainer.');
        }

        return view('trainer.pages.absen', compact('getScheduleTrainer', 'getDataStudent'));
    }
    
    public function Test() {
        return view('trainer.pages.absen');
    }

    public function absensiswa($id_schedules)
    {

        $getDataSchedules = Schedules::where('id', $id_schedules)->first();

        $getDataBig = BigData::where('id_bigData', $getDataSchedules->id_bigData)->pluck('id_siswa');

        // Dapatkan data siswa berdasarkan id_siswa dari hasil sebelumnya
        $getDataStudent = DataSiswa::whereIn('id', $getDataBig)->get();

        return view('trainer.pages.absensiswa', compact('getDataStudent', 'getDataSchedules'));
    }
}
