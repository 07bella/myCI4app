<?php

namespace App\Controllers;

class Coba extends BaseController
{
    // Metode untuk menampilkan halaman utama
    public function index(): string
    {
        return view('belajar/coba');
    }

    // Metode untuk menampilkan halaman 'coba'
    public function coba(): string
    {
        return view('belajar/coba');
    }

    // Metode untuk menampilkan halaman 'pesan'
    public function pesan()
    {
        return view('belajar/pesan');
    }

    // Metode untuk menampilkan halaman 'tentangkami'
    public function tentangkami()
    {
        return view('belajar/tentangkami');
    }
}
