<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataTrainer extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'ktp_file',
        'alamat',
        'lulusan',
        'profile',
        'ttd',
        'id_card',
    ];
}
