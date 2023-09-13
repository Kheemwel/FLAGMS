<?php

namespace App\Livewire;

use App\Models\WebsiteLogo;
use App\Models\WebsiteTitle;
use Livewire\Component;
use Livewire\WithFileUploads;

class ContentManagementLivewire extends Component
{
    use WithFileUploads;
    public $title, $logo;
    public $uploadedLogo;
    public $count = 0;

    public function render()
    {
        $this->title = WebsiteTitle::find(1)->first()->title;
        $this->logo = imageBinaryToSRC(WebsiteLogo::find(1)->first()->logo);
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
    }

    public function updateLogo()
    {
        $this->validate([
            'uploadedLogo' => 'required|image|mimes:jpeg,png,jpg|max:1024'
        ]);

        WebsiteLogo::find(1)->update([
            'logo' => file_get_contents($this->uploadedLogo->getRealPath())
        ]);
    }

    public function showToast($message)
    {
        session()->flash('message', $message);
        $this->dispatch('showToast');
    }

    public function resetInputFields()
    {
        $this->uploadedLogo = null;
    }
}
