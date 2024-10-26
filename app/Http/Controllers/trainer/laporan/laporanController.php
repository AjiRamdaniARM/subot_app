<?php

namespace App\Http\Controllers\trainer\laporan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class laporanController extends Controller
{
    public function index() {
        return view('trainer.pages.laporanTrainer.index');
    }
}
