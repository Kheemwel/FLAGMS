<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AllDataTypes extends Model
{
    use HasFactory;
    protected $table = 'all_data_types';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'middle_initial', 'age', 'weight', 'contact', 'birthday', 'alarm', 'profile', 'isHuman'
    ];
}
