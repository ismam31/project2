<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    
    public function create()
    {
        return view('menu.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'jumlah_barang' => 'required|integer',
            'harga_modal' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $gambar = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('images', 'public');
        }

        // Hitung persenan harga jual
        $persenan = (($request->harga_jual - $request->harga_modal) / $request->harga_modal) * 100;

        Menu::create([
            'nama_barang' => $request->nama_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'harga_modal' => $request->harga_modal,
            'harga_jual' => $request->harga_jual,
            'persenan' => $persenan,
            'gambar' => $gambar,
        ]);

        return redirect()->route('content.daftarMenu')->with('success', 'Menu berhasil ditambahkan.');
    }
    
    public function index()
    {
        $menus = Menu::all(); // Mengambil semua data menu dari database
        return view('content.daftarMenu', compact('menus')); // Mengirim data ke view
    }
}
