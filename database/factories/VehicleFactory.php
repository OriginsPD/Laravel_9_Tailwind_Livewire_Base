<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Brand;
use App\Models\Category;
use App\Models\vehicle;

class VehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'modal' => $this->faker->word,
            'brand_id' => Brand::factory(),
            'category' => Category::factory(),
            'weekly_fee' => $this->faker->randomFloat(2, 1000, 6999.99),
            'daily_fee' => $this->faker->randomFloat(2, 49, 499.99),
            'status' => $this->faker->boolean,
        ];
    }
}
