<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCarRequest;
use App\Http\Resources\CarResource;
use App\Repositories\CarRepository;
use App\Services\CarService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index(CarRepository $repository): JsonResponse
    {
        // Можно было и все вывести, но решил так
        $cars = $repository->getPaginatedCars();

        return response()->json([
            'cars' => CarResource::collection($cars),
            'currentPage' => $cars->currentPage(),
            'lastPage' => $cars->lastPage()
        ]);
    }


    public function store(StoreCarRequest $request, CarService $service): JsonResponse
    {
        $validatedData = $request->validated();
        $service->create($validatedData);

        return response()->json([
            'message' => 'Автомобиль успешно добавлен',
        ], 201);
    }


    public function show(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
