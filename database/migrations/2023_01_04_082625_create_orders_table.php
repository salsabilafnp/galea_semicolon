<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pesanan')->unique();
            $table->string('nama_pemesan');
            $table->string('nomor_hp');
            $table->string('alamat');
            $table->foreignId('id_produk');
            $table->integer('jumlah_produk');
            $table->integer('ongkir');
            $table->integer('total_bayar');
            $table->string('metode_bayar');
            $table->string('bukti_bayar');
            $table->string('status_pesanan')->default('Dikemas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
