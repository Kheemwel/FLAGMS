<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeVisitationForms extends Model
{
    use HasFactory;
    protected $table = 'home_visitation_forms';
    protected $primaryKey = 'id';
    protected $fillable = [
        'form_id', 'student_id', 'reason', 'visitation_date', 'place', 'remark', 'student_signature_id',
        'parent_id', 'parent_signature_id', 'teacher_signature_id', 'guidance_signature_id', 'junior_principal_id',
        'junior_principal_signature_id', 'senior_principal_id', 'senior_principal_signature_id',
        'student_surname', 'student_firstname', 'student_middlename', 'student_no', 'lrn', 'level_section', 'address',
        'birthday', 'age', 'father_name', 'father_contact', 'mother_name', 'mother_contact', 'guardian_name',
        'guardian_contact', 'parent_name', 'guidance_name', 'teacher_name', 'junior_principal_name', 'senior_principal_name',
        'student_name',
    ];

    public function form()
    {
        return $this->belongsTo(Forms::class, 'form_id');
    }

    public function student()
    {
        return $this->belongsTo(Students::class, 'student_id');
    }

    public function teacherName()
    {
        return $this->form->teacher_name;
    }
}
