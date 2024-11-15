<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Restaurant;
use Illuminate\Support\Str;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurants = config('db_deliveboo.restaurants');
        foreach ($restaurants as $restaurant) {
            $new_restaurant = new Restaurant();
            $new_restaurant->name = $restaurant['name'];
            $new_restaurant->slug = Str::slug($restaurant['name'], '-');
            $new_restaurant->address = $restaurant['address'];
            $new_restaurant->phone = $restaurant['phone'];
            $new_restaurant->user_id = $restaurant['user_id'];

            $new_restaurant->save();
        }
    }
}
