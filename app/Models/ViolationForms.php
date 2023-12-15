<?php

namespace App\Models;

use App\Traits\Notify;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViolationForms extends Model
{
    use HasFactory;
    use Notify;
    protected $table = 'violation_forms';
    protected $primaryKey = 'id';
    protected $fillable = [
        'form_id', 'offense_type', 'date', 'time', 'action_taken', 'case_status', 'recommendation', 'teacher_name'
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

    public function createViolationFormStudents($students, $guidanceID)
    {
        $data = [];
        $student_names = [];
        foreach ($students as $studentId) {
            $student = Students::find($studentId);
            $parentUserID = $student->parents()->first()->user_account_id;
            $inventory = $student->IndividualInventory;
            $student_names[] = $student->name;
            $data[] = [
                'student_id' => $studentId,
                'student_name' => $student->name,
                'level_section' => "Grade {$student->getGradeLevel()} Mars", 
                'age' => $inventory ? Carbon::parse($inventory->birthday)->diffInYears(Carbon::now()) : null, 
                'gender' =>  $inventory ? $inventory->gender : null, 
                'birthday' =>  $inventory ? $inventory->birthday : null,
                'parent' => $student->parentName(),
                'contact' => $inventory ?  $inventory->mobile_no : null,
                'address' =>  $inventory ? $inventory->address : null,
            ];
            $this->notify(
                $guidanceID,
                $this->form->teacher->user_account_id,
                "I created Violation Form (VF#{$this->id}) for your child {$student->name}",
                'fill-out',
            );
            $this->notify(
                $guidanceID,
                $this->form->teacher->user_account_id,
                "I created Violation Form (VF#{$this->id}) for you",
                'fill-out',
            );
        }
        $students = implode(', ', $student_names);
        $this->notify(
            $guidanceID,
            $this->form->teacher->user_account_id,
            "I created Violation Forms (VF#{$this->id}) for student(s) {$students}",
            'fill-out',
        );
        $this->violationFormStudents()->createMany($data);
    }
}
