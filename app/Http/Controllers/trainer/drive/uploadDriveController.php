<?php

namespace App\Http\Controllers\trainer\drive;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Schedules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

class uploadDriveController extends Controller
{
    public function index($id) {
        return view('trainer.pages.google_drive.index',compact('id'));
    }
    public function DriveUploaded(Request $request, $id)
    {
        $drive = Schedules::findOrFail($id);
        $getDataSchedule = DB::table('schedules')
            ->where('schedules.id', $id)
            ->leftJoin('data_trainers', 'schedules.id_trainer', '=', 'data_trainers.id')
            ->leftJoin('data_kelas', 'schedules.id_kelas', '=', 'data_kelas.id')
            ->leftJoin('data_alats', 'schedules.id_alat', '=', 'data_alats.id')
            ->leftJoin('data_programs', 'schedules.id_program', '=', 'data_programs.id')
            ->leftJoin('data_levels', 'schedules.id_level', '=', 'data_levels.id')
            ->leftJoin('data_sekolahs', 'schedules.id_sekolah', '=', 'data_sekolahs.id_sekolah')
            ->select(
                'schedules.*',
                'schedules.id as id',
                'data_trainers.nama as trainer_name',
                'data_trainers.id as id_trainer',
                'data_kelas.kelas as kelas_name',
                'data_kelas.id as id_kelas',
                'data_alats.alat as nama_alat',
                'data_alats.id as id_alat',
                'data_programs.*',
                'data_programs.id as id_program',
                'data_levels.*',
                'data_levels.id as id_level',
                'data_sekolahs.*'
            )
            ->first();

         if (!$request->hasFile('file')) {
             $drive->dokumentasi = 'Tidak';
             $drive->save();
             return redirect('laporantrainer/'.$id)->with('success', 'No file uploaded, status updated successfully.');
         } else {
            foreach ($request->file('file') as $key => $image) {
                $drive->dokumentasi = 'Ya';
                $imageName = $getDataSchedule->trainer_name . '_' . $getDataSchedule->tanggal_jd . '_' . $key . '.' . $image->getClientOriginalExtension();
                $localPath = storage_path('app/public/file_s/' . $imageName);
                $image->move(storage_path('app/public/file_s/'), $imageName);
                ImageOptimizer::optimize($localPath);
                Storage::disk('google')->put($imageName, File::get($localPath));  
                File::delete($localPath);
            }
            
            
           
             return redirect()->back()->with('success', 'uploaded image successfully');
         }
    }

}
