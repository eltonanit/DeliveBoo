<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDishRequest extends FormRequest
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
            // 'restaurant_id' => 'required|numeric|exists:restaurants,id',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Il nome è obbligatorio.',
            'name.string' => 'Il nome deve essere una stringa.',
            'name.max' => 'Il nome non può superare i 120 caratteri.',

            'course.required' => 'La portata è obbligatorio.',
            'course.in' => 'La portata deve essere uno tra: Antipasto, Primo, Secondo, Contorno, Dessert.',

            'description.string' => 'La descrizione deve essere una stringa.',

            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero.',
            'price.between' => 'Il prezzo deve essere compreso tra 0 e 999.99.',

            'vegetarian.required' => 'Il campo vegetariano è obbligatorio.',
            'vegetarian.boolean' => 'Il campo vegetariano deve essere vero o falso.',

            'visible.required' => 'Il campo visibilità è obbligatorio.',
            'visible.boolean' => 'Il campo visibilità deve essere vero o falso.',
        ];
    }
}
