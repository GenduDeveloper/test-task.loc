<?php

namespace App\Repositories;

use App\Models\CarBrand;
use Illuminate\Pagination\LengthAwarePaginator;

class CarBrandRepository
{
    private const PER_PAGE = 3;

    public function getPaginatedCarBrands(): LengthAwarePaginator
    {
        return CarBrand::query()
            ->paginate(self::PER_PAGE);
    }
}
