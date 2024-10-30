<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'address','user_id'];

    public static function generateSlug($name)
    {
        return Str::slug($name, '-');
    }
}
