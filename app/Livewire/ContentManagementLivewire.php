<?php

namespace App\Livewire;

use App\Models\WebsiteLogo;
use App\Models\WebsiteSchoolName;
use App\Models\WebsiteSubtitle;
use App\Models\WebsiteTitle;
use App\Traits\Toasts;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Layout('components.layouts.landing-page')]
class ContentManagementLivewire extends Component
{
    use Toasts;
    use WithFileUploads;
    public $title, $logo, $subtitle, $school_name;
    public $old_contents = [];
    public $uploadedLogo;

    protected $listeners = ['titleChange', 'subtitleChange', 'schoolNameChange'];

    public function mount()
    {
        $this->title = WebsiteTitle::find(1)->title;
        $this->logo = imageBinaryToSRC(WebsiteLogo::find(1)->logo);
        $this->subtitle = WebsiteSubtitle::find(1)->subtitle;
        $this->school_name = WebsiteSchoolName::find(1)->school_name;

        $this->old_contents = [
            'logo' => $this->logo,
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'school_name' => $this->school_name
        ];
    }

    public function render()
    {
        return view('livewire.content_management.content-management-livewire');
    }

    public function updateTitle()
    {
        $this->validate([
            'title' => 'required'
        ]);

        WebsiteTitle::find(1)->update([
            'title' => $this->title
        ]);

        $this->showToast('success', 'Website Title Updated Successfully');

        $this->old_contents['title'] = $this->title;
    }

    public function updateLogo()
    {
        $this->validate([
            'uploadedLogo' => 'required|image|mimes:jpeg,png,jpg|max:1024'
        ]);

        WebsiteLogo::find(1)->update([
            'logo' => file_get_contents($this->uploadedLogo->getRealPath())
        ]);

        $this->showToast('success', 'Website Logo Updated Successfully');

        $this->logo = imageBinaryToSRC(WebsiteLogo::find(1)->logo);
        $this->old_contents['logo'] = $this->logo;
    }
    public function updateSubtitle()
    {
        $this->validate([
            'subtitle' => 'required'
        ]);

        WebsiteSubtitle::find(1)->update([
            'subtitle' => $this->subtitle
        ]);

        $this->showToast('success', 'Website Subtitle Updated Successfully');
        $this->old_contents['subtitle'] = $this->subtitle;
    }
    public function updateSchoolName()
    {
        $this->validate([
            'school_name' => 'required'
        ]);

        WebsiteSchoolName::find(1)->update([
            'school_name' => $this->school_name
        ]);

        $this->showToast('success', 'Website School Name Updated Successfully');
        $this->old_contents['school_name'] = $this->school_name;
    }

    public function resetInputFields()
    {
        $this->uploadedLogo = null;
        $this->logo = $this->old_contents['logo'];
        $this->title = $this->old_contents['title'];
        $this->subtitle = $this->old_contents['subtitle'];
        $this->school_name = $this->old_contents['school_name'];
        $this->dispatch('resetField', $this->old_contents);
    }

    public function titleChange($value)
    {
        $this->title = $value;
    }

    public function subtitleChange($value)
    {
        $this->subtitle = $value;
    }

    public function schoolNameChange($value)
    {
        $this->school_name = $value;
    }
}
