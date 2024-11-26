<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CarBrandResource;
use App\Repositories\CarBrandRepository;
use Illuminate\Http\JsonResponse;


class CarBrandController extends Controller
{
    public function index(CarBrandRepository $repository): JsonResponse
    {
        $carBrands = $repository->getBrands();

        return response()->json([
            'brands' => CarBrandResource::collection($carBrands)
        ]);
    }
}
