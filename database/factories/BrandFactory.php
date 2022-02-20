<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use App\Models\brand;

class BrandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Brand::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'logo' => $this->faker->text,
        ];
    }

    public function data(): void
    {

        $data = Http::get("https://gist.githubusercontent.com/shcyiza/71c64a33f3880e58980003c4c794db38/raw/febb04707f6ccc9ae3a445e147c5754e30f743fe/car_brands.json")
            ->collect();

        $data->map(fn($data) =>
        Brand::create([
            'name' => $data['name'],
            'logo' => $data['logo']
        ]));
    }

}
