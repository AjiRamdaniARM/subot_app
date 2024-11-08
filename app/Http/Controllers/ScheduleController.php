<?php

namespace App\Http\Controllers;

use App\Events\ScheduleUpdated;
use App\Mail\Jadwal;
use App\Models\BigData;
use App\Models\DataAlat;
use App\Models\DataKelas;
use App\Models\DataLevel;
use App\Models\DataProgram;
use App\Models\DataSekolah;
use App\Models\DataSiswa;
use App\Models\dataTrainer;
use App\Models\Schedules;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class ScheduleController extends Controller
{
    public function index()
    {
        // === ambil data dari tabel schedules === //
        $getDataSchedule = DB::table('schedules')
            ->leftJoin('data_trainers', 'schedules.id_trainer', '=', 'data_trainers.id')
            ->leftJoin('data_kelas', 'schedules.id_kelas', '=', 'data_kelas.id')
            ->leftJoin('data_laporans', 'data_laporans.id_jadwal', '=', 'schedules.id')
            ->select('schedules.*', 'schedules.id as id_schedules', 'schedules.created_at as create', 'data_trainers.*', 'data_trainers.id as id_trainer', 'data_kelas.*', 'data_laporans.*', 'schedules.dj_akhir as deadline')
            ->orderBy('create', 'DESC')
            ->paginate(10);

        $currentTime = now();

        foreach ($getDataSchedule as $schedule) {
            try {
                $startTime = new \DateTime($schedule->create);
            } catch (\Exception $e) {
                // Set to current time if start_time is not valid
                $startTime = $currentTime;
            }

            $duration = $schedule->deadline * 3600; // konversi jam ke detik

            // Hitung waktu yang tersisa
            $elapsedTime = $currentTime->getTimestamp() - $startTime->getTimestamp();
            $remainingTime = max(0, $duration - $elapsedTime);

            $schedule->timer_duration = $remainingTime;
        }

        $getDataTrainer = dataTrainer::orderBy('nama', 'asc')->get();

        return view('admin.build.pages.jadwal', compact('getDataSchedule', 'getDataTrainer'));
    }

    public function updateStatus($id_schedule)
    {
        try {
            $getSchedules = Schedules::findOrFail($id_schedule);
            $getSchedules->dj_akhir = 0;
            $getSchedules->ket = $getSchedules->ab_trainer === 'Hadir' ? 'Aktif' : 'Tidak Aktif';

            if ($getSchedules->ab_trainer !== 'Hadir') {
                $getSchedules->ab_trainer = 'Tidak Hadir';
            }

            $getSchedules->save();

            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Schedule not found.'], 404);
        }
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
        $message = 'Assalamualaikum Kak, ada jadwal nihh 😁👌, untuk infomasi lebih lanjut silahkan cek pada aplikasi subot atau bisa juga melalu webiste https://app.sukarobot.com/';

        if($getDataTrainer->telephone == null) {
            return response()->json(['success' => false, 'message' => 'Telephone tidak ada']);
        } else {
          // === api whatsApp === //
        $waApi = "https://api.whatsapp.com/send?phone={$getDataTrainer->telephone}&text={$message}";
        }

        // === send email schedule trainer == //
        if($getDataTrainer->email == null) {
            return response()->json(['success' => false, 'message' => 'Email tidak ada']);
        } else {
            $details = [
                'name' => $getDataTrainer->nama,
                'email' => $getDataTrainer->email,
                'message' => $message,
                'tanggal_jd' => $request->tanggal_jd,
                'jm_awal' => $request->jm_awal,
                'jm_akhir' => $request->jm_akhir,
                'dj_akhir' => $request->dj_akhir,
            ];

            // Kirim email ke alamat trainer
            Mail::to($getDataTrainer->email)->send(new Jadwal($details));
        }

        event(new ScheduleUpdated($request->all()));

        return redirect()->route('schedule.index')
        ->with('waApi',  $waApi);
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

    public function replace(Request $request, $id_schedules)
    {

        if ($id_schedules == null) {
            return response()->json(['status' => 404]);
        }

        $getDataTrainer = DataTrainer::where('id', $request->input('id_trainer'))->first();

        if($getDataTrainer->telephone == null) {

            return response()->json(['success' => false, 'message' => 'Telephone tidak ada']);

        } else {

            $message = 'Assalamualaikum Kak, ada pergantian jadwal nihh 😁👌, untuk infomasi lebih lanjut silahkan cek pada aplikasi subot atau bisa juga melalui website';
            // API WhatsApp URL
            $waApi = "https://wa.me/{$getDataTrainer->telephone}?text={$message}";

        }

        $getData = Schedules::where('id', $id_schedules)->firstOrFail();

        $getData->id_trainer = $request->input('id_trainer');
        $getData->save();

         return redirect()->back()->with('waApi', $waApi);
    }

    public function status(Request $request, $id_schedules)
    {
        try {
            $getDataSchedule = Schedules::where('id', $id_schedules)->firstOrFail();
            $getDataSchedule->ket = $request->input('status');
            $getDataSchedule->created_at = Carbon::now();
            $getDataSchedule->updated_at = Carbon::now();
            $getDataSchedule->save();

            return redirect()->back()->with('message', 'Status change has been successful');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Handle the case where the schedule is not found
            return redirect()->back()->with('error', 'Schedule not found');
        } catch (\Exception $e) {
            // Handle other potential exceptions
            return redirect()->back()->with('error', 'An error occurred');
        }
    }

    public function delete($id_schedules)
    {

        try {
            $getDataSchedule = Schedules::where('id', $id_schedules)->firstOrFail();

            // Hapus data di tabel BigData yang memiliki id_bigData yang sama
            BigData::where('id_bigData', $getDataSchedule->id_bigData)->delete();

            // Hapus data di tabel Schedules
            $getDataSchedule->delete();

            return redirect()->back()->with('message', 'Data has been deleted');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Tangani jika schedule tidak ditemukan
            return redirect()->back()->with('error', 'Schedule not found');
        } catch (\Exception $e) {
            // Tangani kemungkinan exception lainnya
            return redirect()->back()->with('error', 'An error occurred');
        }

    }

    public function editSchedule($id_schedules)
    {
        $getDataSchedule = DB::table('schedules')
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

        if ($getDataSchedule) {
            $getDataBig = BigData::where('id_bigData', $getDataSchedule->id_bigData)->pluck('id_siswa');

            // Dapatkan data siswa berdasarkan id_siswa dari hasil sebelumnya
            $getDataStudent = DataSiswa::whereIn('id', $getDataBig)->get();
            $hari = $getDataSchedule->hari;
            // Proses data lainnya
        } else {
            // Tangani kasus di mana data tidak ditemukan
            return response()->json(['error' => 'Data not found'], 404);
        }

        $getDataTrainer = dataTrainer::orderBy('nama', 'asc')->get();
        $getDataTools = DataAlat::orderBy('created_at', 'asc')->get();
        $getDataClass = DataKelas::orderBy('created_at', 'asc')->get();
        $getDataSchool = DataSekolah::orderBy('created_at', 'asc')->get();
        $getDataProgram = DataProgram::orderBy('created_at', 'asc')->get();
        $getDataLevel = DataLevel::orderBy('created_at', 'asc')->get();
        $getDataSiswa = DataSiswa::orderBy('nama_lengkap', 'asc')->get();

        return view('admin.build.components.jadwal.createScheduleEdit', compact('getDataTrainer', 'getDataClass', 'getDataTools', 'getDataProgram', 'getDataLevel', 'getDataSchool', 'getDataStudent', 'getDataSchedule', 'getDataSiswa'));
    }

    // prosses edited data schedule
    public function prossesEdit(Request $request, $id_schedule)
    {
        // Membuat kode unik id untuk relasi 2 tabel
        $getDataTrainer = DataTrainer::where('id', $request->input('id_trainer'))->first();
        $selectedSiswa = $request->input('id_siswa', []);
        if ($getDataTrainer === null) {
            return response()->json(['error' => 'Trainer tidak ditemukan'], 404);
        }
        $uniqueId = $this->generateUniqueId($getDataTrainer->nama);

        // Validasi input jika diperlukan
        // $validatedData = $request->validate([
        //     'id_trainer' => 'required',
        //     'id_alat' => 'required',
        //     'id_kelas' => 'required',
        //     'id_sekolah' => 'required',
        //     'id_level' => 'required',
        //     'id_program' => 'required',
        //     'hari' => 'required',
        //     'jm_awal' => 'required',
        //     'jm_akhir' => 'required',
        //     'pj_eskul' => 'required',
        //     'ket' => 'required',
        //     'dj_akhir' => 'required',
        //     'tanggal_jd' => 'required',
        //     'api_maps' => 'required',
        // ]);

        // Hasil validasi masuk ke tabel schedule
        $schedule = Schedules::findOrFail($id_schedule);
        if ($schedule === null) {
            return response()->json(['error' => 'Schedule tidak ditemukan'], 404);
        }
        $schedule->update([
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

        // Ambil data siswa yang ada di database
        $existingSiswa = BigData::where('id_bigData', $schedule->id_bigData)->pluck('id_siswa')->toArray();

        // Bandingkan data siswa lama dengan data siswa baru
        if (array_diff($selectedSiswa, $existingSiswa) || array_diff($existingSiswa, $selectedSiswa)) {
            // Hapus data siswa lama di tabel BigData
            BigData::where('id_bigData', $schedule->id_bigData)->delete();

            // Insert data siswa baru ke tabel BigData
            foreach ($selectedSiswa as $siswaId) {
                BigData::create([
                    'id_bigData' => $uniqueId,
                    'id_siswa' => $siswaId,
                ]);
            }
        }

        return redirect()->back()->with('message', 'You have successfully updated the trainer schedule');
    }
}
