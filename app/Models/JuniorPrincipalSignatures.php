<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JuniorPrincipalSignatures extends Model
{
    use HasFactory;
    protected $table = 'junior_principal_signatures';
    protected $primaryKey = 'id';
    protected $fillable = [
        'signature'
    ];
}
