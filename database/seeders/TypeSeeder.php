<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['name' => 'Italiano', 'slug' => Str::slug('Italiano')],
            ['name' => 'Cinese', 'slug' => Str::slug('Cinese')],
            ['name' => 'Giapponese', 'slug' => Str::slug('Giapponese')],
            ['name' => 'Messicano', 'slug' => Str::slug('Messicano')],
            ['name' => 'Indiano', 'slug' => Str::slug('Indiano')],
            ['name' => 'Vegetariano', 'slug' => Str::slug('Vegetariano')],
            ['name' => 'Americano', 'slug' => Str::slug('Americano')],
            ['name' => 'Francese', 'slug' => Str::slug('Francese')],
            ['name' => 'Tailandese', 'slug' => Str::slug('Tailandese')],
            ['name' => 'Mediterraneo', 'slug' => Str::slug('Mediterraneo')],
        ];

        Type::insert($types);
    }
}
