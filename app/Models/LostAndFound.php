<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LostAndFound extends Model
{
    use HasFactory;
    protected $table = 'lost_and_found';
    protected $primaryKey = 'id';
    protected $fillable = [
        'item_name', 'item_image_id', 'item_tag_id', 'item_type_id', 'description', 'datetime_found', 'finder_name', 'location_found',
        'is_claimed', 'claimer_name', 'claimed_datetime', 'expiration_date', 'is_expired'
    ];

    public function getType() : BelongsTo
    {
        return $this->belongsTo(ItemTypes::class, 'item_type_id');
    }

    public function getImage() : BelongsTo
    {
        return $this->belongsTo(ItemImages::class, 'item_image_id');
    }

    public function getPriority() : BelongsTo
    {
        return $this->belongsTo(ItemTags::class, 'item_tag_id');
    }
}
