<?php

namespace App\Http\Controllers;

use App\Models\DataAlat;
use App\Models\DataKelas;
use App\Models\DataLevel;
use App\Models\DataProgram;
use App\Models\DataSekolah;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class bigDataController extends Controller
{
    public function index(): View
    {
        // kondisi perhitungan data
        $getDataSekolahCount = DataSekolah::all()->count();
        $activeCount = DataSekolah::where('status', 'isactive')->count();
        $activePercentage = ($activeCount / $getDataSekolahCount) * 100;

        $getDataProgram = DataProgram::all()->count();
        $getDataLevel = DataLevel::all()->count();
        $getDataKelas = DataKelas::all()->count();
        $getDataAlat = DataAlat::all()->count();

        // pemanggilan semua data
        $getSekolah = DataSekolah::orderBy('created_at', 'DESC')->paginate(6);
        $getDataPrograms = DataProgram::orderBy('created_at', 'DESC')->paginate(6);
        $getDataLevels = DataLevel::orderBy('created_at', 'DESC')->paginate(6);
        $getDataClass = DataKelas::orderBy('created_at', 'DESC')->paginate(6);
        $getDataTools = DataAlat::orderBy('created_at', 'DESC')->paginate(6);

        return view('admin.build.pages.bigData', compact('getDataSekolahCount', 'getDataTools', 'getDataClass', 'getDataLevels', 'getDataPrograms', 'activePercentage', 'getSekolah', 'getDataProgram', 'getDataLevel', 'getDataKelas', 'getDataAlat'));
    }

    public function storeProgram(Request $request)
    {
        $request->validate([
            'program' => 'required|string|min:2|max:255',
        ],
            [
                'program.required' => 'This data must be filled in',
            ]
        );
        $getData = new DataProgram();
        $getData->program = $request->input('program');
        $getData->save();

        return redirect()->back()->with('message', 'New Program Added Successfully');
    }

    public function storeLevel(Request $request)
    {
        $request->validate([
            'id_programs' => 'required',
            'level' => 'required|string|min:2|max:255',
        ],
            [
                'level.required' => 'This data must be filled in',
            ]
        );
        $getData = new DataLevel();
        $getData->id_programs = $request->input('id_programs');
        $getData->levels = $request->input('level');
        $getData->save();

        return redirect()->back()->with('message', 'New Level Added Successfully');
    }

    public function storeClass(Request $request)
    {
        $request->validate([
            'class' => 'required|string|min:2|max:255',
        ],
            [
                'class.required' => 'This data must be filled in',
            ]
        );
        $getData = new DataKelas();
        $getData->kelas = $request->input('class');
        $getData->save();

        return redirect()->back()->with('message', 'New Class Added Successfully');
    }

    public function storeTools(Request $request)
    {
        $request->validate([
            'id_level' => 'required',
            'tools' => 'required|string|min:2|max:255',
        ],
            [
                'tools.required' => 'This data must be filled in',
            ]
        );
        $getData = new DataAlat();
        $getData->id_level = $request->input('id_level');
        $getData->alat = $request->input('tools');
        $getData->save();

        return redirect()->back()->with('message', 'New Tools Added Successfully');
    }

    public function deleteSekolah($sekolah)
    {
        $getDataSekolah = DataSekolah::where('sekolah', $sekolah)->first();
        $getDataSekolah->delete();

        return redirect()->back()->with('message', 'The school data is successfully deleted');
    }

    public function editSekolah(Request $request, $sekolah)
    {
        $inputSekolah = DataSekolah::where('sekolah', $sekolah)->firstOrFail();
        $inputSekolah->sekolah = $request->sekolah;
        $inputSekolah->alamat = $request->alamat;
        $inputSekolah->status = $request->status;
        $inputSekolah->save();

        return redirect()->back()->with('message', 'School data is edited successfully');
    }

    public function deleteProgram($program) {
        $getDataProgram = DataProgram::where('program', $program)->first();
        $getDataProgram->delete();
        return redirect()->back()->with('message', 'Program deleted successfully');
    }

    public function editProgram(Request $request,$program) {
        $getDataProgram = DataProgram::where('program', $program)->firstOrFail();
        $getDataProgram -> program = $request->program;
        $getDataProgram -> save();

        return redirect()->back()->with('message', 'Program updated successfully');
    }
}
