<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\dataTrainer;
use App\Models\dataTrainer as ModelsDataTrainer;
use Illuminate\Http\Request;

class DataTrainerController extends Controller
{
    public function index () {
        return view('admin.build.pages.trainer');
    }

    public function store(Request $request) {

          // Generate unique ID based on name
          $uniqueId = $this->generateUniqueId($request->nama);

        // validasi file ke public
        if($request ->hasFile('ktp_file')) {
            $ktpFile = $request->file('ktp_file');
            $ktpFileName = 'ktp_' . $request->nama . '.' . $ktpFile->getClientOriginalExtension();
            $ktpFile->move(public_path('/assets/trainer_data/ktp'), $ktpFileName);
        }

        if($request -> hasFile('profile')) {
            $profileFile = $request->file('profile');
            $profileFileName = 'Profile_' . $request->nama . '.' . $profileFile->getClientOriginalExtension();
            $profileFile->move(public_path('/assets/trainer_data/profile'), $profileFileName);
        }
        if($request -> hasFile('ttd')) {
            $ttdFile = $request->file('ttd');
            $ttdFileName = 'Ttd_' . $request->nama . '.' . $ttdFile->getClientOriginalExtension();
            $ttdFile->move(public_path('/assets/trainer_data/ttd'), $ttdFileName);
        }


       ModelsDataTrainer::create([
        'nama' => $request->nama,
        'ktp_file' => $ktpFileName,
        'alamat' => $request->alamat,
        'lulusan' => $request->lulusan,
        'profile' => $profileFileName,
        'ttd' => $ttdFileName,
        'id_card' =>$uniqueId
       ]);

        return response($request->all());
    }
    private function generateUniqueId($name)
    {
        // Ambil inisial dari nama (misal 3 karakter pertama)
        $initials = strtoupper(substr($name, 0, 3));

        // Buat ID unik
        $uniqueId = $initials . '-' . uniqid();

        // Pastikan ID unik
        while (ModelsDataTrainer::where('id', $uniqueId)->exists()) {
            $uniqueId = $initials . '-' . uniqid();
        }

        return $uniqueId;
    }
}
