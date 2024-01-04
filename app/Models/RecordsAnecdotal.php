<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecordsAnecdotal extends Model
{
    use HasFactory;
    protected $table = 'records_anecdotals';
    protected $primaryKey = 'id';
    protected $fillable = [
        'file', 'student_name', 'school_level', 'grade_level',
    ];
}
