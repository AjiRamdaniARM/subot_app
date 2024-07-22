<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Controller;
use App\Models\DataSekolah;

class FormulirController extends Controller
{
    public function index()
    {
        $getData = DataSekolah::orderBy('created_at', 'DESC')->get();
        return view('FormulirPendaftaran', compact('getData'));
    }

    public function done()
    {
        return view('FormulirDone');
    }
}
