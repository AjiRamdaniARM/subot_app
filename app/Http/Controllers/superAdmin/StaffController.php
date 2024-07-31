<?php

namespace App\Http\Controllers\superAdmin;

use App\Http\Controllers\Controller;

class StaffController extends Controller
{
    public function index()
    {
        return view('admin.build.pages.dataStaff');
    }
}
