<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class LaporanExport implements FromView, WithStyles, WithEvents
{
    protected $id_schedules;

    // Constructor untuk inisialisasi $id_schedules
    public function __construct($id_schedules)
    {
        $this->id_schedules = $id_schedules;
    }

    public function view(): View
    {
        // Fetching the laporan data
        $laporan = DB::table('schedules')
            ->where('schedules.id', $this->id_schedules)
            ->leftJoin('data_trainers', 'schedules.id_trainer', '=', 'data_trainers.id')
            ->leftJoin('data_kelas', 'schedules.id_kelas', '=', 'data_kelas.id')
            ->leftJoin('data_alats', 'schedules.id_alat', '=', 'data_alats.id')
            ->leftJoin('data_laporans', 'data_laporans.id_jadwal', '=', 'schedules.id')
            ->leftJoin('data_programs', 'schedules.id_program', '=', 'data_programs.id')
            ->leftJoin('data_levels', 'schedules.id_level', '=', 'data_levels.id')
            ->leftJoin('data_materis', 'data_laporans.id_materi', '=', 'data_materis.id')
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
                'data_programs.program',
                'data_programs.id as id_program',
                'data_levels.levels',
                'data_levels.id as id_level',
                'data_sekolahs.sekolah',
                'data_sekolahs.id_sekolah as id_sekolah',
                'data_laporans.*',
                'data_laporans.tanggal_lp',
                'data_laporans.jam_lp',
                'data_materis.materi',
                'data_materis.id as id_materi'
            )
            ->get();

        // === Initialize array to store data for students === //
        $getDataStudent = collect();

        // ===  Loop through each laporan item to fetch associated student data === //
        foreach ($laporan as $item) {
            $studentData = DB::table('big_data')
                ->where('big_data.id_bigData', $item->id_bigData ?? 0) // === Use null coalescing operator to avoid errors === //
                ->join('data_siswas', 'big_data.id_siswa', '=', 'data_siswas.id')
                ->select('big_data.*', 'data_siswas.*')
                ->get();

            // === Merge student data into a collection for all records === //
            $getDataStudent = $getDataStudent->merge($studentData);
        }

        return view('admin.build.exports.DataLaporanExport', [
            'laporan' => $laporan,
            'getDataStudent' => $getDataStudent,
        ]);
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => [
                'font' => ['bold' => true, 'color' => ['argb' => 'FFFFFFFF'], 'size' => 12],
                'fill' => ['fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID, 'color' => ['argb' => '4472C4']],
            ],
            'A1:N1000' => [
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    ],
                ],
            ],
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $columns = range('A', 'T');
                foreach ($columns as $column) {
                    $event->sheet->getDelegate()->getColumnDimension($column)->setAutoSize(true);
                }
            },
        ];
    }
}
