<?php

namespace App\Http\Controllers\trainer\laporan;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class laporanController extends Controller
{
    public function index() {
        return view('trainer.pages.laporanTrainer.index');
    }
    public function getData() {
        $fetchTrainerId = Auth::guard('trainer')->id();
        if (request()->ajax()) {
            $query = DB::table('schedules')
            ->where('schedules.id_trainer', $fetchTrainerId)
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
            ->orderBy('schedules.created_at', 'ASC')
            ->addColumn('action', function ($row) {
                return '<a href="/schedules/edit/' . $row->id_schedules . '" class="btn btn-primary btn-sm">Edit</a>';
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('trainer.pages.laporanTrainer.index');
    }
}
