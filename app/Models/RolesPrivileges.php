<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RolesPrivileges extends Model
{
    use HasFactory;
    protected $table = 'roles_privileges';
    protected $primaryKey = 'id';
    protected $fillable = [
        'role_id', 'privilege_id'
    ];
}
