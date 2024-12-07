<?php

namespace App\Http\Controllers\trainer\jadwalMenu;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    public function index () {
        $trainerId = Auth::guard('trainer')->id();
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
            )
            ->whereDate('schedules.created_at', Carbon::today())
            ->orderBy('schedules.created_at', 'ASC')
            ->get();

        if (! $getScheduleTrainer) {
            return redirect()->route('trainer.home')->with('info', 'No schedule found for this trainer.');
        }
        return view('trainer.pages.jadwalMenu.jadwal', compact('getScheduleTrainer'));
    }

    public function filterDate(Request $request)
    {
        $date = $request->input('date');
        $trainerId = Auth::guard('trainer')->id();
        $getScheduleTrainer = DB::table('schedules')
            ->where('schedules.id_trainer', $trainerId)
            ->where('schedules.ket', 'Aktif')
            ->whereNull('schedules.ab_trainer')
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
            )
            ->whereDate('schedules.created_at', $date)
            ->orderBy('schedules.created_at', 'ASC')
            ->get();
    
        // Cek jika tidak ada jadwal yang ditemukan
        if ($getScheduleTrainer->isEmpty()) {
            return response()->json([
                'jadwals' => [],
                'message' => 'Data jadwal pada tanggal tersebut tidak ada..!'
            ], 200);
        }
    
        // Kirim respons JSON dengan data jadwal yang ditemukan
        return response()->json(['jadwals' => $getScheduleTrainer], 200);
    }
    

}    
