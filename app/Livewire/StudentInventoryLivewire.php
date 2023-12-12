<?php

namespace App\Livewire;

use App\Models\StudentIndividualInventory;
use App\Models\Students;
use Livewire\Component;

class StudentInventoryLivewire extends Component
{
    public $inventory, $student_id, $my_medical_conditions = [], $other_conditions;
    public $medical_conditions = ['Diabetes', 'Heart Problems', 'Asthma'];
    public $input = [
        "first_name" => "",
        "middle_name" => "",
        "last_name" => "",
        "suffix_name" => "",
        "lrn" => "",
        "gender" => "",
        "status" => "",
        "citizenship" => "",
        "birthday" => "",
        "birth_place" => "",
        "religion" => "",
        "father_name" => "",
        "father_contact" => "",
        "mother_name" => "",
        "mother_contact" => "",
        "guardian_name" => "",
        "guardian_contact" => "",
        "street_no" => "",
        "street" => "",
        "subdivision" => "",
        "barangay" => "",
        "city" => "",
        "province" => "",
        "zipcode" => "",
        "tel_no" => "",
        "mobile_no" => "",
        "email" => "",
        "primary_school" => "",
        "primary_start" => "",
        "primary_end" => "",
        "junior_school" => "",
        "junior_start" => "",
        "junior_end" => "",
        "senior_school" => "",
        "senior_start" => "",
        "senior_end" => "",
        "medical_conditions" => "",
        "allergies" => "",
        "emergency_first_name" => "",
        "emergency_last_name" => "",
        "emergency_contact" => "",
        "emergency_relationship" => "",
    ];

    public function mount()
    {
        $id = session('user_id');
        if ($id) {
            $student = Students::where('user_account_id', $id)->first();
            $this->student_id = $student->id;
            $this->input['first_name'] = $student->first_name;
            $this->input['last_name'] = $student->last_name;
            $this->input['lrn'] = $student->lrn;
            $this->inventory = StudentIndividualInventory::where('student_id', $student->id)->first();
        }
    }
    public function render()
    {
        return view('livewire.student_inventory.student-inventory-livewire');
    }

    public function submitInventory()
    {
        if (count($this->my_medical_conditions) > 0) {
            $my_condition = implode(', ', $this->my_medical_conditions) . ', ' . $this->other_conditions;
        } else {
            $my_condition = $this->other_conditions;
        }

        $this->input['medical_conditions'] = $my_condition;

        $this->validate([
            "input.first_name" => "required",
            "input.middle_name" => "nullable",
            "input.last_name" => "required",
            "input.suffix_name" => "nullable",
            "input.lrn" => "required",
            "input.gender" => "required",
            "input.status" => "required",
            "input.citizenship" => "required",
            "input.birthday" => "required",
            "input.birth_place" => "required",
            "input.religion" => "required",
            "input.father_name" => "required",
            "input.father_contact" => "required",
            "input.mother_name" => "required",
            "input.mother_contact" => "required",
            "input.guardian_name" => "required",
            "input.guardian_contact" => "required",
            "input.street_no" => "required",
            "input.street" => "required",
            "input.subdivision" => "required",
            "input.barangay" => "required",
            "input.city" => "required",
            "input.province" => "required",
            "input.zipcode" => "required",
            "input.tel_no" => "nullable",
            "input.mobile_no" => "required",
            "input.email" => "required",
            "input.primary_school" => "required",
            "input.primary_start" => "required",
            "input.primary_end" => "required",
            "input.junior_school" => "required",
            "input.junior_start" => "required",
            "input.junior_end" => "required",
            "input.senior_school" => "required",
            "input.senior_start" => "required",
            "input.senior_end" => "required",
            "input.medical_conditions" => "nullable",
            "input.allergies" => "nullable",
            "input.emergency_first_name" => "required",
            "input.emergency_last_name" => "required",
            "input.emergency_contact" => "required",
            "input.emergency_relationship" => "required",
        ]);

        $my_inventory = StudentIndividualInventory::create(array_merge(['student_id' => $this->student_id,], $this->input));
        $this->inventory = $my_inventory;
    }
}
