<?php

namespace App\Http\Controllers;

use App\Models\DataKelas;
use App\Models\DataSekolah;
use App\Models\DataSiswa;
use Illuminate\Http\Request;

class SistemKidsCoontroller extends Controller
{
    public function index()
    {
        $getDataKids = DataSiswa::all();
        return view('admin.build.pages.dataKids', compact('getDataKids'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|max:255|min:3',
            'tl' => 'required|max:255|min:3',
            // 'tanggal_lahir' => 'required',
            'sekolah' => 'required',
            'kelas' => 'required|max:255|min:3',
            'nama_ortu' => 'required|max:255|min:3',
            'telephone' => 'required|max:255|min:3',
            'work_ortu' => 'required|max:255|min:3',
            'alamat' => 'required|max:255|min:3',
        ],[
            'nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'nama_lengkap.max' => 'Nama lengkap maksimal 255 karakter.',
            'nama_lengkap.min' => 'Nama lengkap minimal 3 karakter.',

            'ttl.required' => 'Tanggal lahir wajib diisi.',
            'ttl.max' => 'Tanggal lahir maksimal 255 karakter.',
            'ttl.min' => 'Tanggal lahir minimal 3 karakter.',


            'sekolah.required' => 'Nama sekolah wajib diisi.',
            'sekolah.max' => 'Nama sekolah maksimal 255 karakter.',
            'sekolah.min' => 'Nama sekolah minimal 3 karakter.',

            'kelas.required' => 'Kelas wajib diisi.',
            'kelas.max' => 'Kelas maksimal 255 karakter.',
            'kelas.min' => 'Kelas minimal 3 karakter.',

            'nama_ortu.required' => 'Nama orang tua wajib diisi.',
            'nama_ortu.max' => 'Nama orang tua maksimal 255 karakter.',
            'nama_ortu.min' => 'Nama orang tua minimal 3 karakter.',

            'telephone.required' => 'Nomor telepon wajib diisi.',
            'telephone.max' => 'Nomor telepon maksimal 255 karakter.',
            'telephone.min' => 'Nomor telepon minimal 3 karakter.',

            'work_ortu.required' => 'Pekerjaan orang tua wajib diisi.',
            'work_ortu.max' => 'Pekerjaan orang tua maksimal 255 karakter.',
            'work_ortu.min' => 'Pekerjaan orang tua minimal 3 karakter.',

            'alamat.required' => 'Alamat wajib diisi.',
            'alamat.max' => 'Alamat maksimal 255 karakter.',
            'alamat.min' => 'Alamat minimal 3 karakter.',
        ]

    );


        $uniqueId = $this->generateUniqueId($request->sekolah);

        $inputSekolah = New DataSekolah();
        $inputSekolah -> id_sekolah = $uniqueId;
        $inputSekolah -> sekolah = $request->sekolah;
        $inputSekolah -> save();
        $validateDataKids = New DataSiswa();
        $validateDataKids -> nama_lengkap = $request->nama_lengkap;
        $validateDataKids -> tl = $request->tl;
        $validateDataKids -> tanggal_lahir = $request->tanggal_lahir;
        $validateDataKids -> id_sekolah =$uniqueId;
        $validateDataKids -> kelas = $request->kelas;
        $validateDataKids -> nama_ortu = $request->nama_ortu;
        $validateDataKids -> work_ortu = $request->work_ortu;
        $validateDataKids -> alamat = $request->alamat;
        $validateDataKids -> telephone = $request->telephone;
        $validateDataKids -> save();

        return redirect()
        ->route('formulir.done')
        ->with('success','ujicoba');

    }

    private function generateUniqueId($sekolah)
    {
        // Ambil inisial dari nama (misal 3 karakter pertama)
        $initials = strtoupper(substr($sekolah, 0, 3));

        // Buat ID unik
        $uniqueId = $initials.'-'.uniqid();

        // Pastikan ID unik
        while (DataSekolah::where('id_sekolah', $uniqueId)->exists()) {
            $uniqueId = $initials.'-'.uniqid();
        }

        return $uniqueId;
    }

}
