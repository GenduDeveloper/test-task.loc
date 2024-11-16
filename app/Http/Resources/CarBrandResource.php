<?php

namespace App\Http\Resources;

use App\Models\CarBrand;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarBrandResource extends JsonResource
{
    public function __construct(CarBrand $resource)
    {
        parent::__construct($resource);
    }
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'created_at' => $this->resource->created_at->format('Y-m-d')
        ];
    }
}
