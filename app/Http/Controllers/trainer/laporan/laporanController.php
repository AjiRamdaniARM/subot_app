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
                return $query->where('data_kelas.kelas', 'like', "%{$search}%")
                            ->orWhere('hari', 'like', "%{$search}%")
                            ->orWhere('data_levels.levels', 'like', "%{$search}%")
                            ->when(strlen($search) === 4, function ($query) use ($search) {
                                return $query->orWhereRaw("YEAR(tanggal_jd) = ?", [$search]);
                            })
                            ->when(strlen($search) === 2, function ($query) use ($search) {
                                return $query->orWhereRaw("MONTH(tanggal_jd) = ?", [$search]);
                            });
                            ;
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
                if ($query->isEmpty()) {
                    return response()->json(' <table class="min-w-full bg-white shadow-md rounded-lg">
            <thead>
                <tr class="bg-[#0E2C75] text-white rounded-2xl">
                    <th class="py-4 px-6 text-left text-sm font-semibold uppercase">No</th>
                    <th class="py-4 px-6 text-left text-sm font-semibold uppercase">Private / Sekolah</th>
                    <th class="py-4 px-6 text-left text-sm font-semibold uppercase">Level</th>
                    <th class="py-4 px-6 text-left text-sm font-semibold uppercase">Hari</th>
                    <th class="py-4 px-6 text-left text-sm font-semibold uppercase">Tanggal Mengajar</th>
                    <th class="py-4 px-6 text-left text-sm font-semibold uppercase">Detail</th>
                </tr>
            </thead>
            <tbody>
             <tr colspan="5" class="hover:bg-gray-100 border-b">
                        <td class="py-4 px-6 text-gray-700">
                          Tidak data dalam pencarian
                        </td>
                    </tr>
            </tbody>
            </table>
            ');
                }
                return view('trainer.pages.laporanTrainer.partials.dataTable', compact('query'))->render();
            } 
            
    
        return view('trainer.pages.laporanTrainer.index', compact('query'));
    }
    

        
}
