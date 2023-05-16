<?php

namespace Database\Factories;

use App\Models\Kendaraan;
use Illuminate\Database\Eloquent\Factories\Factory;

class MobilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kendaraan_id' => Kendaraan::all()->random()->id,
            'mesin' => $this->faker->randomElement(['ICE', 'ECE']),
            'kapasitas_penumpang' => $this->faker->randomElement([1, 2, 5, 7]),
            'tipe' => $this->faker->randomElement(['SUV', 'MPV', 'Crossover', 'Hatchback', 'Sedan', 'Sport Sedan', 'Convertible', 'Station Wagon', 'Off road', 'Pickup Truck & Mobil Double Cabin', 'Mobil Elektrik', 'Hybrid', 'LCGC']),
            'status' => $this->faker->randomElement([0, 1]),
            //
        ];
    }
}
