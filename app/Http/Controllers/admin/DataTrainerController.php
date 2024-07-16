<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\dataTrainer as ModelsDataTrainer;
use Illuminate\Http\Request;

class DataTrainerController extends Controller
{
    public function index()
    {
        $getTrainerData = ModelsDataTrainer::orderBy('nama', 'asc')->get();

        return view('admin.build.pages.trainer', compact('getTrainerData'));
    }

    public function dataPrivate($nama)
    {
        $getTrainerData = ModelsDataTrainer::where('nama', $nama)->first();

        return view('admin.build.pages.private', compact('getTrainerData'));
    }

    public function store(Request $request)
    {

        // Generate unique ID based on name
        $uniqueId = $this->generateUniqueId($request->nama);

        // validasi file ke public
        if ($request->hasFile('ktp_file')) {
            $ktpFile = $request->file('ktp_file');
            $ktpFileName = 'ktp_'.$request->nama.'.'.$ktpFile->getClientOriginalExtension();
            $ktpFile->move(public_path('/assets/trainer_data/ktp'), $ktpFileName);
        }

        if ($request->hasFile('profile')) {
            $profileFile = $request->file('profile');
            $profileFileName = 'Profile_'.$request->nama.'.'.$profileFile->getClientOriginalExtension();
            $profileFile->move(public_path('/assets/trainer_data/profile'), $profileFileName);
        }
        if ($request->hasFile('ttd')) {
            $ttdFile = $request->file('ttd');
            $ttdFileName = 'Ttd_'.$request->nama.'.'.$ttdFile->getClientOriginalExtension();
            $ttdFile->move(public_path('/assets/trainer_data/ttd'), $ttdFileName);
        }

        ModelsDataTrainer::create([
            'nama' => $request->nama,
            'ktp_file' => $ktpFileName,
            'alamat' => $request->alamat,
            'lulusan' => $request->lulusan,
            'telephone' => $request->telephone,
            'profile' => $profileFileName,
            'ttd' => $ttdFileName,
            'id_card' => $uniqueId,
        ]);

        return redirect()->back()->with('success', 'trainer data has been entered');
    }

    private function generateUniqueId($name)
    {
        // Ambil inisial dari nama (misal 3 karakter pertama)
        $initials = strtoupper(substr($name, 0, 3));

        // Buat ID unik
        $uniqueId = $initials.'-'.uniqid();

        // Pastikan ID unik
        while (ModelsDataTrainer::where('id', $uniqueId)->exists()) {
            $uniqueId = $initials.'-'.uniqid();
        }

        return $uniqueId;
    }

    public function edited(Request $request, $nama)
    {

        $getRequest = ModelsDataTrainer::where('nama', $nama)->firstOrFail();
        $getRequest->nama = $request->nama;
        // validasi file
        if ($request->hasFile('ktp_file')) {
            // Ambil file baru dari request
            $ktpFile = $request->file('ktp_file');

            // Buat nama file baru
            $ktpFileName = 'ktp_'.$request->nama.'.'.$ktpFile->getClientOriginalExtension();

            // Tentukan path untuk file lama dan file baru
            $ktpFilePath = public_path('/assets/trainer_data/ktp');
            $ktpOldFile = $ktpFilePath.'/'.$request->ktp_file_old; // Sesuaikan dengan nama lama dan ekstensi lama

            // Hapus file lama jika ada
            if (file_exists($ktpOldFile)) {
                unlink($ktpOldFile);
            }

            // Pindahkan file baru ke lokasi yang ditentukan
            $ktpFile->move($ktpFilePath, $ktpFileName);
            $getRequest->ktp_file = $ktpFileName;
        }

        $getRequest->alamat = $request->alamat;
        $getRequest->lulusan = $request->lulusan;
        $getRequest->telephone = $request->telephone;

        if ($request->hasFile('profile')) {
            // Ambil file baru dari request
            $profileFile = $request->file('profile');

            // Buat nama file baru
            $profileFileName = 'Profile_'.$request->nama.'.'.$profileFile->getClientOriginalExtension();

            // Tentukan path untuk file lama dan file baru
            $profileFilePath = public_path('/assets/trainer_data/profile');
            $profileOldFile = $profileFilePath.'/'.$request->profile_file_old; // Sesuaikan dengan nama lama dan ekstensi lama

            // Hapus file lama jika ada
            if (file_exists($profileOldFile)) {
                unlink($profileOldFile);
            }

            // Pindahkan file baru ke lokasi yang ditentukan
            $profileFile->move($profileFilePath, $profileFileName);
            $getRequest->profile = $profileFileName;
        }

        if ($request->hasFile('ttd')) {
            // Ambil file baru dari request
            $ttdFile = $request->file('ttd');

            // Buat nama file baru
            $ttdFileName = 'Ttd_'.$request->nama.'.'.$ttdFile->getClientOriginalExtension();

            // Tentukan path untuk file lama dan file baru
            $ttdFilePath = public_path('/assets/trainer_data/ttd');
            $ttdOldFile = $ttdFilePath.'/'.$request->ttd_file_old; // Sesuaikan dengan nama lama dan ekstensi lama

            // Hapus file lama jika ada
            if (file_exists($ttdOldFile)) {
                unlink($ttdOldFile);
            }

            // Pindahkan file baru ke lokasi yang ditentukan
            $ttdFile->move($ttdFilePath, $ttdFileName);
            $getRequest->ttd = $ttdFileName;
        }

        $getRequest->save();

        return redirect()->back()->with('success', 'trainer data has been edited');

    }

    public function delete($nama)
    {
        $getRequest = ModelsDataTrainer::where('nama', $nama)->firstOrFail();

        $ktpFilePath = public_path('/assets/trainer_data/ktp');
        $profileFilePath = public_path('/assets/trainer_data/profile');
        $ttdFilePath = public_path('/assets/trainer_data/ttd');

        // Delete KTP file
        $ktpFile = $ktpFilePath.'/'.$getRequest->ktp_file;
        if (file_exists($ktpFile) && ! is_dir($ktpFile)) {
            unlink($ktpFile);
        }

        // Delete profile file
        $profileFile = $profileFilePath.'/'.$getRequest->profile;
        if (file_exists($profileFile) && ! is_dir($profileFile)) {
            unlink($profileFile);
        }

        // Delete TTD file
        $ttdFile = $ttdFilePath.'/'.$getRequest->ttd;
        if (file_exists($ttdFile) && ! is_dir($ttdFile)) {
            unlink($ttdFile);
        }

        // Delete database record
        $getRequest->delete();

        return redirect()->back()->with('success', 'Trainer data has been deleted');
    }
}
