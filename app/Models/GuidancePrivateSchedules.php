<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuidancePrivateSchedules extends Model
{
    use HasFactory;
    protected $table = 'guidance_private_schedules';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_account_id', 'guidance_program_id'
    ];

    public function UserAccount()
    {
        return $this->belongsTo(UserAccounts::class, 'user_account_id');
    }

    public function GuidanceProgram()
    {
        return $this->belongsTo(GuidancePrograms::class, 'guidance_program_id');
    }
}
