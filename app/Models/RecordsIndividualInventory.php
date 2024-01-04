<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecordsIndividualInventory extends Model
{
    use HasFactory;
    protected $table = 'records_individual_inventory';
    protected $primaryKey = 'id';
    protected $fillable = [
        'file', 'student_name', 'school_level', 'grade_level',
    ];
}
