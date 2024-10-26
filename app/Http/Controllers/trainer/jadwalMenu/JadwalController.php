<?php

namespace App\Http\Controllers\trainer\jadwalMenu;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index () {
        return view('trainer.pages.jadwalMenu.jadwal');
    }
}
