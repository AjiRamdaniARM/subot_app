<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'tl',
        'tanggal_lahir',
        'id_sekolah',
        'id_kelas',
        'nama_ortu',
        'work_ortu',
        'alamat',
        'telephone',
    ];

    public function sekolah()
    {
        return $this->belongsTo(DataSekolah::class, 'id_sekolah');
    }
}
