<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        return response()->json(Pembayaran::all(), 200);
    }

    public function show($id)
    {
        $pembayaran = Pembayaran::find($id);

        if (!$pembayaran) {
            return response()->json(['message' => 'Pembayaran tidak ditemukan'], 404);
        }

        return response()->json($pembayaran, 200);
    }

    public function store(Request $request)
    {
        $pembayaran = Pembayaran::create($request->all());

        return response()->json(['message' => 'Pembayaran berhasil dicatat', 'data' => $pembayaran], 201);
    }

    public function update(Request $request, $id)
    {
        $pembayaran = Pembayaran::find($id);

        if (!$pembayaran) {
            return response()->json(['message' => 'Pembayaran tidak ditemukan'], 404);
        }

        $pembayaran->update($request->all());

        return response()->json(['message' => 'Pembayaran diperbarui', 'data' => $pembayaran], 200);
    }
}
?>
