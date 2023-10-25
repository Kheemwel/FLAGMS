<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Offenses extends Model
{
    use HasFactory;
    protected $table = 'offenses';
    protected $primaryKey = 'id';
    protected $fillable = [
        'offense_name', 'offenses_category_id'
    ];

    public function getCategory() : BelongsTo
    {
        return $this->belongsTo(OffensesCategories::class, 'offenses_category_id');
    }

    
    public function disciplinaryActions()
    {
        return $this->belongsToMany(DisciplinaryActions::class, 'offenses_disciplinary_actions', 'offense_id', 'disciplinary_action_id');
    }

    public function offenseLevels()
    {
        return $this->belongsToMany(OffenseLevels::class, 'offenses_disciplinary_actions', 'offense_id', 'offense_level_id');
    }
}
