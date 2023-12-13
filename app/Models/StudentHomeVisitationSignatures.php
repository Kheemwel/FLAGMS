<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentHomeVisitationSignatures extends Model
{
    use HasFactory;
    protected $table = 'student_home_visitation_signatures';
    protected $primaryKey = 'id';
    protected $fillable = [
        'signature'
    ];
}
