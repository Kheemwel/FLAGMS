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

    protected $appends = ['name', 'first_name', 'last_name'];
    protected $fillable = [
        'user_account_id', 'school_level_id', 'grade_level_id', 'lrn'
    ];

    public function getUserAccount(): BelongsTo
    {
        return $this->belongsTo(UserAccounts::class, 'user_account_id');
    }

    public function schoolLevel(): BelongsTo
    {
        return $this->belongsTo(SchoolLevels::class, 'school_level_id');
    }

    public function getSchoolLevel()
    {
        return $this->schoolLevel->school_level;
    }

    public function gradeLevel(): BelongsTo
    {
        return $this->belongsTo(GradeLevels::class, 'grade_level_id');
    }

    public function getGradeLevel()
    {
        return $this->gradeLevel->grade_level;
    }

    public function parents()
    {
        return $this->belongsToMany(Parents::class, 'parent_and_child', 'student_id', 'parent_id');
    }

    public function parentName()
    {
        return $this->parents()->first() ? $this->parents()->first()->name : '';
    }

    public function hasParentRelationship() : HasMany
    {
        return $this->hasMany(ParentAndChild::class, 'student_id');
    }

    public function getNameAttribute()
    {
        return $this->getUserAccount->name;
    }

    public function getFirstNameAttribute()
    {
        return $this->getUserAccount->first_name;
    }
    
    public function getLastNameAttribute()
    {
        return $this->getUserAccount->last_name;
    }

    public function IndividualInventory()
    {
        return $this->hasOne(StudentIndividualInventory::class, 'student_id');
    }

    public function AnecdotalRecord()
    {
        return $this->hasMany(StudentsAnecdotals::class, 'student_id');
    }
}
