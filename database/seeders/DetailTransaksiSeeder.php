<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\Transaksi;
use App\Models\DetailTransaksi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailTransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DetailTransaksi::factory(1)->create(['id_transaksi' => 1, 'id_buku' => 1, 'jumlah' => 1, 'subtotal' => '120000']);
        DetailTransaksi::factory(1)->create(['id_transaksi' => 1, 'id_buku' => 3, 'jumlah' => 1, 'subtotal' => '150000']);

        // DetailTransaksi::factory(10)->recycle([Transaksi::all(), Buku::all()])->create();
    }
}
