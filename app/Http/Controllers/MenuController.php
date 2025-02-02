<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Menu;

class MenuController extends Controller
{
    // Pembuatan menu
    public function create()
    {
        return view('daftarMenu.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required|string|max:255',
            'jumlah_barang' => 'required|integer',
            'category' => 'required|in:Makanan,Minuman,Snack,Kopi',
            'harga_modal' => 'required|numeric',
            'harga_jual' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ]);

        // Proses upload gambar
        $fileName = null;
        if ($request->hasFile('gambar')) {
            $fileName = $request->file('gambar')->store('menus', 'public');
        } else {
            dd('Gambar gak terdeteksi.');
        }

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

        return redirect()->route('daftarMenu.index')->with('success', 'Menu berhasil ditambahkan.');
    }


    // Update Menu

    public function edit($id)
    {
        $menu = Menu::findOrFail($id); // Cari data menu berdasarkan ID
        return view('daftarMenu.edit', compact('menu')); // Tampilkan view update
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        // dd('Masuk method update', $request->all());
        // $validated = $request->validate([
        //     'nama_barang' => 'required|string|max:255',
        //     'jumlah_barang' => 'required|integer',
        //     'category' => 'required|in:Makanan,Minuman,Snack,Kopi',
        //     'harga_modal' => 'required|numeric',
        //     'harga_jual' => 'required|numeric',
        //     'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);

        // Cari menu berdasarkan ID
        $menu = Menu::findOrFail($id);

        // Cek apakah file gambar ada
        $fileName = null;
        if ($request->hasFile('gambar')) {
            $fileName = $request->file('gambar')->store('menus', 'public');
        } else {
            // Gambar tidak terdeteksi
            dd('Gambar tidak terdeteksi.');
        }

        // Update data menu
        $menu->nama_barang = $request->nama_barang;
        $menu->jumlah_barang = $request->jumlah_barang;
        $menu->harga_modal = $request->harga_modal;
        $menu->harga_jual = $request->harga_jual;

        if ($fileName) {
            $menu->gambar = $fileName;
        }

        $menu->save();

        return redirect()->route('daftarMenu.index')->with('success', 'Menu berhasil diupdate!');
    }



    // Delete menuu

    public function destroy($id)
    {
        // Cari menu berdasarkan ID
        $menu = Menu::findOrFail($id);

        if ($menu->gambar) {
            Storage::disk('public')->delete($menu->gambar);
        }

        // Hapus menu
        $menu->delete();

        return redirect()->back();
    }

    
    public function index()
    {
        $menus = Menu::all(); // Mengambil semua data menu dari database
        return view('daftarMenu.index', compact('menus')); // Mengirim data ke view
    }
    public function menu()
    {
        $menus = Menu::all(); // Mengambil semua data menu dari database
        return view('menus', compact('menus')); // Mengirim data ke view
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

    public function reports()
    {
        return view('content.laporan', compact('laporanDates'));
    }


}