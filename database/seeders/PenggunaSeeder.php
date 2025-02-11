<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengguna::factory(1)->create(['username'=>'admin','role' => 'admin']);
        Pengguna::factory(1)->create(['username'=>'kasir','role' => 'kasir']);

        Pengguna::factory(10)->create();
    }
}
