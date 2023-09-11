<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageData extends Model
{
    use HasFactory;
    protected $table = 'image_data';
    protected $primaryKey = 'id';
    protected $fillable = [
        'image_binary', 'public_image_path', 'private_image_path'
    ];
}
