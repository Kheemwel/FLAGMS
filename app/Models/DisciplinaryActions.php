<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisciplinaryActions extends Model
{
    use HasFactory;
    protected $table = 'disciplinary_actions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'action', 'description'
    ];

    public function offenses()
    {
        return $this->belongsToMany(Offenses::class, 'offenses_disciplinary_actions', 'disciplinary_action_id', 'offense_id');
    }

    public function getOffenseLevel($offenseId)
    {
        return $this->belongsToMany(OffenseLevels::class, 'offenses_disciplinary_actions', 'disciplinary_action_id', 'offense_level_id')->wherePivot('offense_id', $offenseId);
    }
}
