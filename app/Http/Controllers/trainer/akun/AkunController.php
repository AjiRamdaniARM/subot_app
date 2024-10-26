<?php

namespace App\Http\Controllers\trainer\akun;

use App\Http\Controllers\Controller;
use App\Models\dataTrainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        ]);
    
        $userAccount->update($request->only('nama', 'email'));
    
        return response()->json(['message' => 'User updated successfully']);
    }
}
