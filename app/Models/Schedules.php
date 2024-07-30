<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_trainer',
        'id_box',
        'hari',
        'jm_awal',
        'jm_akhir',
        'id_bigData',
        'pj_eskul',
        'ket',
        'dj_awal',
        'dj_akhir',
        'tanggal_jd',
    ];
}
