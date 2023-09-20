<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OffensesCategories extends Model
{
    use HasFactory;
    protected $table = 'offenses_categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'offenses_category', 'description'
    ];
}
