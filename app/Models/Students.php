<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Students extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_account_id', 'school_level_id', 'grade_level_id', 'lrn'
    ];

    public function getUserAccount(): BelongsTo
    {
        return $this->belongsTo(UserAccounts::class, 'user_account_id');
    }

    public function schoolLevel(): BelongsTo
    {
        return $this->belongsTo(SchoolLevels::class);
    }

    public function gradeLevel(): BelongsTo
    {
        return $this->belongsTo(GradeLevels::class);
    }

    public function parents()
    {
        return $this->belongsToMany(Parents::class, 'parent_and_child', 'student_id', 'parent_id');
    }

    public function hasParentRelationship() : HasMany
    {
        return $this->hasMany(ParentAndChild::class, 'student_id');
    }
}
