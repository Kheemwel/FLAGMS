<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodNutritions extends Model
{
    use HasFactory;
    protected $table = 'food_nutritions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nutrition'
    ];
}
