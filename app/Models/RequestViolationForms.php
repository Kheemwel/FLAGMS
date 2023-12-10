<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestViolationForms extends Model
{
    use HasFactory;
    protected $table = 'request_violation_forms';
    protected $primaryKey = 'id';
    protected $fillable = [
        'request_form_id', 'reason'
    ];

    public function requestForm()
    {
        return $this->belongsTo(RequestForms::class, 'request_form_id');
    }

    public function students()
    {
        return $this->belongsToMany(Students::class, 'request_violation_forms_students', 'request_violation_form_id', 'student_id');
    }
}
