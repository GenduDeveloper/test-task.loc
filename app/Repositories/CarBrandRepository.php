<?php

namespace App\Repositories;

use App\Models\CarBrand;
use Illuminate\Database\Eloquent\Collection;


class CarBrandRepository
{
    public function getBrands(): Collection
    {
        return CarBrand::query()->select('id', 'name')
            ->orderBy('name')
            ->get();
    }
}
