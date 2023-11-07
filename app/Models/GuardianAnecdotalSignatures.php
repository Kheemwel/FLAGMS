<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuardianAnecdotalSignatures extends Model
{
    use HasFactory;
    protected $table = 'guardian_anecdotal_signatures';
    protected $primaryKey = 'id';
    protected $fillable = [
        'guardian_signature'
    ];
}
