<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak menggunakan konvensi
    protected $table = 'menus';

    // Tentukan kolom mana saja yang bisa diisi (fillable)
    protected $fillable = [
        'nama_barang',
        'jumlah_barang',
        'harga_modal',
        'harga_jual',
        'persenan',
        'gambar',
    ];

    // Menu.php
public function reports()
{
    return $this->hasMany(Report::class);
}

}
