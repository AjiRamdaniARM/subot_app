<?php

namespace App\Http\Controllers\trainer;

use App\Http\Controllers\Controller;
use App\Http\Requests\TrainerLoginRequest;
use App\Models\dataTrainer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginTrainerController extends Controller
{
    public function index()
    {
        $getDataTrainer = DataTrainer::orderBy('nama', 'asc')->get();

        return view('trainer.trainerLogin', compact('getDataTrainer'));
    }

    public function loginTrainer(TrainerLoginRequest $request)
    {
        $credentials = [
            'id' => $request->id,
            'password' => $request->password,
        ];

        $trainer = dataTrainer::where('id', $request->id)
            ->where('password', $request->password)
            ->first();

        if ($trainer) {
            Auth::guard('trainer')->login($trainer, $request->filled('remember'));
            $request->session()->regenerate();

            return redirect()->intended(route('home'));
        } else {
            return back()->withErrors([
                'password' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    public function destroy(Request $request)
    {
          // Logout pengguna
          Auth::guard('trainer')->logout();

          // Hapus sesi
          $request->session()->invalidate();

          // Regenerasi token sesi
          $request->session()->regenerateToken();

          // Redirect setelah logout
          return redirect('/LoginTrainer'); // Gantilah dengan rute yang diinginkan
    }

    public function jadwalhari()
    {
        return view('trainer.pages.jadwalhari');
    }

    public function notifications()
    {
        return view('trainer.pages.notifications');
    }

    public function user()
    {
        return view('trainer.pages.user');
    }

    public function explore()
    {
        return view('trainer.pages.explore');
    }

    public function jadwal()
    {
        return view('trainer.pages.jadwal');
    }

    public function pesan()
    {
        return view('trainer.pages.pesan');
    }

    public function chat()
    {
        return view('trainer.pages.chat');
    }

    public function instruktur()
    {
        return view('trainer.pages.instruktur');
    }

    public function gallery()
    {
        return view('trainer.pages.gallery');
    }

    public function pembayaran()
    {
        return view('trainer.pages.pembayaran');
    }

    public function invoice()
    {
        return view('trainer.pages.invoice');
    }

    public function modul()
    {
        return view('trainer.pages.modul');
    }

    public function event()
    {
        return view('trainer.pages.event');
    }

    public function useredit()
    {
        return view('trainer.pages.useredit');
    }

    public function historyabsen()
    {
        return view('trainer.pages.historyabsen');
    }

    public function riwayattrainer()
    {
        return view('trainer.pages.riwayattrainer');
    }
}
