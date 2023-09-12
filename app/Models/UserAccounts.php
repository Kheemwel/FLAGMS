<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserAccounts extends Model
{
    use HasFactory;
    protected $table = 'user_accounts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'username', 'role_id', 'first_name', 'last_name', 'password', 'hashed_password', 'profile_picture_id', 'is_archive', 
        'archived_at', 'total_login', 'last_login'
    ];

    public function getProfilePicture() : BelongsTo
    {
        return $this->belongsTo(ProfilePictures::class, 'profile_picture_id');
    }

    public function getRole() : BelongsTo
    {
        return $this->belongsTo(Roles::class, 'role_id');
    }

    public function hasGuidance() : HasOne
    {
        return $this->hasOne(Guidance::class, 'user_account_id');
    }

    public function hasStudent() : HasOne
    {
        return $this->hasOne(Students::class, 'user_account_id');
    }

    public function hasParent() : HasOne
    {
        return $this->hasOne(Parents::class, 'user_account_id');
    }

    public function hasTeacher() : HasOne
    {
        return $this->hasOne(Teachers::class, 'user_account_id');
    }

    public function hasPrincipal() : HasOne
    {
        return $this->hasOne(Principals::class, 'user_account_id');
    }
}
