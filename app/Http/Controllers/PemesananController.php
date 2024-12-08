<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class PemesananController extends Controller
{
    public function index()
    {
        return view('pemesanan.index');
    }

    public function tambahMenu(Request $request)
    {
        $menu = $request->all();
        return response()->json(['menu' => $menu]);
    }

    public function getMakanan()
    {
        $menus = Menu::where('category', 'Makanan')->get();
        return view('pemesanan.index', compact('menus'));
    }

    public function getMinuman()
    {
        $menus = Menu::where('category', 'Minuman')->get();
        return view('pemesanan.index', compact('menus'));
    }

    public function getSnack()
    {
        $menus = Menu::where('category', 'Snack')->get();
        return view('pemesanan.index', compact('menus'));
    }

    public function getKopi()
    {
        $menus = Menu::where('category', 'Kopi')->get();
        return view('pemesanan.index', compact('menus'));
    }
}
