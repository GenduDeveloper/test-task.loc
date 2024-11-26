<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'brand_id' => ['required', 'integer'],
            'model_id' => ['required', 'integer'],
            'year_release' => ['nullable', 'integer', 'min:2000', 'digits:4'],
            'mileage' => ['nullable', 'integer'],
            'color' => ['nullable', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'brand_id.required' => 'Поле brand_id обязательно для заполнения',
            'brand_id.integer' => 'Поле brand_id должно быть числовым',
            'model_id.required' => 'Поле model_id обязательно для заполнения',
            'model_id.integer' => 'Поле model_id должно быть числовым',
            'year_release.integer' => 'Поле year_release должно быть числовым',
            'year_release.min' => 'Год выпуска автомобиля должен быть не ранее 2000 года',
            'year_release.digits' => 'Год выпуска автомобиля должен содержать 4 цифры',
            'mileage.integer' => 'Пробег автомобиля должен быть числовым значением',
            'color.string' => 'Цвет автомобиля должен быть строковым значением',
        ];
    }
}
