<?php

namespace App\Http\Controllers\trainer\akun;

use App\Http\Controllers\Controller;
use App\Models\dataTrainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AkunController extends Controller
{
    public function index() {
        return view('trainer.pages.profileAkun.index');
    }

    // === edited akun index === //
    public function edited () {
        $UserAccount = auth()->guard('trainer')->user();
        return view('trainer.pages.profileAkun.editedData', compact('UserAccount'));
    }

    // === post edited === //
    public function prosess (Request $request, $id) {
        $userAccount = dataTrainer::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|max:255|min:4',
            'alamat' => 'required|string',
            'lulusan' => 'required|string|max:255',
            'telephone' => 'required|string|max:255|min:5',
        ]);

        if ($request->hasFile('profile')) {
            $profileFile = $request->file('profile');
            $profileFileName = 'Profile_'.$request->nama.'.'.$profileFile->getClientOriginalExtension();
            $profileFile->move(public_path('/assets/trainer_data/profile'), $profileFileName);
            $userAccount->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => $request->password, 
                'alamat' => $request->alamat,
                'lulusan' => $request->lulusan,
                'telephone' => $request->telephone,
                'profile' => $profileFileName,
            ]);
        } else {
            $userAccount->update($request->only('nama', 'email', 'password', 'alamat', 'lulusan', 'telephone','profileFile'));
        }
        return response()->json(['message' => 'User updated successfully']);
    }
}
