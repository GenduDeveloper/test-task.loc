<?php

namespace Database\Factories;

use App\Models\CarBrand;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarBrand>
 */
class CarBrandFactory extends Factory
{
    protected $model = CarBrand::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company()
        ];
    }
}
