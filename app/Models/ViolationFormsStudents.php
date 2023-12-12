<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViolationFormsStudents extends Model
{
    use HasFactory;
    protected $table = 'violation_forms_students';
    protected $primaryKey = 'id';
    protected $fillable = [
        'violation_forms_id', 'student_id', 'time', 'narrative'
    ];

    public function violationForm()
    {
        return $this->belongsTo(ViolationForms::class, 'violation_forms_id');
    }
    
    public function student()
    {
        return $this->belongsTo(Students::class, 'student_id');
    }
}
