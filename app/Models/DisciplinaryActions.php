<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisciplinaryActions extends Model
{
    use HasFactory;
    protected $table = 'disciplinary_actions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'action', 'description'
    ];
}
