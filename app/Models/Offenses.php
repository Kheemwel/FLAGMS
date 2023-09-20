<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offenses extends Model
{
    use HasFactory;
    protected $table = 'offenses';
    protected $primaryKey = 'id';
    protected $fillable = [
        'offense_name', 'description'
    ];
}
