<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViolationForms extends Model
{
    use HasFactory;
    protected $table = 'violation_forms';
    protected $primaryKey = 'id';
    protected $fillable = [
        'form_id', 'offense_type', 'date', 'time', 'action_taken', 'case_status', 'recommendation'
    ];

    public function form()
    {
        return $this->belongsTo(Forms::class, 'form_id');
    }

    public function teacherName()
    {
        return $this->form->teacher_name;
    }

    public function violationFormStudents()
    {
        return $this->hasMany(ViolationFormsStudents::class, 'violation_forms_id');
    }

    public function createViolationFormStudents($students)
    {
        $data = [];
        foreach ($students as $studentId) {
            $data[] = [
                'student_id' => $studentId
            ];
        }
        $this->violationFormStudents()->createMany($data);
    }
}
