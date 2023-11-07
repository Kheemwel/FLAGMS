<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OffensesDisciplinaryActions extends Model
{
    use HasFactory;
    protected $table = 'offenses_disciplinary_actions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'offense_id', 'offense_level_id', 'disciplinary_action_id'
    ];
}
