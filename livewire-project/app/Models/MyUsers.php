<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyUsers extends Model
{
    use HasFactory;
    
    protected $table = 'myusers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'username', 'password', 'hashed_password'
    ];
}
