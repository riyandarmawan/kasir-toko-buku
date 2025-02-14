<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buku::factory(1)->create(['kode_buku' => 'BK001', 'judul' => 'Pemograman Python', 'pengarang' => 'A. Sudrajat', 'penerbit' => 'Informatika', 'harga' => '120000', 'stok' => 50]);
        Buku::factory(1)->create(['kode_buku' => 'BK002', 'judul' => 'Dasar-Dasar Jaringan', 'pengarang' => 'B. Wibowo', 'penerbit' => 'Andi Publisher', 'harga' => '100000', 'stok' => 30]);
        Buku::factory(1)->create(['kode_buku' => 'BK003', 'judul' => 'Desain Grafis Modern', 'pengarang' => 'C. Ramadhan', 'penerbit' => 'Media Nusantara', 'harga' => '150000', 'stok' => 20]);

        // Buku::factory(10)->create();
    }
}
