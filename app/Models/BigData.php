<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BigData extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_bigData',
        'id_kelas',
        'id_siswa',
    ];
}
