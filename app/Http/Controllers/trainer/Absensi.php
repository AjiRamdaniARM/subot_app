<?php

namespace App\Http\Controllers\trainer;

use App\Http\Controllers\Controller;
use App\Models\BigData;
use App\Models\Schedules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Absensi extends Controller
{

    public function test(){
        return view('trainer.pages.absen_siswa.index');
    }
    public function absensi(Request $request, $id)
    {
        $attendances = $request->input('attendance', []);

        $dataSchedule = Schedules::findOrFail($id);
        $dataSchedule->absensi_anak = 'tutup';
        $dataSchedule->save();

        foreach ($attendances as $id_siswa => $status) {
            $siswas = BigData::where('id_siswa', $id_siswa)->get(); // Mengambil semua record siswa berdasarkan ID
            foreach ($siswas as $siswa) { // Loop melalui setiap siswa yang ditemukan
                if ($siswa) {
                    $siswa->absensi_anak = $status; // Mengubah status absensi anak
                    // Tambahkan lebih banyak kolom yang perlu diupdate di sini
                    $siswa->save(); // Menyimpan perubahan pada siswa
                }
            }
        }

        return redirect('/home/absen/'.$id)->with('success', 'Data absensi berhasil diperbarui');
    }

    public function UpDrive(Request $request, $id_schedules)
    {
        // Mengambil data schedule berdasarkan ID
        $drive = Schedules::findOrFail($id_schedules);

        // Mengambil data terkait schedule dari berbagai tabel
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
            )
            ->first();

        // Memeriksa apakah ada file yang diunggah
        if (!$request->hasFile('file')) {
            // Jika tidak ada file, update dokumentasi menjadi 'Tidak'
            $drive->dokumentasi = 'Tidak';
            $drive->save();

            return redirect('laporantrainer/'.$id_schedules)->with('success', 'No file uploaded, status updated successfully.');
        } else {
            // Jika ada file, simpan file ke Google Drive dan update dokumentasi menjadi 'Ya'
            $drive->dokumentasi = 'Ya';
            $image = $request->file('file');

            // Memperbaiki nama file dengan menambahkan titik (.) sebelum ekstensi file
            $imageName = $getDataSchedule->trainer_name . '_' . $getDataSchedule->tanggal_jd . '.' . $image->getClientOriginalExtension();

            // Simpan file ke Google Drive
            Storage::disk('google')->put($imageName, File::get($image));

            // Update database
            $drive->save();

            return redirect('laporantrainer/'.$id_schedules)->with('success', 'File uploaded and status updated successfully.');
        }
    }

}
