<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Teachers extends Model
{
    use HasFactory;
    protected $table = 'teachers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_account_id'
    ];

    public function getUserAccount(): BelongsTo
    {
        return $this->belongsTo(UserAccounts::class, 'user_account_id');
    }

    public function getName()
    {
        return $this->getUserAccount->getNameAttribute();
    }
}
