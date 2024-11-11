<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dish;

class DishController extends Controller
{
    public function index(Request $request)
    {
        $restaurantId = $request->query('restaurant_id');

        // Recupera i piatti con informazioni aggiuntive, ad esempio il ristorante associato
        $dishes = Dish::where('restaurant_id', $restaurantId)->get();

        // Restituisce i dati come JSON per l'API
        return response()->json([
            'success' => true,
            'data' => $dishes,
        ]);
    }
}
