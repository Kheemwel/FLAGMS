<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Privileges extends Model
{
    use HasFactory;
    protected $table = 'privileges';
    protected $primaryKey = 'id';
    protected $fillable = [
        'privilege', 'is_exclusive'
    ];
}
