<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDishRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:120',
            'course' => 'required|in:Appetizer,First,Second,Side,Dessert',
            'description' => 'nullable|string',
            'price' => 'required|numeric|between:0,999.99',
            'vegetarian' => 'required|boolean',
            'visible' => 'required|boolean',
            'restaurant_id' => 'required|exists:restaurants,id',
        ];
    }
}
