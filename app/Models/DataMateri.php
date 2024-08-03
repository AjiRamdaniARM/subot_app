<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMateri extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_level',
        'materi',
    ];
}
