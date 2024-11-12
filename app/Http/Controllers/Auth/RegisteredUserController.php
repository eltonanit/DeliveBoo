<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use App\Models\Restaurant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Models\Type;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $types = Type::orderBy('name', 'asc')->get();
        return view('auth.register', compact('types'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Validazione per l'utente e il ristorante
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'address' => ['required', 'string', 'max:120'], // Validazione per l'indirizzo
            'p_iva' => ['required', 'string', 'size:11', 'unique:'.User::class], // Validazione per la partita IVA
            'restaurant_name' => ['required', 'string', 'max:120'],
            'phone' => ['required', 'string', 'max:120'],
            'type_ids' => ['required', 'array', 'min:1'],
            'type_ids.*' => ['exists:types,id']
        ]);

        // Crea l'utente
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'address' => $request->address, // Passa l'indirizzo
            'p_iva' => $request->p_iva, // Passa la partita IVA
        ]);

        // Crea il ristorante associato all'utente
        $restaurant = Restaurant::create([
            'name' => $request->restaurant_name,
            'address' => $request->address,
            'phone' => $request->phone,
            'user_id' => $user->id, // Associa il ristorante all'utente
            'slug' => Str::slug($request->restaurant_name), // Genera il slug dal nome del ristorante
        ]);

        $restaurant->types()->sync($request->type_ids);

        // Invia l'evento di registrazione
        event(new Registered($user));

        // Effettua il login dell'utente
        Auth::login($user);

        // Reindirizza alla home
        return redirect()->route('admin.restaurants.index');
    }
}