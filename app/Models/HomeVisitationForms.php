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

    public function parent()
    {
        return $this->belongsTo(Parents::class, 'parent_id');
    }

    public function junior_principal()
    {
        return $this->belongsTo(Principals::class, 'junior_principal_id');
    }

    public function senior_principal()
    {
        return $this->belongsTo(Principals::class, 'senior_principal_id');
    }
    public function teacherName()
    {
        return $this->form->teacher_name;
    }

    
    public function StudentSignature()
    {
        return $this->belongsTo(StudentHomeVisitationSignatures::class, 'student_signature_id');
    }

    public function student_signature()
    {
        return $this->student_signature_id ? imageBinaryToSRC($this->StudentSignature->signature) : blankSignature();
    }

    public function ParentSignature()
    {
        return $this->belongsTo(ParentFormSignatures::class, 'parent_signature_id');
    }

    public function parent_signature()
    {
        return $this->parent_signature_id ? imageBinaryToSRC($this->ParentSignature->signature) : blankSignature();
    }

    public function GuidanceSignature()
    {
        return $this->belongsTo(GuidanceFormSignatures::class, 'guidance_signature_id');
    }

    public function guidance_signature()
    {
        return $this->guidance_signature_id ? imageBinaryToSRC($this->GuidanceSignature->signature) : blankSignature();
    }
    public function TeacherSignature()
    {
        return $this->belongsTo(TeacherFormSignatures::class, 'teacher_signature_id');
    }

    public function Teacher_signature()
    {
        return $this->teacher_signature_id ? imageBinaryToSRC($this->TeacherSignature->signature) : blankSignature();
    }
    public function JuniorPrincipalSignature()
    {
        return $this->belongsTo(JuniorPrincipalSignatures::class, 'junior_principal_signature_id');
    }

    public function junior_principal_signature()
    {
        return $this->junior_principal_signature_id ? imageBinaryToSRC($this->JuniorPrincipalSignature->signature) : blankSignature();
    }
    public function SeniorPrincipalSignature()
    {
        return $this->belongsTo(SeniorPrincipalSignatures::class, 'senior_principal_signature_id');
    }

    public function senior_principal_signature()
    {
        return $this->senior_principal_signature_id ? imageBinaryToSRC($this->SeniorPrincipalSignature->signature) : blankSignature();
    }
}
