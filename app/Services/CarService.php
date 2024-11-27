<?php

namespace App\Services;

use App\Models\Car;

class CarService
{
    public function create(array $userData): Car
    {
        $car = new Car();

        $car->brand_id = $userData['brand_id'];
        $car->model_id = $userData['model_id'];
        $car->year_release = $userData['year_release'] ?? null;
        $car->mileage = $userData['mileage'] ?? null;
        $car->color = $userData['color'] ?? null;

        $car->save();

        return $car;
    }
}
