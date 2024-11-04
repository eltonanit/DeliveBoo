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
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurants = Restaurant::all();
        return view('admin.dishes.create', compact('restaurants'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDishRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDishRequest $request)
    {
        $form_data = $request->all();
        $form_data['slug'] = Dish::generateSlug($form_data['name']);

        $dish = new Dish();
        $dish->fill($form_data);
        $dish->save();

        return redirect()->route('admin.restaurants.index', $dish)->with('success', 'Piatto creato con successo');
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
        $dish->name = $request->name;
        $dish->slug = Str::slug($request->name);
        $dish->course = $request->course;
        $dish->description = $request->description;
        $dish->price = $request->price;
        $dish->vegetarian = $request->vegetarian;
        $dish->visible = $request->visible;
        $dish->restaurant_id = $request->restaurant_id;

        $dish->save();

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
        $dish->delete();
        return redirect()->route('admin.dishes.index')->with('success', 'Piatto eliminato con successo');
    }
}
