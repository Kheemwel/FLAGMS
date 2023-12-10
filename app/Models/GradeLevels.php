<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class GradeLevels extends Model
{
    use HasFactory;
    protected $table = 'grade_levels';
    protected $primaryKey = 'id';
    protected $appends = ['school_level'];
    public function schoolLevels() : BelongsToMany
    {
        return $this->belongsToMany(SchoolLevels::class, 'grade_school_levels', 'grade_level_id', 'school_level_id');
    }

    public function hasSchoolLevel() : HasOne
    {
        return $this->hasOne(GradeSchoolLevels::class, 'grade_level_id');
    }   
    
    public function getSchoolLevelAttribute()
    {
        return $this->schoolLevels->first()->school_level;
    }
}
