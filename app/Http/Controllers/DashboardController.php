<?php

namespace App\Http\Controllers;

use App\Models\DataAlat;
use App\Models\DataKelas;
use App\Models\DataLaporan;
use App\Models\DataLevel;
use App\Models\DataProgram;
use App\Models\DataSekolah;
use App\Models\DataSiswa;
use App\Models\dataTrainer;
use App\Models\Schedules;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function getDataSiswaPerTahun(Request $request)
    {
        $tahun = $request->query('tahun', date('Y')); // Ambil tahun dari request, default tahun sekarang
        // === get data count for chart === //
        $getSiswaMonth = DataSiswa::selectRaw('MONTH(created_at) as `month`, COUNT(*) as count')
        ->whereYear('created_at', $tahun)
        ->groupBy('month')
        ->pluck('count', 'month')->toArray();

        // === Mengisi data bulan yang kosong menjadi 0 === //
        $months = range(1, 12);
        $siswaPerBulan = [];

        foreach ($months as $month) {
        // Jika bulan tidak ada di hasil query, isikan 0
        $siswaPerBulan[$month] = $getSiswaMonth[$month] ?? 0;
        }

        // Data untuk chart sesuai bulan, tanpa akumulasi
        $resultArray = array_values($siswaPerBulan);

        // Return data sebagai JSON untuk digunakan di AJAX
        return response()->json($resultArray);
    }

    public function index($tahun = null)
    {
        // === get data all active === //
        $getDataTrainerCount = dataTrainer::where('status_trainer', 'Aktif')->count();
        $getDataTrainerCountNonActive = dataTrainer::where('status_trainer', 'Tidak Aktif')->count();
        $getDataSekolahActive = dataSekolah::where('status', 'isactive')->count();
        $getDataSekolahNonActive = dataSekolah::where('status', 'nonactive')->count();
        $getDataSiswasActive = DataSiswa::where('status_siswa', 'Aktif')->count();
        $getDataSiswasNonActive = DataSiswa::where('status_siswa', 'Tidak Aktif')->count();
        $getDataLaporan = DataLaporan::count();
        // === non active count === //
        $getDataProgram = DataProgram::count();
        $getDataLevels = DataLevel::count();
        $getDataKelas = DataKelas::count();
        $getDataAlats = DataAlat::count();
        $getDataSchedules = Schedules::count();

        $tahun = $tahun ?? Carbon::now()->year;

        // === get data count sekolah === //
        $getDataSekolah = DataSekolah::selectRaw('MONTH(created_at) as `month`, COUNT(*) as count')
            ->whereYear('created_at', Carbon::now()->year)
            ->groupBy('month')
            ->pluck('count', 'month')->toArray();
        // === mengisi data bulan yang tidak menjadi 0 === //
        $months = range(1, 12);
        $sekolahPerbulan = [];

       foreach ($months as $month) {
       // Jika bulan tidak ada di hasil query, isikan 0
       $sekolahPerbulan[$month] = $getDataSekolah[$month] ?? 0;
       }
       $resultArraySekolah = array_values($sekolahPerbulan);

        // === get data count for chart === //
        $getSiswaMonth = DataSiswa::selectRaw('MONTH(created_at) as `month`, COUNT(*) as count')
        ->whereYear('created_at', Carbon::now()->year)
        ->groupBy('month')
        ->pluck('count', 'month')->toArray();

        // === Mengisi data bulan yang kosong menjadi 0 === //
        $months = range(1, 12);
        $siswaPerBulan = [];

        foreach ($months as $month) {
        // Jika bulan tidak ada di hasil query, isikan 0
        $siswaPerBulan[$month] = $getSiswaMonth[$month] ?? 0;
        }

        // Data untuk chart sesuai bulan, tanpa akumulasi
        $resultArray = array_values($siswaPerBulan);


        return view('admin.build.index', compact('getDataTrainerCount', 'getDataSekolahActive', 'getDataSekolahNonActive', 'getDataSiswasActive', 'getDataLaporan', 'getDataProgram', 'getDataLevels', 'getDataKelas', 'getDataAlats', 'getDataSchedules', 'getDataTrainerCountNonActive', 'getDataSiswasNonActive', 'siswaPerBulan', 'resultArray', 'resultArraySekolah', 'sekolahPerbulan'));
    }
}
