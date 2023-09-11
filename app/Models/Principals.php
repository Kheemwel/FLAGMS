<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Principals extends Model
{
    use HasFactory;
    protected $table = 'principals';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_account_id', 'principal_position_id'
    ];

    public function userAccount() : BelongsTo
    {
        return $this->belongsTo(UserAccounts::class, 'user_account_id');
    }

    public function principalPosition() : BelongsTo
    {
        return $this->belongsTo(PrincipalPositions::class, 'principal_position_id');
    }
}
