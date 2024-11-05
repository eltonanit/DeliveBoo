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
        return view('admin.dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish)
    {
        $restaurants = Restaurant::all();
        return view('admin.dishes.edit', compact('dish', 'restaurants'));
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

        return redirect()->route('admin.restaurants.index')->with('success', 'Piatto aggiornato con successo');
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
        $dish->delete();
        return redirect()->route('admin.restaurants.show', $restaurantId)->with('success', 'Piatto eliminato con successo');
    }
}
