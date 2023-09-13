<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteLogo extends Model
{
    use HasFactory;
    protected $table = 'website_logo';
    protected $primaryKey = 'id';
    protected $fillable = [
        'logo'
    ];
}
