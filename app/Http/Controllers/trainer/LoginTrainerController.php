<?php

namespace App\Http\Controllers\trainer;

use App\Http\Controllers\Controller;


class LoginTrainerController extends Controller
{
    public function index() {
        return view('auth.loginTrainer');
    }


}
