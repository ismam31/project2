<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function create()
    {
        return view('content.pemesanan');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'guest_count' => 'required|integer|min:1',
            'category' => 'required|in:Dine In,Take Away,Delivery',
            'table_number' => 'nullable|integer',
        ]);

        // Simpan data ke database
        Order::create([
            'name' => $request->input('name'),
            'guest_count' => $request->input('guest_count'),
            'category' => $request->input('category'),
            'table_number' => $request->input('table_number'),
        ]);

        $request->validate([
            'menu_id' => 'required|exists:menus,id',
        ]);
    
        // Ambil data menu berdasarkan ID
        $menu = Menu::findOrFail($request->menu_id);
    
        // Simpan ke tabel pemesanan
        Order::create([
            'menu_id' => $menu->id,
            'jumlah' => 1, // Default jumlah 1
            'total_harga' => $menu->harga_jual,
        ]);

        return redirect()->back()->with('success', 'Pesanan berhasil ditambahkan!');
    }


    public function index()
    {
        // Ambil semua data pesanan dari database
        $orders = Order::orderBy('created_at', 'desc')->get();

        // Kirim data ke view
        return view('content.pembayaran', compact('orders'));
    }

}
