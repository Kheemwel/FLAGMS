<?php

namespace App\Livewire;

use App\Models\GradeLevels;
use App\Models\RecordsAnecdotal;
use App\Models\RecordsHomeVisitationForms;
use App\Models\RecordsIndividualInventory;
use App\Models\RecordsViolationForms;
use App\Models\SchoolLevels;
use App\Models\UserAccounts;
use App\Traits\Toasts;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\RequiredIf;
use Livewire\Component;
use Livewire\WithFileUploads;

class PhysicalRecordsLivewire extends Component
{
    use WithFileUploads;
    use Toasts;
    public $records_anecdotal, $records_inventory, $records_home_visitation_forms, $records_violation_forms;
    public $school_levels, $grade_levels, $users_name;
    public $student_name, $school_level, $grade_level, $teacher_name, $uploaded_file, $file_name;
    public $record_id, $record_pdf, $record_image;

    public function mount()
    {

        $this->school_levels = SchoolLevels::select('school_level')->get();
        $this->grade_levels = GradeLevels::all();
        $this->users_name = UserAccounts::get()->pluck('name')->toArray();
    }

    public function render()
    {
        $this->records_anecdotal = RecordsAnecdotal::all();
        $this->records_inventory = RecordsIndividualInventory::all();
        $this->records_home_visitation_forms = RecordsHomeVisitationForms::all();
        $this->records_violation_forms = RecordsViolationForms::all();
        return view('livewire.physical_records.physical-records-livewire');
    }

    public function updatedUploadedFile()
    {
        $this->file_name = $this->uploaded_file->getClientOriginalName();
    }

    public function uploadRecord($type, $student_name, $school_level, $grade_level, $teacher_name)
    {
        $this->student_name = $student_name;
        $this->school_level = $school_level;
        $this->grade_level = $grade_level;
        $this->teacher_name = $teacher_name;

        $validated = $this->validate([
            'student_name' => 'required|string',
            'school_level' => 'required|string',
            'grade_level' => 'required|string',
            'teacher_name' => Rule::requiredIf($type === 'home' || $type === 'violation') . '|string',
            'uploaded_file' => 'required|file|mimes:jpeg,png,jpg,pdf|max:10485',
        ]);

        $fileContent = null;
        if ($this->uploaded_file) {
            $fileContent = file_get_contents($this->uploaded_file->getRealPath());
        }

        switch ($type) {
            case 'anecdotal':
                RecordsAnecdotal::create([
                    'file' => $fileContent,
                    'student_name' => $validated['student_name'],
                    'school_level' => $validated['school_level'],
                    'grade_level' => $validated['grade_level'],
                ]);
                break;
            case 'inventory':
                RecordsIndividualInventory::create([
                    'file' => $fileContent,
                    'student_name' => $validated['student_name'],
                    'school_level' => $validated['school_level'],
                    'grade_level' => $validated['grade_level'],
                ]);
                break;
            case 'home':
                RecordsHomeVisitationForms::create([
                    'file' => $fileContent,
                    'student_name' => $validated['student_name'],
                    'school_level' => $validated['school_level'],
                    'grade_level' => $validated['grade_level'],
                    'teacher_name' => $validated['teacher_name'],
                ]);
                break;
            case 'violation':
                RecordsViolationForms::create([
                    'file' => $fileContent,
                    'student_name' => $validated['student_name'],
                    'school_level' => $validated['school_level'],
                    'grade_level' => $validated['grade_level'],
                    'teacher_name' => $validated['teacher_name'],
                ]);
                break;
        }

        $this->showToast('success', 'The Record is Uploaded Successfully.');
        $this->resetInputs();
    }

    public function getRecord($type, $id)
    {
        $record = null;
        switch ($type) {
            case 'anecdotal':
                $record = RecordsAnecdotal::find($id);
                break;
            case 'inventory':
                $record = RecordsIndividualInventory::find($id);
                break;
            case 'home':
                $record = RecordsHomeVisitationForms::find($id);
                break;
            case 'violation':
                $record = RecordsViolationForms::find($id);
                break;
        }

        $this->record_id = $record->id;
        $this->student_name = $record->student_name;
        $this->school_level = $record->school_level;
        $this->grade_level = $record->grade_level;
        $this->teacher_name = $record->teacher_name ?? "";

        
        $file = $record->file;
        $fileType = checkFileType($file);
        if ($fileType ===  'application/pdf') {
            $this->record_pdf = pdfBinaryToSRC($file);
        } else {
            $this->record_image = imageBinaryToSRC($file);
        }

        $this->dispatch('getRecord', $this->student_name, $this->school_level, $this->grade_level, $this->teacher_name);
    }

    public function updateRecord($type, $student_name, $school_level, $grade_level, $teacher_name)
    {
        $this->student_name = $student_name;
        $this->school_level = $school_level;
        $this->grade_level = $grade_level;
        $this->teacher_name = $teacher_name;

        $validated = $this->validate([
            'student_name' => 'required|string',
            'school_level' => 'required|string',
            'grade_level' => 'required|string',
            'teacher_name' => Rule::requiredIf($type === 'home' || $type === 'violation') . '|string',
            'uploaded_file' => 'nullable|file|mimes:jpeg,png,jpg,pdf|max:10485',
        ]);

        $fileContent = null;
        if ($this->uploaded_file) {
            $fileContent = file_get_contents($this->uploaded_file->getRealPath());
        }
        
        $update = [
            'student_name' => $validated['student_name'],
            'school_level' => $validated['school_level'],
            'grade_level' => $validated['grade_level'],
        ];
        if ($fileContent) {
            $update['file'] = $fileContent;
        }

        switch ($type) {
            case 'anecdotal':
                RecordsAnecdotal::find($this->record_id)->update($update);
                break;
            case 'inventory':
                RecordsIndividualInventory::find($this->record_id)->update($update);
                break;
            case 'home':
                $update['teacher_name'] = $validated['teacher_name'];
                RecordsHomeVisitationForms::find($this->record_id)->update($update);
                break;
            case 'violation':
                $update['teacher_name'] = $validated['teacher_name'];
                RecordsViolationForms::find($this->record_id)->update($update);
                break;
        }

        $this->showToast('success', 'The Record is Updated Successfully.');
        $this->resetInputs();
        $this->dispatch('closeModals');
    }

    public function deleteRecord($type, $id)
    {
        switch ($type) {
            case 'anecdotal':
                RecordsAnecdotal::find($id)->delete();
                break;
            case 'inventory':
                RecordsIndividualInventory::find($id)->delete();
                break;
            case 'home':
                RecordsHomeVisitationForms::find($id)->delete();
                break;
            case 'violation':
                RecordsViolationForms::find($id)->delete();
                break;
        }
    }

    public function resetInputs()
    {
        $this->student_name = null;
        $this->school_level = null;
        $this->grade_level = null;
        $this->teacher_name = null;
        $this->uploaded_file = null;
        $this->file_name = null;
        $this->record_id = null;
        $this->record_pdf = null;
        $this->record_image = null;
        $this->dispatch('resetInputs');
    }
}
