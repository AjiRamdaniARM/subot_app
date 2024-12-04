<?php

namespace App\Http\Controllers\trainer\laporan;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class laporanController extends Controller
{
    public function index(Request $request) {
        $fetchTrainerId = Auth::guard('trainer')->id();
        $search = $request->input('search');
        $query = DB::table('schedules')
            ->leftJoin('data_trainers', 'schedules.id_trainer', '=', 'data_trainers.id')
            ->leftJoin('data_kelas', 'schedules.id_kelas', '=', 'data_kelas.id')
            ->leftJoin('data_alats', 'schedules.id_alat', '=', 'data_alats.id')
            ->leftJoin('data_programs', 'schedules.id_program', '=', 'data_programs.id')
            ->leftJoin('data_levels', 'schedules.id_level', '=', 'data_levels.id')
            ->leftJoin('data_sekolahs', 'schedules.id_sekolah', '=', 'data_sekolahs.id_sekolah')
            ->where('schedules.id_trainer', $fetchTrainerId)
            ->where('ab_trainer','Hadir')
            ->when($search, function ($query, $search) {
                return $query->where('nama', 'like', "%{$search}%");
            })
            ->select(
                'schedules.*',
                'schedules.id as id_schedules',
                'schedules.created_at as created_at_jd',
                'data_trainers.nama as trainer_name',
                'data_kelas.kelas as kelas_name',
                'data_alats.alat as nama_alat',
                'data_programs.program as program_name',
                'data_levels.levels as level_name',
                'data_sekolahs.sekolah as school_name'
            )
            ->paginate(5);

            
            if ($request->ajax()) {
                return view('partials.siswa_table', compact('query'))->render();
            } 
    
        return view('trainer.pages.laporanTrainer.index', compact('query'));
    }
    

        
}
