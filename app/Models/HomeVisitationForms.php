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
        'form_id', 'student_id', 'reason', 'visitation_date', 'place', 'remark'
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
        return $this->form->teacherName();
    }
}
