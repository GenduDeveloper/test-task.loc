<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Car;

class CarResource extends JsonResource
{
    public function __construct(Car $resource)
    {
        parent::__construct($resource);
    }
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'brand_id' => $this->resource->brand_id,
            'model_id' => $this->resource->model_id,
            'year_release' => $this->resource->year_release,
            'mileage' => $this->resource->mileage,
            'color' => $this->resource->color
        ];
    }
}
