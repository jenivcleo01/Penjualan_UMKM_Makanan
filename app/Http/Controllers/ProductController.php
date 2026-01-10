<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // GET semua produk
    public function index()
    {
        return response()->json(Product::all(), 200);
    }

    // GET produk berdasarkan ID
    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }

        return response()->json($product, 200);
    }

    // POST tambah produk
    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return response()->json(['message' => 'Produk berhasil ditambahkan', 'data' => $product], 201);
    }

    // PUT update produk
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }

        $product->update($request->all());

        return response()->json(['message' => 'Produk berhasil diperbarui', 'data' => $product], 200);
    }

    // DELETE hapus produk
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Produk tidak ditemukan'], 404);
        }

        $product->delete();

        return response()->json(['message' => 'Produk berhasil dihapus'], 200);
    }
}
?>
