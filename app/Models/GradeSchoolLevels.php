<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeSchoolLevels extends Model
{
    use HasFactory;
    protected $table = 'grade_school_levels';
    protected $primaryKey = 'id';
    public function schoolLevel()
    {
        return $this->belongsTo(SchoolLevels::class, 'school_level_id');
    }

    public function gradeLevel()
    {
        return $this->belongsTo(GradeLevels::class, 'grade_level_id');
    }
}
