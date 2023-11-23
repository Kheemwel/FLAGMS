<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestForms extends Model
{
    use HasFactory;
    protected $table = 'request_forms';
    protected $primaryKey = 'id';
    protected $fillable = [
        'teacher_id', 'form_type', 'is_approve'
    ];

    public function homeVisitationForm()
    {
        return $this->hasOne(RequestHomeVisitationForms::class, 'request_form_id');
    }

    public function violationForm()
    {
        return $this->hasOne(RequestViolationForms::class, 'request_form_id');
    }

    public function violationStudentsInvolve()
    {
        return $this->violationForm->students->pluck('id')->toArray();
    }

    public function teacher()
    {
        return $this->belongsTo(Teachers::class, 'teacher_id');
    }

    public function forms()
    {
        return $this->hasOne(Forms::class, 'request_form_id');
    }

    public function createViolationForm()
    {
        $this->forms()->create()->createViolationForms();
    }

    public function createHomeVisitationForm()
    {
        $this->forms()->create()->createHomeVisitationForms();
    }
}
