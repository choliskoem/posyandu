<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Posyandu;
use App\Models\Pemeriksaan;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPengguna = User::count();
        $totalJadwal = Posyandu::count();
        $totalPemeriksaan = Pemeriksaan::count();
        $notifikasi = 8; // Data contoh

        return view('dashboard', compact('totalPengguna', 'totalJadwal', 'totalPemeriksaan', 'notifikasi'));
    }
}
