<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        // Di sini Anda dapat menambahkan logika yang diperlukan untuk tampilan dashboard
        // Misalnya, mengambil data dari database atau menampilkan pesan selamat datang

        return view('dashboard');
    }
}
