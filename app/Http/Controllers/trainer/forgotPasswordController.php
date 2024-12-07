<?php

namespace App\Http\Controllers\trainer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class forgotPasswordController extends Controller
{
    public function index () {
        return view('trainer.pages.forgot_password.verifikasiEmail');
    }

    public function forgotIndex () {
        return view('trainer.pages.forgot_password.editedPasswordTrainer');
    }

    
}
