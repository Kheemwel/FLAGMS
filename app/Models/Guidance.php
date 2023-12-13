<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Guidance extends Model
{
    use HasFactory;
    protected $table = 'guidance';
    protected $primaryKey = 'id';

    protected $appends = ['name'];
    protected $fillable = [
        'user_account_id'
    ];

    public function getUserAccount() : BelongsTo
    {
        return $this->belongsTo(UserAccounts::class, 'user_account_id');
    }

    public function getNameAttribute() 
    {
        return $this->getUserAccount->name;
    }
}
