<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuidancePrograms extends Model
{
    use HasFactory;
    protected $table = 'guidance_programs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title', 'program_start', 'program_end', 'description', 'color'
    ];
}
