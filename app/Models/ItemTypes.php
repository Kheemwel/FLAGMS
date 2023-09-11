<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemTypes extends Model
{
    use HasFactory;
    protected $table = 'item_types';
    protected $primaryKey = 'id';
    protected $fillable = [
        'item_type'
    ];

}
