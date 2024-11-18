<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use Illuminate\Support\Str;

class RestaurantSeeder extends Seeder
{
    public function run()
    {
        $restaurants = config('db_deliveboo.restaurants');

        foreach ($restaurants as $restaurant) {
            $baseSlug = Str::slug($restaurant['name'], '-');
            $slug = $baseSlug;
            $counter = 1;

            // Gestione slug duplicati
            while (Restaurant::where('slug', $slug)->exists()) {
                $slug = $baseSlug . '-' . $counter;
                $counter++;
            }

            // Creazione ristorante con valori di default per campi opzionali
            Restaurant::create([
                'name' => $restaurant['name'],
                'slug' => $slug,
                'address' => $restaurant['address'],
                'phone' => $restaurant['phone'] ?? '000-0000000',  // valore default per phone
                'image' => $restaurant['image'] ?? 'https://picsum.photos/450/450',  // valore default per image
                'user_id' => $restaurant['user_id']
            ]);
        }
    }
}