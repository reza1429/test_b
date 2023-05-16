<?php

namespace Database\Factories;

use App\Models\Kendaraan;
use Illuminate\Database\Eloquent\Factories\Factory;

class MotorFactory extends Factory
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
            'mesin' => $this->faker->randomElement(['2-Tak', '4-Tak']),
            'tipe_suspensi' => $this->faker->randomElement(['Pararel Fork', 'Plunger Rear Suspension', 'Telescopic Fork', 'Telescopic Up Side Down', 'Swing Arm Rear Suspension']),
            'tipe_transmisi' => $this->faker->randomElement(['CVT', 'DCT']),
            'status' => $this->faker->randomElement([0, 1]),
            //
        ];
    }
}
