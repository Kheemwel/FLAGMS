<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentViolationSignatures extends Model
{
    use HasFactory;
    protected $table = 'student_violation_signatures';
    protected $primaryKey = 'id';
    protected $fillable = [
        'signature'
    ];
}
