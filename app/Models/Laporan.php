<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',       // Tanggal laporan
        'jumlah_pesanan', // Jumlah pesanan
        'total_pendapatan' // Total pendapatan
    ];
}
