<?php

namespace App\Http\Controllers;

use App\Models\DataSekolah;
use App\Models\DataSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SistemKidsCoontroller extends Controller
{
    public function index()
    {
        $getDataKids = DB::table('data_siswas')
            ->join('data_sekolahs', 'data_siswas.id_sekolah', '=', 'data_sekolahs.id_sekolah')
            ->select('data_siswas.*', 'data_sekolahs.*')
            ->orderBy('data_siswas.nama_lengkap', 'asc') // Urutkan berdasarkan nama sekolah secara ascending (A ke Z)
            ->get();

        return view('admin.build.pages.dataKids', compact('getDataKids'));
    }

    // validasi data anak dari form pendaftaran ( Hosting ) 19 / 07 / 2024
    public function store(Request $request)
    {

        // validasi hasil input dan berikan meesage
        $request->validate([
            'nama_lengkap' => 'required|max:255|min:3',
            'tl' => 'required|max:255|min:3',
            // 'tanggal_lahir' => 'required',
            'sekolah' => 'required',
            'kelas' => 'required|max:255|min:1',
            'nama_ortu' => 'required|max:255|min:3',
            'telephone' => 'required|max:255|min:3',
            'work_ortu' => 'required|max:255|min:3',
            'alamat' => 'required|max:255|min:3',
            // 'file' => 'required|mimes:jpeg,png,pdf|max:5120',
        ], [
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

            'file.required' => 'Silakan pilih file untuk diunggah.',
            'file.mimes' => 'Tipe file harus berupa JPEG, PNG, atau PDF.',
            'file.max' => 'Ukuran file terlalu besar. Maksimum 5MB.',
        ]

        );

        // generate id random
        $uniqueId = $this->generateUniqueId($request->sekolah);
        $getSiswa = DataSiswa::where('nama_lengkap', $request->nama_lengkap)->first();
        if ($getSiswa) {
            // Lakukan penanganan jika data sudah ada, misalnya tampilkan pesan error atau lakukan tindakan lain
            return redirect()->back()->with('error', 'Data siswa dengan nama lengkap tersebut sudah ada.');
        } else {
            // validasi file ke public
            if ($request->hasFile('file')) {
                $dataFile = $request->file('file');
                $fileName = 'pasFoto_'.$request->nama_lengkap.'.'.$dataFile->getClientOriginalExtension();
                $dataFile->move(public_path('/assets/data/dataAnak/img'), $fileName);

                // get data hasil validasi dan masuk ke database
                $inputSekolah = new DataSekolah();
                $inputSekolah->id_sekolah = $uniqueId;
                $inputSekolah->sekolah = $request->sekolah;
                $inputSekolah->save();
                $validateDataKids = new DataSiswa();
                $validateDataKids->nama_lengkap = $request->nama_lengkap;
                $validateDataKids->tl = $request->tl;
                $validateDataKids->tanggal_lahir = $request->tanggal_lahir;
                $validateDataKids->id_sekolah = $uniqueId;
                $validateDataKids->kelas = $request->kelas;
                $validateDataKids->nama_ortu = $request->nama_ortu;
                $validateDataKids->work_ortu = $request->work_ortu;
                $validateDataKids->alamat = $request->alamat;
                $validateDataKids->telephone = $request->telephone;
                $validateDataKids->file = $fileName;
                $validateDataKids->save();

            } else {
                return response()->json(['error' => 'Tidak ada data pas foto']);
            }
        }

        // jikah sudah masuk lempar ke halaman selanjutnya
        return redirect()
            ->route('formulir.done')
            ->with('success', 'ujicoba');

    }

    public function storeAdmin(Request $request)
    {
        // validasi hasil input dan berikan meesage
        $request->validate([
            'nama_lengkap' => 'required|max:255|min:3',
            'tl' => 'required|max:255|min:3',
            // 'tanggal_lahir' => 'required',
            'sekolah' => 'required',
            'kelas' => 'required|max:255|min:1',
            'nama_ortu' => 'required|max:255|min:3',
            'telephone' => 'required|max:255|min:3',
            'work_ortu' => 'required|max:255|min:3',
            'alamat' => 'required|max:255|min:3',
            // 'file' => 'required|mimes:jpeg,png,pdf|max:5120',
        ], [
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

            'file.required' => 'Silakan pilih file untuk diunggah.',
            'file.mimes' => 'Tipe file harus berupa JPEG, PNG, atau PDF.',
            'file.max' => 'Ukuran file terlalu besar. Maksimum 5MB.',
        ]

        );

        // generate id random
        $uniqueId = $this->generateUniqueId($request->sekolah);
        $getSiswa = DataSiswa::where('nama_lengkap', $request->nama_lengkap)->first();
        if ($getSiswa) {
            // Lakukan penanganan jika data sudah ada, misalnya tampilkan pesan error atau lakukan tindakan lain
            return response()->json('berhasil');
        } else {
            // validasi file ke public
            if ($request->hasFile('file')) {
                $dataFile = $request->file('file');
                $fileName = 'pasFoto_'.$request->nama_lengkap.'.'.$dataFile->getClientOriginalExtension();
                $dataFile->move(public_path('/assets/data/dataAnak/img'), $fileName);

                // get data hasil validasi dan masuk ke database
                $inputSekolah = new DataSekolah();
                $inputSekolah->id_sekolah = $uniqueId;
                $inputSekolah->sekolah = $request->sekolah;
                $inputSekolah->save();
                $validateDataKids = new DataSiswa();
                $validateDataKids->nama_lengkap = $request->nama_lengkap;
                $validateDataKids->tl = $request->tl;
                $validateDataKids->tanggal_lahir = $request->tanggal_lahir;
                $validateDataKids->id_sekolah = $uniqueId;
                $validateDataKids->kelas = $request->kelas;
                $validateDataKids->nama_ortu = $request->nama_ortu;
                $validateDataKids->work_ortu = $request->work_ortu;
                $validateDataKids->alamat = $request->alamat;
                $validateDataKids->telephone = $request->telephone;
                $validateDataKids->file = $fileName;
                $validateDataKids->save();

            } else {
                return response()->json(['error' => 'Tidak ada data pas foto']);
            }
        }

        // jikah sudah masuk lempar ke halaman selanjutnya
        return redirect()
            ->back()
            ->with('success', 'successful child enrollment');
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

    public function delete($nama_lengkap)
    {
        $getRequest = DataSiswa::where('nama_lengkap', $nama_lengkap)->firstOrFail();
        $PasFoto = public_path('/assets/data/dataAnak/img');
        // Delete KTP file
        $PasFotos = $PasFoto.'/'.$getRequest->file;
        if (file_exists($PasFotos) && ! is_dir($PasFotos)) {
            unlink($PasFotos);
        }
        $getRequest->delete();

        return redirect()->back()->with('success', 'Trainer data has been deleted');
    }
}
