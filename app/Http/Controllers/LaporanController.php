<?php

// app/Http/Controllers/LaporanController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan; // Pastikan model ini ada

class LaporanController extends Controller
{
    public function index()
    {
        // Ambil data laporan dari database
        $laporans = Laporan::all(); // Bisa gunakan paginate() jika data banyak
        return view('laporan.index', compact('laporans'));

        return view('content.laporan', compact('laporanDates'));
    }
}
