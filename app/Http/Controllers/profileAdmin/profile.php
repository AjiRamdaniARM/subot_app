<?php

namespace App\Http\Controllers\profileAdmin;

use App\Http\Controllers\Controller;

class profile extends Controller
{
    public function index()
    {
        return view('admin.build.pages.profile');
    }
}
