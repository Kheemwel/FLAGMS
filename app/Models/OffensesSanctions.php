<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OffensesSanctions extends Model
{
    use HasFactory;

    protected $table = 'offenses_sanctions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'offenses_sanction', 'description'
    ];
}
