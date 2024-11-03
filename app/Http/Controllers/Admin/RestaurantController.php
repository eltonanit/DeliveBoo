<?php

namespace App\Http\Controllers\Admin;

use App\Models\Restaurant;
use App\Models\Dish;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;


class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('admin.restaurants.index', compact('restaurants'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.restaurants.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRestaurantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRestaurantRequest $request)
    {
        $form_data = $request->all();

        $form_data['slug'] = Restaurant::generateSlug($form_data['name']);

        $restaurant = new Restaurant();
        $restaurant->name = $request->name;
        $restaurant->slug = Str::slug($request->name);
        $restaurant->address = $request->address;
        $restaurant->phone = $request->phone;

        $restaurant->fill($form_data);
        $restaurant->save();

        // $validated_data = $request->validated();

        // $validated_data['slug'] = Restaurant::generateSlug($validated_data['name']);

        // $restaurant = Restaurant::create($validated_data);



        return redirect()->route('admin.restaurants.index')->with('success', 'Ristorante creato con successo');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        // Recupera solo i piatti associati al ristorante
        $dishes = $restaurant->dishes;

        return view('admin.restaurants.show', compact('restaurant', 'dishes'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        $dishes = Dish::all();
        return view('admin.restaurants.edit', compact('restaurant', 'dishes'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRestaurantRequest  $request
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant)
    {
        $restaurant->name = $request->name;
        $restaurant->slug = Str::slug($request->name);
        $restaurant->address = $request->address;
        $restaurant->phone = $request->phone;
        $restaurant->save();

        return redirect()->route('admin.restaurants.index')->with('success', 'Ristorante aggiornato con successo');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
        return redirect()->route('admin.restaurants.index')->with('success', 'Ristorante eliminato con successo');
    }
}
