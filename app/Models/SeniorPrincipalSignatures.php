<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeniorPrincipalSignatures extends Model
{
    use HasFactory;
    protected $table = 'senior_principal_signatures';
    protected $primaryKey = 'id';
    protected $fillable = [
        'signature'
    ];
}
