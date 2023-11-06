<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Roles extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'role', 'is_default'
    ];

    public function getUserAccounts() : HasMany
    {
        return $this->hasMany(UserAccounts::class, 'role_id');
    }

    public function privileges()
    {
        return $this->belongsToMany(Privileges::class, 'roles_privileges', 'role_id', 'privilege_id');
    }
}
