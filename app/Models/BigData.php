<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BigData extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_bigData',
        'id_sekolah',
        'id_level',
        'id_siswa',
        'id_program',
        'api_maps',
    ];
}
