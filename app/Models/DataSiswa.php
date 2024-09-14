<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'status_siswa',
        'id_kelas',
        'nama_lengkap',
        'tl',
        'tanggal_lahir',
        'id_sekolah',
        'id_kelas',
        'nama_ortu',
        'work_ortu',
        'alamat',
        'telephone',
        'file',  // update hosting
    ];

    public function Datasekolah()
    {
        return $this->belongsTo(DataSekolah::class, 'id_sekolah');
    }
   public function getCreatedAtFormattedAtribute() {
    return $this->created_at->format('Y-m-d H:i:s');
   }
} 
