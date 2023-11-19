<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestHomeVisitationForms extends Model
{
    use HasFactory;
    protected $table = 'request_home_visitation_forms';
    protected $primaryKey = 'id';
    protected $fillable = [
        'request_form_id', 'student_id', 'reason'
    ];

    public function requestForm()
    {
        return $this->belongsTo(RequestForms::class, 'request_form_id');
    }

    public function student()
    {
        return $this->belongsTo(Students::class, 'student_id');
    }
}
