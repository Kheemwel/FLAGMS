<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentIndividualInventory extends Model
{
    use HasFactory;
    protected $table = 'student_individual_inventories';
    protected $primaryKey = 'id';

    protected $appends = ['name', 'address'];

    protected $fillable = [
        'student_id', 'first_name', 'middle_name', 'last_name', 'suffix_name', 'lrn', 'gender',
        'status', 'citizenship', 'birthday', 'birth_place', 'religion',
        'father_name', 'father_contact', 'mother_name', 'mother_contact', 'guardian_name', 'guardian_contact',
        'street_no', 'street', 'subdivision', 'barangay', 'city', 'province', 'zipcode',
        'tel_no', 'mobile_no', 'email',
        'primary_school', 'primary_start', 'primary_end', 'junior_school', 'junior_start', 'junior_end',
        'senior_school', 'senior_start', 'senior_end', 'medical_conditions', 'allergies',
        'emergency_first_name', 'emergency_last_name', 'emergency_contact', 'emergency_relationship',
    ];

    public function getAddressAttribute()
    {
        return "{$this->street_no} {$this->street}, {$this->subdivision} {$this->barangay}, {$this->city}, {$this->province}";
    }

    public function getNameAttribute()
    {
        $mi = $this->middle_name ?? '';
        $suffix = $this->suffix_name ?? '';
        return "{$this->first_name} {$mi} {$this->last_name} {$suffix}";
    }
}
