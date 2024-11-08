<?php

namespace App\Http\Controllers\trainer;

use App\Http\Controllers\Controller;
use App\Models\BigData;
use App\Models\DataMateri;
use App\Models\DataSiswa;
use App\Models\dataTrainer;
use App\Models\Schedules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class homeController extends Controller
{
    public function home()
    {

        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;
        $trainerId = Auth::guard('trainer')->id();

        $dataCount = DB::table('schedules')
        ->where('id_trainer',$trainerId)
        ->where('ab_trainer', 'Hadir')
        ->whereMonth('created_at', $currentMonth)
        ->whereYear('created_at', $currentYear)
        ->count();

        $penghasilan = $dataCount * 50000;

        $dataCountData = DB::table('schedules')
        ->where('id_trainer',$trainerId)
        ->whereMonth('created_at', $currentMonth)
        ->whereYear('created_at', $currentYear)
        ->count();
        
        if (! $trainerId) {
            return redirect()->route('trainer.login')->with('error', 'Please log in first.');
        }

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
            ->orderBy('created_at_jd', 'ASC')
            ->paginate(5);

        if (! $getScheduleTrainer) {
            return redirect()->route('trainer.home')->with('info', 'No schedule found for this trainer.');
        }
        
        return view('trainer.pages.home', compact('getScheduleTrainer','dataCount','dataCount','dataCountData','penghasilan'));
    }

    public function absen($id_schedules)
    {

        if (! $id_schedules) {
            return redirect()->route('trainer.login')->with('error', 'Please log in first.');
        }
        $getDataMateri = DataMateri::all();
        $getDataTrainer = dataTrainer::all();

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
                'data_trainers.ttd as tanda',
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
            ->first();

        $getDataBig = BigData::where('id_bigData', $getScheduleTrainer->id_bigData)->pluck('id_siswa');

        $getDataStudent = DB::table('data_siswas')
        ->whereIn('data_siswas.id', $getDataBig)
        ->join('big_data', 'data_siswas.id', '=', 'big_data.id_siswa')
        ->select('data_siswas.*','big_data.*')
        ->get();

        if (!$getScheduleTrainer) {
            return redirect()->route('trainer.home')->with('info', 'No schedule found for this trainer.');
        }

        return view('trainer.pages.absen', compact('getScheduleTrainer', 'getDataStudent','getDataMateri','getDataTrainer'));
    }
    
    public function Test() {
        return view('trainer.pages.absen');
    }

    public function absensiswa($id_schedules)
    {
        if (is_null($id_schedules)) {
            return redirect()->route('home');
        }

        $getDataSchedules = Schedules::where('id', $id_schedules)->first();  
        if (!$getDataSchedules) {
            return redirect()->route('home')->with('error', 'Data jadwal tidak ditemukan.');
        }
        $getDataBig = BigData::where('id_bigData', $getDataSchedules->id_bigData)->pluck('id_siswa');

        $getDataStudent = DataSiswa::whereIn('id', $getDataBig)->get();
        return view('trainer.pages.absen_siswa.index', compact('getDataStudent', 'getDataSchedules'));
    }
}
