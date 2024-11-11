<?php

namespace App\Http\Controllers\Api;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        // Recupera il parametro di filtro dalla query (opzionale)
        $type = $request->query('type');

        // Filtra per tipologia se selezionata, includendo le tipologie nella risposta
        $restaurants = Restaurant::with('types')
            ->when($type, function ($query, $type) {
                $query->whereHas('types', function ($q) use ($type) {
                    $q->where('name', $type);
                });
            })
            ->get();

        return response()->json([
            'success' => true,
            'data' => $restaurants,
        ]);
    }

}
