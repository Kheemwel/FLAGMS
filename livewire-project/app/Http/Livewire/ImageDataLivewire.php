<?php

namespace App\Http\Livewire;

use App\Models\ImageData;
use Livewire\Component;
use Livewire\WithFileUploads;

class ImageDataLivewire extends Component
{
    use WithFileUploads;
    public $editMode = false;
    public $images, $image_binary, $public_image_path, $private_image_path;
    public $selected_id;

    public function render()
    {
        $this->images = ImageData::all();
        return view('livewire.image_data.image-data-livewire');
    }

    public function store()
    {
        $this->validate([
            'image_binary' => 'required|image|max:1024'
        ]);

        $image_content = null;
        if ($this->image_binary) {
            $image_content = file_get_contents($this->image_binary->getRealPath());
        }
        $fileName =  $this->image_binary->getClientOriginalName();
        $publicPath = $this->image_binary->storeAs('images', 'public--' . $fileName, 'public');
        $privatePath = $this->image_binary->storeAs('images', 'private--' . $fileName, 'private');
        ImageData::create([
            'image_binary' => $image_content,
            'public_image_path' => $publicPath,
            'private_image_path' => $privatePath
        ]);
        $this->resetInput();
    }

    public function edit($id)
    {
        $image = ImageData::find($id);
        $this->selected_id = $id;
        $this->image_binary = $image->image_binary;
        $this->public_image_path = $image->public_image_path;
        $this->private_image_path = $image->private_image_path;
        $this->editMode = true;
    }

    public function update()
    {
        $image = ImageData::find($this->select);
        $publicPath = $this->image_binary->store('images', 'public');
        $privatePath = $this->image_binary->store('images', 'private');
        $image->update([
            'image_binary' => $this->image_binary,
            'public_image_path' => $publicPath,
            'private_image_path' => $privatePath
        ]);
        $this->resetInput();
        $this->editMode = false;
    }

    public function delete($id)
    {
        ImageData::find($id)->delete();
    }

    public function resetInput()
    {
        $this->image_binary = null;
        $this->public_image_path = null;
        $this->private_image_path = null;
    }
    public function imageBinaryToSRC($binary_content)
    {
        return 'data:image/jpeg;base64,' . base64_encode($binary_content);
    }
}
