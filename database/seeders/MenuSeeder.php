<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menus')->insert([
            [
                'nama_barang' => 'Nasi Goreng',
                'jumlah_barang' => 10,
                'category' => 'Makanan',
                'harga_modal' => 15000.00,
                'harga_jual' => 20000.00,
                'persenan' => 25.00,
                'gambar' => 'nasi_goreng.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Es Teh',
                'jumlah_barang' => 20,
                'category' => 'Minuman',
                'harga_modal' => 3000.00,
                'harga_jual' => 5000.00,
                'persenan' => 66.67,
                'gambar' => 'es_teh.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Keripik',
                'jumlah_barang' => 15,
                'category' => 'Snack',
                'harga_modal' => 8000.00,
                'harga_jual' => 10000.00,
                'persenan' => 25.00,
                'gambar' => 'keripik.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_barang' => 'Kopi Hitam',
                'jumlah_barang' => 5,
                'category' => 'Kopi',
                'harga_modal' => 12000.00,
                'harga_jual' => 15000.00,
                'persenan' => 25.00,
                'gambar' => 'kopi_hitam.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
