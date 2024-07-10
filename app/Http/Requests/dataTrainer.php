<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class dataTrainer extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'nama' => 'required|string|max:255',
            'ktp_file' => 'required|file|mimes:jpg,png,pdf|max:2048',
            'alamat' => 'required|string|max:255',
            'lulusan' => 'required|string|max:255',
            'profile' => 'required|file|mimes:jpg,png,pdf|max:2048',
            'ttd' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama wajib diisi.',
            'ktp_file.required' => 'File KTP wajib diunggah.',
            'ktp_file.mimes' => 'File KTP harus berupa jpg, png, atau pdf.',
            'ktp_file.max' => 'Ukuran file KTP tidak boleh lebih dari 2MB.',
            'alamat.required' => 'Alamat wajib diisi.',
            'lulusan.required' => 'Lulusan wajib diisi.',
            'profile.required' => 'Profil wajib diunggah.',
            'profile.mimes' => 'File profil harus berupa jpg, png, atau pdf.',
            'profile.max' => 'Ukuran file profil tidak boleh lebih dari 2MB.',
            'ttd.required' => 'Tanda tangan wajib diunggah.',
            'ttd.mimes' => 'File tanda tangan harus berupa jpg, png, atau pdf.',
            'ttd.max' => 'Ukuran file tanda tangan tidak boleh lebih dari 2MB.',
        ];
    }
}
