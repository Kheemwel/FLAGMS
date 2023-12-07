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
        'teacher_id', 'form_type', 'is_approve', 'disapproval_reason', 'status'
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function (RequestForms $requestForm) {
            // Automatically update the status based on is_approve and disapproval_reason
            $requestForm->updateStatus();
        });
    }

    public function updateStatus()
    {
        if ($this->is_approve) {
            $this->status = 'approved';
        } elseif ($this->isDisapproved()) {
            $this->status = 'disapproved';
        } else {
            $this->status = 'pending';
        }
    }

    public function isDisapproved()
    {
        return !$this->is_approve && !empty($this->disapproval_reason);
    }

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

    public function getTeacherNameAttribute()
    {
        return $this->teacher->name;
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
