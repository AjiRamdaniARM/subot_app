<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataLaporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_jadwal',
        'catatan',
        'id_materi',
        'id_ttd',
        'tanggal_lp',
        'jam_lp',
    ];
}
