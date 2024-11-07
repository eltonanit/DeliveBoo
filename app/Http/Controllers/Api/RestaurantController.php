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
        
        // Se la tipologia è stata selezionata, filtra per quella
        $restaurants = $type 
            ? Restaurant::where('type', $type)->get() 
            : Restaurant::all();

        return response()->json($restaurants);
    }
}
