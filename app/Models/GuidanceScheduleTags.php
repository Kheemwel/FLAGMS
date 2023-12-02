<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuidanceScheduleTags extends Model
{
    use HasFactory;
    protected $table = 'guidance_schedule_tags';
    protected $primaryKey = 'id';
    protected $fillable = [
        'tag_name', 'color'
    ];
}
