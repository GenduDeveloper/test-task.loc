<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars';

    protected $fillable = [
        'mark_id',
        'model_id',
        'year_release',
        'mileage',
        'color'
    ];

    public function carModel(): BelongsTo
    {
        return $this->belongsTo(CarModel::class, 'model_id');
    }

    public function carBrand(): BelongsTo
    {
        return $this->belongsTo(CarBrand::class, 'mark_id');
    }
}
