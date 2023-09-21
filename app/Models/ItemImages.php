<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ItemImages extends Model
{
    use HasFactory;
    protected $table = 'item_images';
    protected $primaryKey = 'id';
    protected $fillable = [
        'item_image'
    ];

    public function hasItem() : HasOne
    {
        return $this->hasOne(LostAndFound::class, 'item_image_id');
    }
}
