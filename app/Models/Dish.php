<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dish extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['name', 'slug', 'course', 'description', 'price', 'vegetarian', 'visible', 'restaurant_id'];

    public static function generateSlug($name)
    {
        return Str::slug($name, '-');
    }


    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
