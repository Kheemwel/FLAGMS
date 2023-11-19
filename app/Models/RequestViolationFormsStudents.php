<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestViolationFormsStudents extends Model
{
    use HasFactory;
    protected $table = 'request_violation_forms_students';
    protected $primaryKey = 'id';
    protected $fillable = [
        'request_violation_form_id', 'student_id'
    ];
}
