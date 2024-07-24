<?php

namespace App\Http\Controllers;

use App\Models\DataSekolah;
use Illuminate\Contracts\View\View;

class bigDataController extends Controller
{
    public function index(): View
    {

        // kondisi perhitungan data
        $getDataSekolahCount = DataSekolah::all()->count();
        $activeCount = DataSekolah::where('status', 'isactive')->count();
        $activePercentage = ($activeCount / $getDataSekolahCount) * 100;

        // pemanggilan semua data
        $getSekolah = DataSekolah::orderBy('created_at', 'DESC')->paginate(6);


        return view('admin.build.pages.bigData', compact('getDataSekolahCount','activePercentage','getSekolah'));
    }
}
