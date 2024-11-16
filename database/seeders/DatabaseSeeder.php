<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Car;
use App\Models\CarBrand;
use App\Models\CarModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        CarBrand::factory(5)->create()->each(function ($brand) {
            $carModels = CarModel::factory(3)->create(['brand_id' => $brand->id]);

            $carModels->each(function ($carModel) use ($brand) {
                Car::factory(2)->create([
                    'brand_id' => $brand->id,
                    'model_id' => $carModel->id,
                ]);
            });
        });
    }
}
