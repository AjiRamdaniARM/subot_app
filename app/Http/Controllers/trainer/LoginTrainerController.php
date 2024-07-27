<?php

namespace App\Http\Controllers\trainer;

use App\Http\Controllers\Controller;

class LoginTrainerController extends Controller
{
    public function index()
    {
        return view('trainer.trainerLogin');
    }
    public function home()
    {
        return view('trainer.pages.home');
    }
    public function absen()
    {
        return view('trainer.pages.absen');
    }
    public function laporantrainer()
    {
        return view('trainer.pages.laporantrainer');
    }
    public function jadwalhari()
    {
        return view('trainer.pages.jadwalhari');
    }
    public function notifications()
    {
        return view('trainer.pages.notifications');
    }
    public function user()
    {
        return view('trainer.pages.user');
    }
    public function explore()
    {
        return view('trainer.pages.explore');
    }
    public function jadwal()
    {
        return view('trainer.pages.jadwal');
    }
    public function absensiswa()
    {
        return view('trainer.pages.absensiswa');
    }
    public function pesan()
    {
        return view('trainer.pages.pesan');
    }
    public function chat()
    {
        return view('trainer.pages.chat');
    }

    public function instruktur()
    {
        return view('trainer.pages.instruktur');
    }
    public function gallery()
    {
        return view('trainer.pages.gallery');
    }
    public function pembayaran()
    {
        return view('trainer.pages.pembayaran');
    }

    public function invoice()
    {
        return view('trainer.pages.invoice');
    }
    public function modul()
    {
        return view('trainer.pages.modul');
    }
    public function event()
    {
        return view('trainer.pages.event');
    }
    public function useredit()
    {
        return view('trainer.pages.useredit');
    }
    public function historyabsen()
    {
        return view('trainer.pages.historyabsen');
    }
}
