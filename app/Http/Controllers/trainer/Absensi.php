<?php

namespace App\Http\Controllers\trainer;

use App\Http\Controllers\Controller;
use App\Models\BigData;
use App\Models\Schedules;
use Illuminate\Http\Request;

class Absensi extends Controller
{
    public function absensi(Request $request, $id)
    {
        $attendances = $request->input('attendance', []);

        $dataSchedule = Schedules::findOrFail($id);
        $dataSchedule->absensi_anak = 'tutup';
        $dataSchedule->save();

        foreach ($attendances as $id_siswa => $status) {
            $siswa = BigData::where('id_siswa', $id_siswa)->firstOrFail();
            if ($siswa) {
                $siswa->absensi_anak = $status; // Pastikan field `attendance_status` ada di tabel `siswa`
                $siswa->save();
            }
        }

        return redirect('/home/absen/'.$id)->with('success', 'Data absensi berhasil diperbarui');
    }
}
