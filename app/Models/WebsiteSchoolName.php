<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteSchoolName extends Model
{
    use HasFactory;
    protected $table = 'website_school_name';
    protected $primaryKey = 'id';
    protected $fillable = [
        'school_name'
    ];
}
