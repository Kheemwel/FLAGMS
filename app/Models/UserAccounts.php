<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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
        'role_id', 'first_name', 'last_name', 'password', 'email', 'profile_picture_id',
        'is_archive', 'archived_at', 'total_login', 'last_login'
    ];

    protected $appends = ['name', 'role'];

    public function getNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function name() : Attribute
    {
        return Attribute::make(
            get: fn () => $this->first_name . ' ' . $this->last_name,
        );
    }

    public function getProfilePicture(): BelongsTo
    {
        return $this->belongsTo(ProfilePictures::class, 'profile_picture_id');
    }

    public function Roles(): BelongsTo
    {
        return $this->belongsTo(Roles::class, 'role_id');
    }

    public function getRoleAttribute()
    {
        return $this->Roles->role;
    }

    public function hasGuidance(): HasOne
    {
        return $this->hasOne(Guidance::class, 'user_account_id');
    }

    public function hasStudent(): HasOne
    {
        return $this->hasOne(Students::class, 'user_account_id');
    }

    public function hasParent(): HasOne
    {
        return $this->hasOne(Parents::class, 'user_account_id');
    }

    public function hasTeacher(): HasOne
    {
        return $this->hasOne(Teachers::class, 'user_account_id');
    }

    public function hasPrincipal(): HasOne
    {
        return $this->hasOne(Principals::class, 'user_account_id');
    }

    public function profile_picture()
    {
        return $this->profile_picture_id ? imageBinaryToSRC($this->getProfilePicture->profile_picture) : defaultProfilePicture();
    }
}
