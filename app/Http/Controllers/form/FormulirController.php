<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Controller;
use App\Models\DataKelas;
use App\Models\DataSekolah;
use Illuminate\Support\Facades\Request;

class FormulirController extends Controller
{
    public function index()
    {
        $getData = DataSekolah::orderBy('created_at', 'DESC')->get();
        $getDataKelas = DataKelas::orderBy('created_at', 'DESC')->get();
        return view('FormulirPendaftaran', compact('getData', 'getDataKelas'));
    }

    public function done()
    {
        return view('FormulirDone');
    }

    // === formulir trainer === //
    public function trainer()
    {
        return view('trainerCreate');
    }
    public function postTrainerData(Request $request)
    {
        $getData = $request->all();
    }
}
