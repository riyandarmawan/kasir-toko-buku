<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_buku' => fake()->unique()->numerify('######-######-######'),
            'judul' =>fake()->words(3, true),
            'pengarang' => fake()->name(),
            'penerbit' => fake()->words(1, true),
            'harga' => fake()->numberBetween(1000),
            'stok' => fake()->numberBetween(0, 100),
        ];
    }
}
