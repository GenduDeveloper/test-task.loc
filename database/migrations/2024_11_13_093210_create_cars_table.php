<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id');

            $table->foreign('brand_id')
                ->references('id')
                ->on('car_brands')
                ->cascadeOnDelete();

            $table->unsignedBigInteger('model_id');

            $table->foreign('model_id')
                ->references('id')
                ->on('car_models')
                ->cascadeOnDelete();

            $table->integer('year_release')->nullable();
            $table->integer('mileage')->nullable();
            $table->string('color', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
