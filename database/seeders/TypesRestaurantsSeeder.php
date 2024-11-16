<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesRestaurantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Recupera gli ID dei ristoranti e delle tipologie
        $restaurantIds = DB::table('restaurants')->pluck('id')->toArray();
        $typeIds = DB::table('types')->pluck('id')->toArray();

        // Associa casualmente tipologie ai ristoranti
        $associations = [];
        foreach ($restaurantIds as $restaurantId) {
            // Numero casuale di tipologie da associare a ogni ristorante (es. da 1 a 3)
            $randomTypeIds = collect($typeIds)->random(rand(1, 3))->toArray();

            foreach ($randomTypeIds as $typeId) {
                $associations[] = [
                    'restaurant_id' => $restaurantId,
                    'type_id' => $typeId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
        }
        
        // Inserisce le associazioni nella tabella ponte
        DB::table('types_restaurants')->insert($associations);
    }
}
