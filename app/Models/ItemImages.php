<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemImages extends Model
{
    use HasFactory;
    protected $table = 'item_images';
    protected $primaryKey = 'id';
    protected $fillable = [
        'item_image'
    ];
}
