<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class SchoolLevels extends Model
{
    use HasFactory;
    protected $table = 'school_levels';
    protected $primaryKey = 'id';
    public function gradeLevels() : BelongsToMany
    {
        return $this->belongsToMany(GradeLevels::class, 'grade_school_levels', 'school_level_id', 'grade_level_id');
    }
}
