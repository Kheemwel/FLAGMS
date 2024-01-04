<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecordsHomeVisitationForms extends Model
{
    use HasFactory;
    protected $table = 'records_home_visitation_forms';
    protected $primaryKey = 'id';
    protected $fillable = [
        'file', 'student_name', 'school_level', 'grade_level', 'teacher_name',
    ];
}
