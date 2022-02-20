<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\VehicleDetail;
use App\Models\baggageSpace;

class BaggageSpaceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BaggageSpace::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vehicleDetails_id' => VehicleDetail::factory(),
            'large' => $this->faker->numberBetween(0, 4),
            'medium' => $this->faker->numberBetween(4, 6),
            'small' => $this->faker->numberBetween(10, 15),
        ];
    }
}
