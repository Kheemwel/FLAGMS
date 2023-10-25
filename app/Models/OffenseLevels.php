<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OffenseLevels extends Model
{
    use HasFactory;
    protected $table = 'offense_levels';
    protected $primaryKey = 'id';
    protected $fillable = [
        'level'
    ];

    public function offenses()
    {
        return $this->belongsToMany(Offenses::class, 'offenses_disciplinary_actions', 'offense_level_id', 'offense_id');
    }

    public function getDisciplinaryAction($offenseId)
    {
        return $this->belongsToMany(DisciplinaryActions::class, 'offenses_disciplinary_actions', 'offense_level_id', 'disciplinary_action_id')->wherePivot('offense_id', $offenseId);
    }
}
