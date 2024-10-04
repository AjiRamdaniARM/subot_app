<?php

namespace App\Http\Controllers\trainer\subotAcademy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class auth extends Controller
{
    public function index () {
        return view('trainer.auth.index');
    }
}
