<?php

namespace Database\Factories;

use App\Models\Buku;
use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DetailTransaksi>
 */
class DetailTransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_transaksi' => Transaksi::factory(),
            'id_buku' => Buku::factory(),
            'jumlah' => fake()->numberBetween(1, 10),
            'subtotal' => fake()->numberBetween(1000),
        ];
    }
}
