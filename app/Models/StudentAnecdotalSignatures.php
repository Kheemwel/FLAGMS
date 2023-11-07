<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAnecdotalSignatures extends Model
{
    use HasFactory;
    protected $table = 'student_anecdotal_signatures';
    protected $primaryKey = 'id';
    protected $fillable = [
        'student_signature'
    ];
}
