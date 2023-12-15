<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuidanceFormSignatures extends Model
{
    use HasFactory;
    protected $table = 'guidance_form_signatures';
    protected $primaryKey = 'id';
    protected $fillable = [
        'signature'
    ];
}
