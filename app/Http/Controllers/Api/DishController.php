<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dish;

class DishController extends Controller
{
    public function index()
    {
        // Recupera i piatti con informazioni aggiuntive, ad esempio il ristorante associato
        $dishes = Dish::with('restaurant')->get();

        if ($dishes->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'No dishes found',
            ]);
        }

        // Restituisce i dati come JSON per l'API
        return response()->json([
            'success' => true,
            'data' => $dishes,
        ]);
    }
}
