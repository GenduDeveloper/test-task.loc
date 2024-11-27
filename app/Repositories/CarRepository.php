<?php

namespace App\Repositories;

use App\Models\Car;
use Illuminate\Pagination\LengthAwarePaginator;

class CarRepository
{
    private const PER_PAGE = 4;

    public function getPaginatedCars(): LengthAwarePaginator
    {
        return Car::query()->paginate(self::PER_PAGE);
    }

    public function getById(int $id): ?Car
    {
        /**
         * @var Car|null
         */
        return Car::query()->findOrFail($id);
    }
}
