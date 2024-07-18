<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function show()
    {
        return view('admin.build.pages.private');
    }

    public function checkPin(Request $request, $nama)
    {
        $request->validate([
            'pin' => 'required',
        ]);

        $correctPin = env('PRIVACY_PIN', '1234'); // simpan pin di .env

        if ($request->pin === $correctPin) {
            $request->session()->put('pin_verified', true);

            return redirect()->route('privacy.content');
        }

        return redirect('/privacy/'.$nama)->withErrors(['pin' => 'PIN yang dimasukkan salah.']);
    }

    public function content()
    {
        return view('privacy-content');
    }
}
