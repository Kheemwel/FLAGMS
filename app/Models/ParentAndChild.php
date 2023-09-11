<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentAndChild extends Model
{
    use HasFactory;
    protected $table = 'parent_and_child';
    protected $primaryKey = 'id';
    protected $fillable = [
        'parent_id', 'student_id'
    ];
}
