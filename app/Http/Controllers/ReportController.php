<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        // Contoh data laporan
        $reports = [
            ['name' => 'Cumi Asam Manis', 'quantity' => 6, 'total' => 170000],
            ['name' => 'Udang Saus Tiram', 'quantity' => 7, 'total' => 180000],
            ['name' => 'Cumi Bakar', 'quantity' => 8, 'total' => 150000],
            ['name' => 'Etong', 'quantity' => 6, 'total' => 170000],
            ['name' => 'Abangan', 'quantity' => 7, 'total' => 180000],
            ['name' => 'Alamkao', 'quantity' => 8, 'total' => 150000],
            ['name' => 'Udang Asam Manis', 'quantity' => 8, 'total' => 150000],
            ['name' => 'Udang Saus Padang', 'quantity' => 8, 'total' => 150000],
            ['name' => 'Udang Crispy', 'quantity' => 8, 'total' => 150000],
            ['name' => 'Kepiting Saus Tiram', 'quantity' => 8, 'total' => 150000],
            ['name' => 'Kepiting Asam Manis Telur', 'quantity' => 8, 'total' => 150000],
        ];

        return view('reports.laporan', compact('reports'));
    }
}
