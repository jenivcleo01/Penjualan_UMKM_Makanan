<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        return response()->json(Transaksi::all(), 200);
    }

    public function show($id)
    {
        $transaksi = Transaksi::find($id);

        if (!$transaksi) {
            return response()->json(['message' => 'Transaksi tidak ditemukan'], 404);
        }

        return response()->json($transaksi, 200);
    }

    public function store(Request $request)
    {
        $transaksi = Transaksi::create($request->all());

        return response()->json(['message' => 'Transaksi berhasil dibuat', 'data' => $transaksi], 201);
    }

    public function update(Request $request, $id)
    {
        $transaksi = Transaksi::find($id);

        if (!$transaksi) {
            return response()->json(['message' => 'Transaksi tidak ditemukan'], 404);
        }

        $transaksi->update($request->all());

        return response()->json(['message' => 'Transaksi diperbarui', 'data' => $transaksi], 200);
    }
}
?>
