<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use App\Models\Transaksi;
use App\Models\Pembayaran;

class DashboardController extends Controller
{
    public function summary()
    {
        $data = [
            'total_produk'     => Product::count(),
            'total_pengguna'   => User::count(),
            'total_transaksi'  => Transaksi::count(),
            'total_pembayaran' => Pembayaran::count(),
            'pendapatan_total' => Pembayaran::sum('jumlah')
        ];

        return response()->json($data, 200);
    }
}
?>
