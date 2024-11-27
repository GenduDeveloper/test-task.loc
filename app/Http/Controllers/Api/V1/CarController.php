<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;
use App\Http\Resources\CarResource;
use App\Repositories\CarRepository;
use App\Services\CarService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;

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


    public function show(CarRepository $repository, int $id): JsonResponse
    {
        try {
            $car = $repository->getById($id);
            return response()->json([
                'car' => new CarResource($car)
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Ошибка: ' . $e->getMessage(),
            ], 404);
        }
    }


    public function update(UpdateCarRequest $request, CarRepository $repository, int $id): JsonResponse
    {
        $validatedData = $request->validated();

        try {
            $car = $repository->getById($id);
            $car->update($validatedData);

            return response()->json([
                'message' => 'Автомобиль успешно обновлен',
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Ошибка: ' . $e->getMessage()
            ], 404);
        }
    }


    public function destroy(CarRepository $repository, int $id): JsonResponse
    {
        try {
            $car = $repository->getById($id);
            $car->delete();

            return response()->json([
                'message' => 'Автомобиль успешно удален'
            ]);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'message' => 'Ошибка: ' . $e->getMessage()
            ], 404);
        }
    }

}
