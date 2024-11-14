<?php

namespace App\Http\Controllers\Admin;

use App\Models\Dish;
use App\Models\Restaurant;
use App\Http\Requests\StoreDishRequest;
use App\Http\Requests\UpdateDishRequest;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishes = Dish::all();
        return view('admin.dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  int $restaurantId
     * @return \Illuminate\Http\Response
     */
    public function create($restaurantId)
    {
        $restaurant = Restaurant::findOrFail($restaurantId);
        return view('admin.dishes.create', compact('restaurant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDishRequest  $request
     * @param  int $restaurantId
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDishRequest $request, $restaurantId)
    {
        $form_data = $request->validated(); // Usa dati validati
        $form_data['slug'] = Str::slug($form_data['name']); // Genera lo slug

        $dish = new Dish();
        $dish->fill($form_data); // Riempie i campi in una volta
        $dish->restaurant_id = $restaurantId; // Associa il piatto al ristorante

        $dish->save();

        return redirect()->route('admin.restaurants.show', $restaurantId)->with('success', 'Piatto creato con successo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        // Recupera il ristorante
        $restaurant = Restaurant::findOrFail($id);

        // Recupera tutti i piatti, inclusi quelli eliminati (soft delete)
        $dishes = $restaurant->dishes()->withTrashed()->get(); 

        return view('admin.restaurants.show', compact('restaurant', 'dishes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        $restaurant = $dish->restaurant;
        return view('admin.dishes.edit', compact('dish', 'restaurant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDishRequest  $request
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDishRequest $request, Dish $dish)
    {
        $form_data = $request->validated(); // Usa dati validati
        $form_data['slug'] = Str::slug($request->name); // Genera lo slug

        $dish->update($form_data); // Aggiorna in una volta

        return redirect()->route('admin.restaurants.show', $dish->restaurant_id)->with('success', 'Piatto aggiornato con successo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dish $dish)
    {
        $restaurantId = $dish->restaurant_id; // Ottieni l'ID del ristorante associato
    
        // Soft delete del piatto
        $dish->delete(); // Esegui un soft delete
        
        // Redirect alla pagina del ristorante con un messaggio di successo
        return redirect()->route('admin.restaurants.show', $restaurantId)->with('success', 'Piatto eliminato con successo');
    }

    public function restoreAll($restaurantId)
    {
       // Recupera il ristorante e i piatti soft deleted
        $restaurant = Restaurant::findOrFail($restaurantId);
        $dishes = $restaurant->dishes()->onlyTrashed()->get();

        if ($dishes->isEmpty()) {
            // Se non ci sono piatti da ripristinare
            return redirect()->route('admin.restaurants.show', $restaurantId)
                            ->with('error', 'Nessun piatto da ripristinare.');
        }

        // Ripristina tutti i piatti eliminati
        $restaurant->dishes()->onlyTrashed()->restore();

        return redirect()->route('admin.restaurants.show', $restaurantId)
                        ->with('success', 'Piatti ripristinati correttamente.');
    }
}
