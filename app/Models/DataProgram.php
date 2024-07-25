<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataProgram extends Model
{
    use HasFactory;

    protected $fillable = [
        'program',
    ];
}
