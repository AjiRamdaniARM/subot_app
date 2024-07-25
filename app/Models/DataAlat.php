<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataAlat extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_level',
        'alat',
    ];
}
