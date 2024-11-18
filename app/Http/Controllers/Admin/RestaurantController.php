<?php

namespace App\Http\Controllers\Admin;

use App\Models\Restaurant;
use App\Models\Dish;
use App\Models\Type;
use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::where('user_id', auth()->id())->get();
        return view('admin.restaurants.index', compact('restaurants'));
    }


    public function filterByTypes(Request $request)
    {
        $typeIds = $request->input('type_ids');
        $types = Type::all(); // Per la select dei tipi

        $restaurants = Restaurant::whereHas('types', function ($query) use ($typeIds) {
            $query->whereIn('types.id', $typeIds);
        })->get();

        return view('restaurants.index', compact('restaurants', 'types'));
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
        $form_data = $request->validated();
        $form_data['slug'] = Restaurant::generateSlug($form_data['name']);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('restaurants', 'public');
            $validatedData['image'] = $imagePath;
        }
        
        $restaurant = new Restaurant();
        $restaurant->fill($form_data);
        $restaurant->user_id = auth()->id(); // Aggiungi questa linea per associare l'utente autenticato
        $restaurant->save();

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
        // Verifica se il ristorante appartiene all'utente autenticato
        if ($restaurant->user_id !== auth()->id()) {
            // Se l'utente non è il proprietario, puoi reindirizzare o restituire un errore
            abort(403, 'Accesso non autorizzato');
        }

        // Recupera solo i piatti associati al ristorante
        $dishes = $restaurant->dishes;

        //Recupera solo i tipi associati al ristorante
        $types = $restaurant->types;

        return view('admin.restaurants.show', compact('restaurant', 'dishes', 'types'));
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
        $types = Type::orderBy('name', 'asc')->get();
        return view('admin.restaurants.edit', compact('restaurant', 'dishes', 'types'));
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
        $form_data = $request->validated();
        $form_data['slug'] = Str::slug($request->name);

        $restaurant->update($form_data);

        if ($request->has('type_ids')) {
            $restaurant->types()->sync($request->type_ids);
        } else {
            $restaurant->types()->sync([]);
        }

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
