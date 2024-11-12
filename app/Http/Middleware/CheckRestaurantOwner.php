<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use Symfony\Component\HttpFoundation\Response;

class CheckRestaurantOwner
{
    public function handle($request, Closure $next)
    {
        // Ottieni l'ID del ristorante dalla rotta
        $restaurant = Restaurant::findOrFail($request->route('restaurant')); // Usa la chiave primaria per recuperare il singolo ristorante

        // Controlla se l'utente autenticato è il proprietario del ristorante
        if ($restaurant->user_id !== auth()->id()) {
            abort(403, 'Non sei autorizzato a vedere questo ristorante');
        }

        return $next($request);
    }
}
