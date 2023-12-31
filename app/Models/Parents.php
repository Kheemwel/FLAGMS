<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Parents extends Model
{
    use HasFactory;
    protected $table = 'parents';
    protected $primaryKey = 'id';

    protected $appends = ['name'];
    
    protected $fillable = [
        'user_account_id'
    ];

    public function getUserAccount(): BelongsTo
    {
        return $this->belongsTo(UserAccounts::class, 'user_account_id');
    }
    
    public function children() : BelongsToMany
    {
        return $this->belongsToMany(Students::class, 'parent_and_child', 'parent_id', 'student_id');
    }

    public function hasChildRelationship() : HasMany
    {
        return $this->hasMany(ParentAndChild::class, 'parent_id');
    }

    public function getNameAttribute()
    {
        return $this->getUserAccount->name;
    }
}
