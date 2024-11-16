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
        $carModels = $repository->getPaginatedCarModels();

        return response()->json([
            'data' => CarModelResource::collection($carModels),
            'currentPage' => $carModels->currentPage(),
            'lastPage' => $carModels->lastPage()
        ]);
    }
}
