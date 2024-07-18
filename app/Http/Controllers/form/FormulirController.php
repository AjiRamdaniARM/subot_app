<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Controller;

class FormulirController extends Controller
{
    public function index()
    {
        return view('FormulirPendaftaran');
    }

    public function done()
    {
        return view('FormulirDone');
    }
}
