<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forms extends Model
{
    use HasFactory;
    protected $table = 'forms';
    protected $primaryKey = 'id';

    protected $appedends = ['teacher_name', 'guidance_name'];
    protected $fillable = [
        'guidance_id', 'teacher_id', 'form_type', 'status',
    ];

    public function homeVisitationForm()
    {
        return $this->hasOne(HomeVisitationForms::class, 'form_id');
    }

    public function violationForm()
    {
        return $this->hasOne(ViolationForms::class, 'form_id');
    }


    public function Teacher()
    {
        return $this->belongsTo(Teachers::class, 'teacher_id');
    }

    public function getTeacherNameAttribute()
    {
        return $this->Teacher->name;
    }    

    public function Guidance()
    {
        return $this->belongsTo(Guidance::class, 'teacher_id');
    }

    public function getGuidanceNameAttribute()
    {
        return $this->Guidance->name;
    }
}
