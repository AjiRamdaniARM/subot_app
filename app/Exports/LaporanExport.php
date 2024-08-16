<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

class LaporanExport implements FromCollection, WithEvents
{
    protected $id_schedules;

    public function __construct($id_schedules)
    {
        $this->id_schedules = $id_schedules;
    }

    public function collection()
    {
        return DB::table('schedules')
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
                'data_programs.*',
                'data_programs.id as id_program',
                'data_levels.*',
                'data_levels.id as id_level',
                'data_sekolahs.*',
                'data_laporans.*',
                'data_laporans.tanggal_lp',
                'data_laporans.jam_lp',
                'data_materis.*'
            )
            ->get();
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $sheet = $event->sheet->getDelegate();
                $templatePath = public_path('assets/data/TemplateTrainer.xlsx');

                // Muat template
                $template = IOFactory::load($templatePath);
                $templateSheet = $template->getActiveSheet();

                // Copy template ke sheet yang aktif
                foreach ($templateSheet->getRowIterator() as $row) {
                    foreach ($row->getCellIterator() as $cell) {
                        $sheet->setCellValue($cell->getCoordinate(), $cell->getValue());
                    }
                }

                // Isi data dari collection ke sheet
                $startRow = 7; // Misalnya data dimulai dari baris ke-2, setelah header
                foreach ($this->collection() as $index => $data) {
                    $sheet->setCellValue('C'.($startRow + $index), $data->trainer_name);
                    $sheet->setCellValue('D'.($startRow + $index), $data->tanggal_lp);
                    $sheet->setCellValue('E'.($startRow + $index), $data->jam_lp);
                    $sheet->setCellValue('F'.($startRow + $index), $data->materi);
                    $sheet->setCellValue('G'.($startRow + $index), $data->kelas_name);
                    $sheet->setCellValue('H'.($startRow + $index), $data->nama_alat);
                    $sheet->setCellValue('I'.($startRow + $index), $data->program);
                    $sheet->setCellValue('J'.($startRow + $index), $data->levels);
                    $sheet->setCellValue('K'.($startRow + $index), $data->sekolah);
                    $sheet->setCellValue('L'.($startRow + $index), $data->catatan);
                    // Tambahkan kolom lainnya sesuai dengan kebutuhan
                }
            },
        ];
    }
}
