<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\CarBrand;
use App\Models\CarModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    private const NOW_YEAR = '2024';

    protected $model = Car::class;

    public function definition(): array
    {
        return [
            'brand_id' => CarBrand::factory(),
            'model_id' => CarModel::factory(),
            'year_release' => $this->faker->numberBetween(2000, date('Y')),
            'mileage' => $this->faker->numberBetween(0, 200000),
            'color' => $this->faker->safeColorName(),
        ];
    }
}
