<?php

namespace App\Http\Controllers\trainer;

use App\Http\Controllers\Controller;
use App\Models\DataLaporan;
use App\Models\DataMateri;
use App\Models\dataTrainer;
use App\Models\Schedules;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function laporantrainer($id_schedules)
    {
        $getDataTrainer = dataTrainer::all();
        $getDataMateri = DataMateri::all();
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
                'data_trainers.telephone as telephone',
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

        return view('trainer.pages.laporantrainer', compact('getScheduleTrainer', 'getDataTrainer', 'getDataMateri'));
    }

    public function postLaporan(Request $request, $id_schedules)
    {

        $request->validate([
            'materi' => 'required',
            'id_ttd' => 'required',
            'catatan' => 'required',
        ], [
            'materi.required' => 'Materi harus dipilih.',
            'id_ttd.required' => 'Tanda Tangan harus dipilih.',
            'catatan.required' => 'Catatan harus diisi.',
        ]);

        // Ambil tanggal dan jam saat ini
        $currentDateTime = Carbon::now('Asia/Jakarta');
        $currentDate = $currentDateTime->toDateString(); // Format tanggal: Y-m-d
        $currentTime = $currentDateTime->toTimeString(); // Format waktu: H:i:s

        $data = [
            'id_jadwal' => $id_schedules,
            'catatan' => $request->catatan,
            'id_materi' => $request->materi,
            'id_ttd' => $request->id_ttd,
            'tanggal_lp' => $currentDate,
            'jam_lp' => $currentTime,
        ];

        DataLaporan::create($data);

        // Update status kehadiran pada tabel schedules
        $dataSchedule = Schedules::findOrFail($id_schedules);
        $dataSchedule->ab_trainer = 'Hadir';
        $dataSchedule->save();

        return redirect('/home')->with('success', 'Laporan berhasil disimpan.');
    }
}
