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
            'category' => 'required|in:Makanan, Minuman, Snack, Kopi',
            'harga_modal' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Proses upload gambar
        if ($request->hasFile('gambar')) {
            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->storeAs('public/menus', $fileName); // Simpan ke storage/app/public/menu
        } else {
            $fileName = null;
        }
        // $gambar = null;
        // if ($request->hasFile('gambar')) {
        //     $gambar = $request->file('gambar')->store('images', 'public');
        // }

        // Hitung persenan harga jual
        $persenan = (($request->harga_jual - $request->harga_modal) / $request->harga_modal) * 100;

        Menu::create([
            'nama_barang' => $request->nama_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'category' => $request->category,
            'harga_modal' => $request->harga_modal,
            'harga_jual' => $request->harga_jual,
            'persenan' => $persenan,
            'gambar' => $fileName,
        ]);

        return redirect()->route('content.daftarMenu')->with('success', 'Menu berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $menu = Menu::findOrFail($id); // Cari data menu berdasarkan ID
        return view('menu.edit', compact('menu')); // Tampilkan view edit
    }



    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'jumlah_barang' => 'required|integer',
            'harga_modal' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Cari menu berdasarkan ID
        $menu = Menu::findOrFail($id);

        // Update data menu
        $menu->update($validated);

        return redirect()->route('content.daftarMenu')->with('success', 'Menu berhasil diupdate!');
    }

    public function destroy($id)
    {
        // Cari menu berdasarkan ID
        $menu = Menu::findOrFail($id);

        // Hapus menu
        $menu->delete();

        return redirect()->back()->with('success', 'Menu berhasil dihapus!');
    }

    
    public function index()
    {
        $menus = Menu::all(); // Mengambil semua data menu dari database
        return view('content.daftarMenu', compact('menus')); // Mengirim data ke view
    }
    
    public function getMakanan()
    {
        $menus = Menu::where('category', 'Makanan')->get();
        return view('product.makanan', compact('menus'));
    }

    public function getMinuman()
    {
        $menus = Menu::where('category', 'Minuman')->get();
        return view('product.minuman', compact('menus'));
    }

    public function getSnack()
    {
        $menus = Menu::where('category', 'Snack')->get();
        return view('product.snack', compact('menus'));
    }

    public function getKopi()
    {
        $menus = Menu::where('category', 'Kopi')->get();
        return view('product.kopi', compact('menus'));
    }
}
