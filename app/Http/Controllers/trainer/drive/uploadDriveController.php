<?php

namespace App\Http\Controllers\trainer\drive;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class uploadDriveController extends Controller
{
    public function index() {
        return view('trainer.pages.google_drive.index');
    }
}
