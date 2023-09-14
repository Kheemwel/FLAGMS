<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteSubtitle extends Model
{
    use HasFactory;
    protected $table = 'website_subtitle';
    protected $primaryKey = 'id';
    protected $fillable = [
        'subtitle'
    ];
}
