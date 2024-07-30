<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SchedulesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'hari' => 'required|string',
            'id_trainer' => 'required|integer',
            'id_kelas' => 'required|integer',
            'id_alat' => 'required|integer',
            'jm_awal' => 'required|date_format:H:i',
            'jm_akhir' => 'required|date_format:H:i|after:jm_awal',
            'pj_eskul' => 'required|string',
            'dj_akhir' => 'required|date_format:H:i',
            'tanggal_jd' => 'required|date',
            'ket' => 'required|string',
            'id_sekolah' => 'required|string',
            'id_program' => 'required|integer',
            'id_level' => 'required|integer',
            // 'api_maps' => 'required|string',
            'id_siswa' => 'required|array',
            'id_siswa.*' => 'integer',
        ];
    }

    public function messages()
    {
        return [
            'hari.required' => 'Hari wajib diisi.',
            'id_trainer.required' => 'ID Trainer wajib diisi.',
            'id_trainer.integer' => 'ID Trainer harus berupa angka.',
            'id_kelas.required' => 'ID Kelas wajib diisi.',
            'id_kelas.integer' => 'ID Kelas harus berupa angka.',
            'id_alat.required' => 'ID Alat wajib diisi.',
            'id_alat.integer' => 'ID Alat harus berupa angka.',
            'jm_awal.required' => 'Jam Awal wajib diisi.',
            'jm_awal.date_format' => 'Jam Awal harus dalam format HH:MM.',
            'jm_akhir.required' => 'Jam Akhir wajib diisi.',
            'jm_akhir.date_format' => 'Jam Akhir harus dalam format HH:MM.',
            'jm_akhir.after' => 'Jam Akhir harus setelah Jam Awal.',
            'pj_eskul.required' => 'Penanggung Jawab Eskul wajib diisi.',
            'dj_akhir.required' => 'DJ Akhir wajib diisi.',
            'dj_akhir.date_format' => 'DJ Akhir harus dalam format HH:MM.',
            'tanggal_jd.required' => 'Tanggal Jadwal wajib diisi.',
            'tanggal_jd.date' => 'Tanggal Jadwal harus berupa tanggal yang valid.',
            'ket.required' => 'Keterangan wajib diisi.',
            'id_sekolah.required' => 'ID Sekolah wajib diisi.',
            'id_program.required' => 'ID Program wajib diisi.',
            'id_program.integer' => 'ID Program harus berupa angka.',
            'id_level.required' => 'ID Level wajib diisi.',
            'id_level.integer' => 'ID Level harus berupa angka.',
            // 'api_maps.required' => 'API Maps wajib diisi.',
            'id_siswa.required' => 'ID Siswa wajib diisi.',
            'id_siswa.array' => 'ID Siswa harus berupa array.',
            'id_siswa.*.integer' => 'Setiap ID Siswa harus berupa angka.',
        ];
    }
}
