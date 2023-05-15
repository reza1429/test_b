<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class KendaraanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tahun_keluaran' => $this->faker->year(),
            'warna' => $this->faker->safeColorName(),
            'harga' => $this->faker->randomElement(['diatas 100jt', 'dibawah 100jt']),
            //
        ];
    }
}
