<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\CarModelResource;
use App\Repositories\CarModelRepository;
use Illuminate\Http\JsonResponse;

class CarModelController extends Controller
{
    public function index(CarModelRepository $repository): JsonResponse
    {
        $carModels = $repository->getModels();

        return response()->json([
            'models' => CarModelResource::collection($carModels)
        ]);
    }
}
