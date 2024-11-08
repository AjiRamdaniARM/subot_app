<?php

namespace App\Http\Controllers\trainer\akun;

use App\Http\Controllers\Controller;
use App\Models\dataTrainer;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function index()
    {
        return view('trainer.pages.profileAkun.index');
    }

    // === edited akun index === //
    public function edited()
    {
        $UserAccount = auth()->guard('trainer')->user();

        return view('trainer.pages.profileAkun.editedData', compact('UserAccount'));
    }

    // === post edited === //
    public function prosess(Request $request, $id)
    {
        // === Validate incoming request data === //
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'required|string|min:4',
            'alamat' => 'nullable|string',
            'lulusan' => 'nullable|string',
            'telephone' => 'required|numeric',
        ]);

        try {
            $user = dataTrainer::findOrFail($id);
            $user->nama = $request->nama;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->alamat = $request->alamat;
            $user->lulusan = $request->lulusan;
            $user->telephone = $request->telephone;

            if ($request->hasFile('ktp_file')) {
                $ktpFile = $request->file('ktp_file');

                // Buat nama file baru
                $ktpName = 'ktp_'.$user->nama.'.'.$ktpFile->getClientOriginalExtension();

                // Tentukan path untuk file
                $ktpPath = public_path('assets/trainer_data/ktp');

                // Buat direktori jika belum ada
                if (! file_exists($ktpPath)) {
                    mkdir($ktpPath, 0777, true);
                }

                // Hapus file lama jika ada
                if ($user->ktpPath && file_exists($ktpPath.'/'.$user->ktpPath)) {
                    unlink($ktpPath.'/'.$user->ktpPath);
                }

                // Pindahkan file baru ke direktori yang ditentukan
                $ktpFile->move($ktpPath, $ktpName);
                $user->ktp_file = $ktpName;
            }

            
            if ($request->hasFile('ttd')) {
                $ttd = $request->file('ttd');

                // Buat nama file baru
                $ttdName = 'Ttd_'.$user->nama.'.'.$ttd->getClientOriginalExtension();

                // Tentukan path untuk file
                $ttdPath = public_path('assets/trainer_data/ttd');

                // Buat direktori jika belum ada
                if (! file_exists($ttdPath)) {
                    mkdir($ttdPath, 0777, true);
                }

                // Hapus file lama jika ada
                if ($user->ttdPath && file_exists($ttdPath.'/'.$user->ttdPath)) {
                    unlink($ttdPath.'/'.$user->ttdPath);
                }

                // Pindahkan file baru ke direktori yang ditentukan
                $ttd->move($ttdPath, $ttdName);
                $user->ttd = $ttdName;
            }
           
            $user->save();

            return response()->json(['success' => true, 'message' => $request->ktp_file]);
        } catch (\Exception $e) {
            return response()->json(['success' => 'Gagal memperbarui data', 'error' => $e->getMessage()], 500);
        }

    }

    public function uploadProfile(Request $request, $id)
    {
        try {
            $user = dataTrainer::findOrFail($id);

            if ($request->hasFile('inputProfile')) {
                // Ambil file baru dari request
                $profileFile = $request->file('inputProfile');

                // Buat nama file baru
                $profileFileName = 'Profile_'.$user->nama.'.'.$profileFile->getClientOriginalExtension();

                // Tentukan path untuk file
                $profileFilePath = public_path('assets/trainer_data/profile');

                // Buat direktori jika belum ada
                if (! file_exists($profileFilePath)) {
                    mkdir($profileFilePath, 0777, true);
                }

                // Hapus file lama jika ada
                if ($user->profile && file_exists($profileFilePath.'/'.$user->profile)) {
                    unlink($profileFilePath.'/'.$user->profile);
                }

                // Pindahkan file baru ke direktori yang ditentukan
                $profileFile->move($profileFilePath, $profileFileName);

                // Update nama file di database
                $user->profile = $profileFileName;
                $user->save(); // Simpan perubahan ke database
            }

            return response()->json(['success' => true, 'message' => $request->inputProfile]);

        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to upload profile.', 'error' => $e->getMessage()]);
        }
    }
}
