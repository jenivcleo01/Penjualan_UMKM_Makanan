<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderSummaryTable extends Migration
{
    public function up()
    {
        Schema::create('order_summary', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->foreignId('transaksi_id')->constrained('transaksis')->onDelete('cascade');
            $table->foreignId('pembayaran_id')->constrained('pembayarans')->onDelete('cascade');
            
            $table->integer('jumlah_produk');
            $table->decimal('total_transaksi', 12, 2);
            $table->decimal('total_dibayar', 12, 2);
            $table->string('status_transaksi');
            $table->string('status_pembayaran');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_summary');
    }
}
?>
