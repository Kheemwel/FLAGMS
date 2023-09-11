<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class GradeLevels extends Model
{
    use HasFactory;
    protected $table = 'grade_levels';
    protected $primaryKey = 'id';
    public function schoolLevels() : BelongsToMany
    {
        return $this->belongsToMany(SchoolLevels::class, 'grade_school_levels', 'grade_level_id', 'school_level_id');
    }

}
