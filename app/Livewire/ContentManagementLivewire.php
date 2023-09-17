<?php

namespace App\Livewire;

use App\Models\WebsiteLogo;
use App\Models\WebsiteSchoolName;
use App\Models\WebsiteSubtitle;
use App\Models\WebsiteTitle;
use App\Traits\Toasts;
use Livewire\Component;
use Livewire\WithFileUploads;

class ContentManagementLivewire extends Component
{
    use Toasts;
    use WithFileUploads;
    public $title, $logo, $subtitle, $school_name;
    public $uploadedLogo;

    public function render()
    {
        $this->title = WebsiteTitle::find(1)->title;
        $this->logo = imageBinaryToSRC(WebsiteLogo::find(1)->logo);
        $this->subtitle = WebsiteSubtitle::find(1)->subtitle;
        $this->school_name = WebsiteSchoolName::find(1)->school_name;
        return view('livewire.content_management.content-management-livewire');
    }

    public function updateTitle()
    {
        $this->validate([
            'title' => 'required|max:255'
        ]);

        WebsiteTitle::find(1)->update([
            'title' => $this->title
        ]);

        $this->showToast('success', 'Website Title Updated Successfully');
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
    }
    public function updateSubtitle()
    {
        $this->validate([
            'subtitle' => 'required|max:255'
        ]);

        WebsiteSubtitle::find(1)->update([
            'subtitle' => $this->subtitle
        ]);

        $this->showToast('success', 'Website Subtitle Updated Successfully');
    }
    public function updateSchoolName()
    {
        $this->validate([
            'school_name' => 'required|max:255'
        ]);

        WebsiteSchoolName::find(1)->update([
            'school_name' => $this->school_name
        ]);

        $this->showToast('success', 'Website School Name Updated Successfully');
    }

    public function resetInputFields()
    {
        $this->uploadedLogo = null;
    }
}
