<?php

namespace App\Http\Resources;

use App\Models\CarModel;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarModelResource extends JsonResource
{
    public function __construct(CarModel $resource)
    {
        parent::__construct($resource);
    }
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'brand_id' => $this->resource->brand_id,
            'created_at' => $this->resource->created_at->format('Y-m-d')
        ];
    }
}
