<?php

namespace App\Repositories;

use App\Models\Car;
use Illuminate\Pagination\LengthAwarePaginator;

class CarRepository
{
    private const PER_PAGE = 5;

    public function getPaginatedCars(): LengthAwarePaginator
    {
        return Car::query()->paginate(self::PER_PAGE);
    }
}
