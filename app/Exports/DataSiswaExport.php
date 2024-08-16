<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class DataSiswaExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return DB::table('data_siswas')
            ->leftJoin('data_sekolahs', 'data_siswas.id_sekolah', '=', 'data_sekolahs.id_sekolah')
            ->leftJoin('data_kelas', 'data_siswas.id_kelas', '=', 'data_kelas.id')
            ->select('data_siswas.nama_lengkap', 'data_siswas.tl', 'data_siswas.tanggal_lahir', 'data_sekolahs.sekolah', 'data_siswas.kelas', 'data_siswas.nama_ortu', 'data_siswas.work_ortu', 'data_siswas.alamat', 'data_siswas.telephone', 'data_siswas.created_at', 'data_kelas.kelas')
            ->get();
    }
}
