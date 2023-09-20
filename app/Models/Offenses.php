<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Offenses extends Model
{
    use HasFactory;
    protected $table = 'offenses';
    protected $primaryKey = 'id';
    protected $fillable = [
        'offense_name', 'description', 'offenses_category_id'
    ];

    public function getCategory() : BelongsTo
    {
        return $this->belongsTo(OffensesCategories::class, 'offenses_category_id');
    }
}
