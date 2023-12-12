<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    use HasFactory;
    protected $table = 'notifications';
    protected $primaryKey = 'id';
    protected $fillable = [
        'from_user', 'to_user', 'message', 'is_read'
    ];

    public function FromUser()
    {
        return $this->belongsTo(UserAccounts::class, 'from_user');
    }

    public function ToUser()
    {
        return $this->belongsTo(UserAccounts::class, 'to_user');
    }

    public function sender_name()
    {
        return $this->FromUser->getNameAttribute();
    }

    public function sender_profile()
    {
        return $this->FromUser->profile_picture();
    }

    public function receiver_name()
    {
        return $this->ToUser->getNameAttribute();
    }
}
