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
        DetailTransaksi::factory(10)->recycle([Transaksi::all(), Buku::all()])->create();
    }
}
