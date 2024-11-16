<?php

namespace Database\Factories;

use App\Models\CarBrand;
use App\Models\CarModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarModel>
 */
class CarModelFactory extends Factory
{
    protected $model = CarModel::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'brand_id' => CarBrand::factory()
        ];
    }
}
