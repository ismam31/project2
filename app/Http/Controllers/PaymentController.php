<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        // Data simulasi menu dan subtotal (bisa diganti dengan data dari database)
        $menu = [
            ['name' => 'Etong', 'price' => 70000],
            ['name' => 'Kerang Ajaib', 'price' => 300000],
        ];
        $subtotal = array_sum(array_column($menu, 'price'));

        return view('pembayaran.index', compact('menu', 'subtotal'));
    }

    public function processPayment(Request $request)
    {
        $request->validate([
            'payment_method' => 'required',
        ]);

        // Proses penyimpanan data pembayaran (simulasi)
        $paymentData = [
            'subtotal' => $request->subtotal,
            'discount' => $request->discount ?? 0,
            'total' => $request->subtotal - ($request->discount ?? 0),
            'payment_method' => $request->payment_method,
        ];

        // Simpan ke database jika diperlukan

        return response()->json([
            'status' => 'success',
            'message' => 'Pembayaran berhasil diproses.',
            'data' => $paymentData,
        ]);
    }
}
