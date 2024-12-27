<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json(Product::all(), 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'kategori' => 'required|string|max:255',
        ]);

        $product = Product::create($validatedData);

        return response()->json($product, 201);
    }

    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Menu not found'], 404);
        }

        return response()->json($product, 200);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Menu not found'], 404);
        }

        $validatedData = $request->validate([
            'nama' => 'string|max:255',
            'harga' => 'numeric',
            'kategori' => 'string|max:255',
        ]);

        $product->update($validatedData);

        return response()->json($product, 200);
    }

    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Menu not found'], 404);
        }

        $product->delete();

        return response()->json(['message' => 'Menu deleted successfully'], 200);
    }
}