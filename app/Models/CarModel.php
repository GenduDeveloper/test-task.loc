<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarModel extends Model
{
    use HasFactory;

    protected $table = 'car_models';

    protected $fillable = [
        'name',
        'mark_id'
    ];

    public function carBrand(): BelongsTo
    {
        return $this->belongsTo(CarBrand::class, 'mark_id');
    }
}
