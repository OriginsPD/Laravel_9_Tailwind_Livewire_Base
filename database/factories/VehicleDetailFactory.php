<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\BaggageSpace;
use App\Models\Vehicle;
use App\Models\vehicleDetail;

class VehicleDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VehicleDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'vehicle_id' => Vehicle::factory(),
            'baggageSpace_id' => BaggageSpace::factory(),
            'transmission' => $this->faker->text,
            'capacity' => $this->faker->numberBetween(4, 7),
        ];
    }
}
