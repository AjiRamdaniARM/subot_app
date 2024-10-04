<?php

namespace App\Http\Controllers\form;

use App\Http\Controllers\Controller;
use App\Models\DataKelas;
use App\Models\DataSekolah;
use App\Models\dataTrainer;
use Illuminate\Http\Request;

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

        // validasi file ke public
        if ($request->hasFile('ktpFileInput')) {
            $ktpFile = $request->file('ktpFileInput');
            $ktpFileName = 'ktp_'.$request->nama.'.'.$ktpFile->getClientOriginalExtension();
            $ktpFile->move(public_path('/assets/trainer_data/ktp'), $ktpFileName);
        }

        if ($request->hasFile('pasPotoInput2')) {
            $profileFile = $request->file('pasPotoInput2');
            $profileFileName = 'Profile_'.$request->nama.'.'.$profileFile->getClientOriginalExtension();
            $profileFile->move(public_path('/assets/trainer_data/profile'), $profileFileName);
        }
        if ($request->hasFile('pasPotoInput3')) {
            $ttdFile = $request->file('pasPotoInput3');
            $ttdFileName = 'Ttd_'.$request->nama.'.'.$ttdFile->getClientOriginalExtension();
            $ttdFile->move(public_path('/assets/trainer_data/ttd'), $ttdFileName);
        }

        $request -> validate([
            'nama' => 'required|string|max:255|unique:data_trainers,nama',

        ],[
            'nama.unique' => 'Nama sudah ada di database, tidak bisa diinput lagi.',
        ]);

        dataTrainer::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'ktp_file' => $ktpFileName,
            'alamat' => $request->alamat,
            'lulusan' => $request->lulusan,
            'telephone' => $request->telephone,
            'profile' => $profileFileName,
            'ttd' => $ttdFileName,
            'password' => $request->password,
        ]);

        return redirect()->route('done.form');
    }

    public function trainerDone()
    {
        $getTrainer = dataTrainer::orderBy('created_at', 'desc')->get();
        return view('trainerDone',compact('getTrainer'));
    }
}
