<?php

namespace App\Http\Controllers\admin;

use App\Exports\CustomLaporanExport;
use App\Exports\LaporanExport;
use App\Http\Controllers\Controller;
use App\Models\BigData;
use App\Models\DataMateri;
use App\Models\DataSiswa;
use App\Models\dataTrainer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromArray;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use Twilio\Rest\Client;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class LaporanTrainer extends Controller
{
    public function index(Request $request)
    {
        $startDate = $request->query('start_date');
        $endDate = $request->query('end_date');

        $query = DB::table('schedules')
            ->leftJoin('data_kelas', 'schedules.id_kelas', '=', 'data_kelas.id')
            ->leftJoin('data_trainers', 'schedules.id_trainer', '=', 'data_trainers.id')
            ->leftJoin('data_laporans', 'data_laporans.id_jadwal', '=', 'schedules.id')
            ->leftJoin('data_programs', 'schedules.id_program', '=', 'data_programs.id')
            ->select('schedules.*', 'schedules.id as id_schedules', 'data_trainers.*', 'data_trainers.id as id_trainer', 'data_kelas.*', 'data_laporans.*', 'data_trainers.nama as nama_trainer', 'data_programs.*', 'data_programs.id as id_program', 'schedules.created_at as create')
            ->where('ab_trainer', 'Hadir')
            ->orderBy('create', 'DESC');

        if ($startDate && $endDate) {
            $query->whereBetween('schedules.tanggal_jd', [$startDate, $endDate]);
        }

        $schedules = $query->get();

        return view('admin.build.pages.dataLaporanTrainer', compact('schedules'));
    }

    public function laporan($id_schedules)
    {
        $schedules = DB::table('schedules')
            ->where('schedules.id', $id_schedules)
            ->leftJoin('data_trainers', 'schedules.id_trainer', '=', 'data_trainers.id')
            ->leftJoin('data_kelas', 'schedules.id_kelas', '=', 'data_kelas.id')
            ->leftJoin('data_alats', 'schedules.id_alat', '=', 'data_alats.id')
            ->leftJoin('data_laporans', 'data_laporans.id_jadwal', '=', 'schedules.id')
            ->leftJoin('data_programs', 'schedules.id_program', '=', 'data_programs.id')
            ->leftJoin('data_levels', 'schedules.id_level', '=', 'data_levels.id')
            ->leftJoin('data_sekolahs', 'schedules.id_sekolah', '=', 'data_sekolahs.id_sekolah')
            ->select(
                'schedules.*',
                'schedules.id as id_schedules',
                'schedules.created_at as created_at_jd',
                'data_trainers.*',
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
                'data_sekolahs.*',
                'data_laporans.*'

                // tambahkan kolom lainnya sesuai kebutuhan
            )
            ->first();

        if ($schedules) {
            $getDataStudent = DB::table('big_data')
                ->where('big_data.id_bigData', $schedules->id_bigData)
                ->join('data_siswas', 'big_data.id_siswa', '=', 'data_siswas.id')
                ->select('big_data.*', 'data_siswas.*')
                ->get();
            $hari = $schedules->hari;
            // Proses data lainnya
        } else {
            // Tangani kasus di mana data tidak ditemukan
            return response()->json(['error' => 'Data not found'], 404);
        }
        $getMateri = DataMateri::where('id', $schedules->id_materi)->first();

        return view('admin.build.components.laporanTrainer.laporanTrainer', compact('schedules', 'getMateri', 'getDataStudent'));
    }

    public function filterSchedule(Request $request)
    {
        $startDate = Carbon::parse($request->query('start_date'))->format('Y-m-d');
        $endDate = Carbon::parse($request->query('end_date'))->format('Y-m-d');

        $schedules = DB::table('schedules')
            ->leftJoin('data_kelas', 'schedules.id_kelas', '=', 'data_kelas.id')
            ->leftJoin('data_trainers', 'schedules.id_trainer', '=', 'data_trainers.id')
            ->leftJoin('data_laporans', 'data_laporans.id_jadwal', '=', 'schedules.id')
            ->leftJoin('data_programs', 'schedules.id_program', '=', 'data_programs.id')
            ->select('schedules.*', 'schedules.id as id_schedules', 'data_trainers.*', 'data_trainers.id as id_trainer', 'data_kelas.*', 'data_laporans.*', 'data_trainers.nama as nama_trainer', 'data_programs.*',
                'data_programs.id as id_program', )
            ->whereBetween('tanggal_jd', [$startDate, $endDate])
            ->get();

        return response()->json($schedules);
    }
    public function excel($id_schedules)
    {

        return Excel::download(new LaporanExport($id_schedules), 'laporan_'.$id_schedules.'.xlsx');
    }
    public function customLaporan(Request $request) {
        // === get data trainer report === //
        $trainerId = $request->input('trainer_id');
        $startDate = Carbon::parse($request->query('start_date'))->format('Y-m-d');
        $endDate = Carbon::parse($request->query('end_date'))->format('Y-m-d');

        $schedules = DB::table('schedules')
        ->leftJoin('data_kelas', 'schedules.id_kelas', '=', 'data_kelas.id')
        ->leftJoin('data_trainers', 'schedules.id_trainer', '=', 'data_trainers.id')
        ->leftJoin('data_laporans', 'data_laporans.id_jadwal', '=', 'schedules.id')
        ->leftJoin('data_programs', 'schedules.id_program', '=', 'data_programs.id')
        ->select(
            'schedules.*',
            'schedules.id as id_schedules',
            'data_trainers.*',
            'data_trainers.id as id_trainer',
            'data_kelas.*',
            'data_laporans.*',
            'data_trainers.nama as nama_trainer',
            'data_programs.*',
            'data_programs.id as id_program'
        )
        ->whereBetween('schedules.tanggal_jd', [$startDate, $endDate]) // Filter tanggal
        // Cek apakah user memilih 'all' atau trainer tertentu
        ->when($trainerId != 'all', function ($query) use ($trainerId) {
            return $query->where('data_trainers.id', $trainerId);
        })
        ->get();


        $query = DB::table('schedules')
        ->leftJoin('data_kelas', 'schedules.id_kelas', '=', 'data_kelas.id')
        ->leftJoin('data_trainers', 'schedules.id_trainer', '=', 'data_trainers.id')
        ->leftJoin('data_laporans', 'data_laporans.id_jadwal', '=', 'schedules.id')
        ->leftJoin('data_programs', 'schedules.id_program', '=', 'data_programs.id')
        ->select(
            'data_trainers.id as id_trainer',
            'data_trainers.nama as nama_trainer',
            DB::raw('COUNT(data_laporans.id) as total_laporan')
        )
        ->where('ab_trainer', 'Hadir')
        ->groupBy('data_trainers.id', 'data_trainers.nama')
        ->orderBy('nama_trainer', 'ASC')
        ->get();
        // === get trainer === //
        $getTrainer = dataTrainer::orderBy('nama', 'asc')->get();
        return view('admin.build.components.laporan.customLaporan', compact('query','getTrainer','schedules'));
    }
    public function exportCustom(Request $request)
{
    $trainerId = $request->input('trainer_id');
    $startDate = $request->input('start_date');
    $endDate = $request->input('end_date');
    $selectedFields = $request->input('fields');
    $query = DB::table('schedules')
        ->leftJoin('data_trainers', 'schedules.id_trainer', '=', 'data_trainers.id')
        ->leftJoin('data_laporans', 'data_laporans.id_jadwal', '=', 'schedules.id')
        ->leftJoin('data_kelas', 'schedules.id_kelas', '=', 'data_kelas.id')
        ->leftJoin('data_programs', 'schedules.id_program', '=', 'data_programs.id')
        ->leftJoin('data_levels', 'schedules.id_level', '=', 'data_levels.id')
        ->leftJoin('data_alats', 'schedules.id_alat', '=', 'data_alats.id')
        ->leftJoin('data_materis', 'data_laporans.id_materi', '=', 'data_materis.id')
        ->leftJoin('big_data', 'schedules.id_bigData', '=', 'big_data.id_bigData')
        ->leftJoin('data_siswas', 'big_data.id_siswa', '=', 'data_siswas.id')
        ->select(array_merge(
            $selectedFields,
            ['data_siswas.nama_lengkap'],
            ['big_data.absensi_anak']
        ))
        ->whereBetween('schedules.tanggal_jd', [$startDate, $endDate]);

    if ($trainerId !== 'all' && !empty($trainerId)) {
        $query->where('schedules.id_trainer', $trainerId);
    }

    $results = $query->get();

    $templatePath = public_path('assets/template/template001.xlsx');
    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($templatePath);
    $sheet = $spreadsheet->getActiveSheet();

    $row = 10;
    foreach ($results as $data) {
        // == data nama traine mengajar == //
        if(isset($data->nama)) {
            $sheet->setCellValue('A' . $row, $data->nama);
        }

        // == data hari mengajar == //
        if(isset($data->hari)) {
            $sheet->setCellValue('B' . $row, $data->hari);
        }

        // == data kelas mengajar == //
        if (isset($data->kelas)) {
            $sheet->setCellValue('C' . $row, $data->kelas);
        }

        // == data program mengajar == //
        if (isset($data->program)) {
            $sheet->setCellValue('D' . $row, $data->program);
        }

        // == data level mengajar == //
        if (isset($data->levels)) {
            $sheet->setCellValue('E' . $row, $data->levels);
        }

        // == data alat mengajar == //
        if (isset($data->alat)) {
            $sheet->setCellValue('F' . $row, $data->alat);
        }

        // == data pj eskul mengajar == //
        if (isset($data->pj_eskul)) {
            $sheet->setCellValue('G' . $row, $data->pj_eskul);
        }

        // == data jam awal mengajar == //
        if (isset($data->jm_awal)) {
            $sheet->setCellValue('H' . $row, $data->jm_awal);
        }

        // == data jam akhir mengajar == //
        if (isset($data->jm_akhir)) {
            $sheet->setCellValue('I' . $row, $data->jm_akhir);
        }

        // == data tanggal jadwal mengajar == //
        if (isset($data->tanggal_jd)) {
            $sheet->setCellValue('J' . $row, $data->tanggal_jd);
        }

        // == data catatan mengajar == //
        if (isset($data->catatan)) {
            $sheet->setCellValue('K' . $row, $data->catatan);
        }

        // == data tanggal absen mengajar == //
        if (isset($data->tanggal_lp)) {
            $sheet->setCellValue('L' . $row, $data->tanggal_lp);
        }

        // == data jam absen mengajar == //
        if (isset($data->jam_lp)) {
            $sheet->setCellValue('M' . $row, $data->jam_lp);
        }

        // == data materi mengajar == //
        if (isset($data->materi)) {
            $sheet->setCellValue('N' . $row, $data->materi);
        }

        // == data siswa mengajar == //
        if (isset($data->nama_lengkap)) {
            $sheet->setCellValue('O' . $row, $data->nama_lengkap);
        }

        // == data absensi anak mengajar == //
        if (isset($data->absensi_anak)) {
            $sheet->setCellValue('P' . $row, $data->absensi_anak);
        }


        $row++;
    }
    $writer = new Xlsx($spreadsheet);
    $filename = 'Custom_laporan.xlsx';
    $tempFilePath = storage_path('app/public/' . $filename);
    $writer->save($tempFilePath);

    return response()->download($tempFilePath)->deleteFileAfterSend(true);
}
public function importExcel(Request $request)
{
    $request->validate([
        'fileExcel' => 'required|mimes:xlsx,xls|max:2048',
    ]);

    if ($request->file('fileExcel')) {
        $file = $request->file('fileExcel');
        $fileName = $file->getClientOriginalName();
        $destinationPath = public_path('assets/template');
        $file->move($destinationPath, $fileName);
        return response()->json([
            'success' => true,
            'message' => 'File uploaded successfully!',
            'fileName' => $fileName
        ]);

    }

    return response()->json(['error' => 'No file uploaded.'], 400);
}



}
