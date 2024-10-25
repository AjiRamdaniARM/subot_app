<?php

namespace App\Http\Controllers\trainer\akun;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function index() {
        return view('trainer.pages.profileAkun.index');
    }

    // === edited akun index === //
    public function edited () {
        return view('trainer.pages.profileAkun.editedData');
    }

    // === post edited === //
    public function prosess () {
        
    }
}
