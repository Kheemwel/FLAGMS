<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    use HasFactory;
    protected $table = 'forms';
    protected $primaryKey = 'id';
    protected $fillable = [
        'request_form_id'
    ];

    public function requestForm()
    {
        return $this->belongsTo(RequestForms::class, 'request_form_id');
    }

    public function homeVisitationForm()
    {
        return $this->hasOne(HomeVisitationForms::class, 'form_id');
    }

    public function violationForm()
    {
        return $this->hasOne(ViolationForms::class, 'form_id');
    }

    public function createHomeVisitationForms()
    {
        $homeVisitationForm = $this->requestForm->homeVisitationForm;
        $this->homeVisitationForm()->create(
            [
                'student_id' => $homeVisitationForm->student_id,
                'reason' => $homeVisitationForm->reason
            ]
        );
    }

    public function createViolationForms()
    {
        $students = $this->requestForm->violationStudentsInvolve();
        $offense_type = $this->requestForm->violationForm->offense_type;
        $this->violationForm()->create()->createViolationFormStudents($students);
    }

    public function formType()
    {
        return $this->requestForm->form_type;
    }

    public function teacherName()
    {
        return $this->requestForm->teacher->getName();
    }
}
