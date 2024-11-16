<?php

namespace App\Repositories;

use App\Models\CarModel;
use Illuminate\Pagination\LengthAwarePaginator;

class CarModelRepository
{
    private const PER_PAGE = 3;

    public function getPaginatedCarModels(): LengthAwarePaginator
    {
        return CarModel::query()
            ->paginate(self::PER_PAGE);
    }
}

