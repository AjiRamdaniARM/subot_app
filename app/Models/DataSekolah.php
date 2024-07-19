<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSekolah extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_sekolah',
        'sekolah',
        'alamat',
    ];

    public function siswa()
    {
        return $this->hasMany(DataSiswa::class, 'id_sekolah');
    }
}
