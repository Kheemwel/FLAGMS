<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ProfilePictures extends Model
{
    use HasFactory;
    protected $table = 'profile_pictures';
    protected $primaryKey = 'id';
    protected $fillable = [
        'profile_picture'
    ];

    public function hasUserAccount() : HasOne {
        return $this->hasOne(UserAccounts::class, 'profile_picture_id');
    }
}
