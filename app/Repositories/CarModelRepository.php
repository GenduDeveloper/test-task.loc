<?php

namespace App\Repositories;

use App\Models\CarModel;
use Illuminate\Database\Eloquent\Collection;

class CarModelRepository
{
    public function getModels(): Collection
    {
        return CarModel::query()->select('id', 'name', 'brand_id')
            ->orderBy('name')
            ->get();
    }
}

