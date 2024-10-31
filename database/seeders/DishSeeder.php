<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dish;
use Illuminate\Support\Str;

class DishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dishes = config('db_deliveboo.dishes');
        foreach ($dishes as $dish) {
            $new_dish = new dish();
            $new_dish->name = $dish['name'];
            $new_dish->slug = Str::slug($dish['name'], '-');
            $new_dish->course = $dish['course'];
            $new_dish->description = $dish['description'];
            $new_dish->price = $dish['price'];
            $new_dish->vegetarian = $dish['vegetarian'];
            $new_dish->visible = $dish['visible'];
            $new_dish->restaurant_id = $dish['restaurant_id'];

            $new_dish->save();
        }
    }
}
