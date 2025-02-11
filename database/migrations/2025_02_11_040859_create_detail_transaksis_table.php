<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_transaksis', function (Blueprint $table) {
            $table->id();
            $table->integer('id_transaksi');
            $table->integer('id_buku');
            $table->integer('jumlah');
            $table->decimal('subtotal', 8, 2);
            $table->timestamps();

            $table->foreign('id_transaksi')->references('id')->on('transaksis')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_buku')->references('id')->on('bukus')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksis');
    }
};
