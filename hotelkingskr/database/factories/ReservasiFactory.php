<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Guest;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservasi>
 */
class ReservasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // protected $fillable = ['id', 'notelp', 'email', 'nama', 'jumlahkamar', 'guest_id'];
            // 'id' => fake()->unique()->bothify('??##########'),
            'notelp' => fake()->unique()->numberBetween(1000000000, 9999999999),
            'nama' => fake()->name(),
            'email' => fake()->email(),
            'jumlahkamar' => fake()->numberBetween(1, 1000),
            'guest_id' => Guest::all()->random()->id,
        ];
    }
}
