<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class nodeWaApi extends Controller
{
    public function getQrCode()
    {
        $response = Http::get('http://localhost:3000/qr');
        return response()->json($response->json());
    }

    // Function to send message using Node.js server
    public function sendMessage(Request $request)
    {
        $data = $request->validate([
            'number' => 'required',
            'message' => 'required',
        ]);

        $response = Http::post('http://localhost:3000/send-message', $data);

        if ($response->successful()) {
            return response()->json(['success' => true, 'message' => 'Pesan berhasil dikirim!']);
        } else {
            return response()->json(['success' => false, 'message' => 'Gagal mengirim pesan.']);
        }
    }
    public function ViewWaApi () {
        return view('admin.build.pages.api.WhatsAppApi');
    }
}
