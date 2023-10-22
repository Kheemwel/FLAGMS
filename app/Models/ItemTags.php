<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ItemTags extends Model
{
    use HasFactory;
    protected $table = 'item_tags';
    protected $primaryKey = 'id';
    protected $fillable = [
        'priority_tag', 'days_expired'
    ];
}
