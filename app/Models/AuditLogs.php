<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuditLogs extends Model
{
    use HasFactory;
    protected $table = 'audit_logs';
    protected $primaryKey = 'id';
    protected $appends = ['user_name'];
    protected $fillable = [
        'user_account_id', 'action', 'description'
    ];

    public function UserAccount()
    {
        return $this->belongsTo(UserAccounts::class, 'user_account_id');
    }

    public function getUserNameAttribute()
    {
        return $this->UserAccount->name;
    }
}
