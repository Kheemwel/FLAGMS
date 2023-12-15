<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentFormSignatures extends Model
{
    use HasFactory;
    protected $table = 'parent_form_signatures';
    protected $primaryKey = 'id';
    protected $fillable = [
        'signature'
    ];
}
