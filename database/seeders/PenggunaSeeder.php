<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengguna::factory(1)->create(['username'=>'admin', 'password' => Hash::make('admin123'),'role' => 'admin']);
        Pengguna::factory(1)->create(['username'=>'kasir1', 'password' => Hash::make('kasir123'),'role' => 'kasir']);

        // Pengguna::factory(10)->create();
    }
}
