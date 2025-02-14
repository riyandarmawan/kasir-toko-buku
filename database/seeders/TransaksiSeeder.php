<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use App\Models\Transaksi;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaksi::factory(1)->create(['tanggal' => '2025-01-08 10:30:00', 'total_harga' => '270000', 'id_pengguna' => 2]);

        // Transaksi::factory(10)->recycle([Pengguna::all()])->create();
    }
}
