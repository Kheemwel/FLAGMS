<?php

namespace App\Livewire;

use App\Models\GuidanceScheduleTags;
use App\Traits\Toasts;
use Livewire\Component;

class GuidanceScheduleTagsLivewire extends Component
{
    use Toasts;
    public $schedule_tags;
    public $tag_name, $color, $tag_id;
    public function render()
    {
        $this->schedule_tags = GuidanceScheduleTags::all();
        return view('livewire.file_management.guidance_schedule_tags.guidance-schedule-tags-livewire');
    }

    public function addScheduleTag()
    {
        $validateData = $this->validate([
            'tag_name' => 'required|string|max:255',
            'color' => 'required|string|min:7|max:7'
        ]);

        GuidanceScheduleTags::create($validateData);
        $this->showToast('success', 'New Color Added Successfully');
        $this->resetInputFields();
    }

    public function getScheduleTag($id)
    {
        $color = GuidanceScheduleTags::find($id);
        $this->tag_id = $color->id;
        $this->tag_name = $color->tag_name;
        $this->color = $color->color;
    }

    public function updateScheduleTag()
    {
        $validateData = $this->validate([
            'tag_name' => 'required|string|max:255',
            'color' => 'required|string|min:7|max:7'
        ]);

        GuidanceScheduleTags::find($this->tag_id)->update($validateData);
        $this->showToast('success', 'The Color is Updated Successfully');
        $this->resetInputFields();
    }

    public function delete()
    {
        GuidanceScheduleTags::find($this->tag_id)->delete();
        $this->showToast('success', 'The Color is Deleted Successfully');
    }

    public function resetInputFields()
    {
        $this->tag_id = null;
        $this->tag_name = null;
        $this->color = null;
        $this->resetErrorBag();
    }
}
