<?php

namespace App\Http\Controllers;

use App\Models\DataAlat;
use App\Models\DataKelas;
use App\Models\DataLevel;
use App\Models\DataMateri;
use App\Models\DataProgram;
use App\Models\DataSekolah;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $getDataMateri = DataMateri::all()->count();

        // pemanggilan semua data
        $getSekolah = DataSekolah::orderBy('created_at', 'DESC')->paginate(6, ['*'], 'schools_page');
        $getDataPrograms = DataProgram::orderBy('created_at', 'DESC')->paginate(6, ['*'], 'program');
        $getDataLevels = DB::table('data_levels')
            ->join('data_programs', 'data_levels.id_programs', '=', 'data_programs.id')
            ->select('data_levels.*', 'data_levels.id as id_levels', 'data_programs.*', 'data_programs.program as nama_program') // Pilih kolom yang ingin Anda ambil
            ->orderBy('data_levels.created_at', 'DESC')
            ->paginate(6, ['*'], 'level');


        $getDataMateri = DB::table('data_materis')
        ->join('data_levels', 'data_materis.id_level', '=', 'data_levels.id')
        ->select('data_materis.*', 'data_materis.id as id_materi', 'data_levels.*', 'data_levels.levels as nama_level') // Pilih kolom yang ingin Anda ambil
        ->orderBy('data_materis.created_at', 'DESC')
        ->paginate(6, ['*'], 'materi');

        $getDataClass = DataKelas::orderBy('created_at', 'DESC')->paginate(6, ['*'], 'kelas');
        $getDataTools = DB::table('data_alats')
            ->join('data_levels', 'data_alats.id_level', '=', 'data_levels.id')
            ->select('data_alats.*', 'data_alats.id as id_alats', 'data_levels.*', 'data_levels.levels as nama_level') // Pilih kolom yang ingin Anda ambil
            ->orderBy('data_alats.created_at', 'DESC')
            ->paginate(6, ['*'], 'alat');

        return view('admin.build.pages.bigData', compact('getDataSekolahCount', 'getDataTools', 'getDataClass', 'getDataLevels', 'getDataPrograms', 'activePercentage', 'getSekolah', 'getDataProgram', 'getDataLevel', 'getDataKelas', 'getDataAlat','getDataMateri'));
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

    public function storeMateri(Request $request) {
        $request->validate([
            'id_level' => 'required',
            'materi' => 'required|string|min:2|max:255',
        ],
            [
                'materis.required' => 'This data must be filled in',
            ]
        );
        $getData = new DataMateri();
        $getData->id_level = $request->input('id_level');
        $getData->materi = $request->input('materi');
        $getData->save();

        return redirect()->back()->with('message', 'New Materi Added Successfully');
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

    public function deleteProgram($program)
    {
        $getDataProgram = DataProgram::where('program', $program)->first();
        $getDataProgram->delete();

        return redirect()->back()->with('message', 'Program deleted successfully');
    }

    public function editProgram(Request $request, $program)
    {
        $getDataProgram = DataProgram::where('program', $program)->firstOrFail();
        $getDataProgram->program = $request->program;
        $getDataProgram->save();

        return redirect()->back()->with('message', 'Program updated successfully');
    }

    public function deleteLevel($levels)
    {
        $getDataLevels = DataLevel::where('levels', $levels)->first();
        $getDataLevels->delete();

        return redirect()->back()->with('message', 'Levels deleted successfully');
    }

    public function editLevel(Request $request, $levels)
    {

        if ($levels == null) {
            return response()->json(['error' => 'data levels tidak terdeteksi']);
        } else {
            $getDataLevels = DataLevel::where('levels', $levels)->firstOrFail();
            $getDataLevels->id_programs = $request->id_program;
            $getDataLevels->levels = $request->levels;
            $getDataLevels->save();

            return redirect()->back()->with('message', 'Levels edited successfully');
        }

    }

    public function deleteClass($kelas)
    {
        if ($kelas == null) {
            return response()->json(['error' => 'data class not found']);
        } else {
            $getDataClass = DataKelas::where('kelas', $kelas)->first();
            $getDataClass->delete();

            return redirect()->back()->with('message', 'Class deleted successfully');
        }

    }

    public function editClass(Request $request, $kelas)
    {
        if ($kelas == null) {
            return response()->json(['error' => 'class not found']);
        } else {
            $getDataClass = DataKelas::where('kelas', $kelas)->firstOrFail();
            $getDataClass->kelas = $request->kelas;
            $getDataClass->save();

            return redirect()->back()->with('message', 'success edited class');
        }

    }

    public function deleteTools($alat)
    {
        if ($alat == null) {
            return response()->json(['error' => 'Error']);
        } else {
            $getDataTools = DataAlat::where('alat', $alat)->first();
            $getDataTools->delete();

            return redirect()->back()->with('message', 'Tools deleted successfully');
        }
    }

    public function editTools(Request $request, $alat)
    {
        if ($alat == null) {
            return response()->json(['error' => 'class not found']);
        } else {
            $getDataTools = DataAlat::where('alat', $alat)->firstOrFail();
            $getDataTools->id_level = $request->id_levels;
            $getDataTools->alat = $request->tools;
            $getDataTools->save();

            return redirect()->back()->with('message', 'success edited class');
        }
    }

    public function deleteMateri ($materi){
        if ($materi == null) {
            return response()->json(['error' => 'Error materi prosses']);
        } else {
            $getDataTools = DataMateri::where('materi', $materi)->first();
            $getDataTools->delete();

            return redirect()->back()->with('message', 'Materi deleted successfully');
        }
    }
}
