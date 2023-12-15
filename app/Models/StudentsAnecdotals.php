<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsAnecdotals extends Model
{
    use HasFactory;
    protected $table = 'students_anecdotals';
    protected $primaryKey = 'id';
    protected $appends = ['category', 'level'];
    protected $fillable = [
        'student_id', 'date', 'time', 'offense_id', 'disciplinary_action_id', 'student_signature_id', 'guardian_name', 'guardian_signature_id'
    ];

    public function getOffense()
    {
        return $this->belongsTo(Offenses::class, 'offense_id');
    }

    public function getDisciplinaryAction()
    {
        return $this->belongsTo(DisciplinaryActions::class, 'disciplinary_action_id');
    }

    public function StudentSignature()
    {
        return $this->belongsTo(StudentAnecdotalSignatures::class, 'student_signature_id');
    }

    public function GuardianSignature()
    {
        return $this->belongsTo(GuardianAnecdotalSignatures::class, 'guardian_signature_id');
    }

    public function student_signature()
    {
        return $this->student_signature_id ? imageBinaryToSRC($this->StudentSignature->student_signature) : blankSignature();
    }

    public function guardian_signature()
    {
        return $this->guardian_signature_id ? imageBinaryToSRC($this->GuardianSignature->guardian_signature) : blankSignature();
    }
}
