<?php

// app/Http/Controllers/LaporanController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        // Daftar tanggal untuk laporan
        $laporanDates = [
            '01/01/2024',
            '02/01/2024',
            '03/01/2024',
            '04/01/2024',
            '05/01/2024',
            '06/01/2024',
            '07/01/2024',
            '08/01/2024',
            '09/01/2024',
            '10/01/2024',
            '11/01/2024',
            '12/01/2024',
            '13/01/2024',
            '14/01/2024',
            '15/01/2024',
        ];

        return view('content.laporan', compact('laporanDates'));
    }
}
