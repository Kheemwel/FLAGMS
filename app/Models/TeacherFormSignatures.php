<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeacherFormSignatures extends Model
{
    use HasFactory;
    protected $table = 'teacher_form_signatures';
    protected $primaryKey = 'id';
    protected $fillable = [
        'signature'
    ];
}
