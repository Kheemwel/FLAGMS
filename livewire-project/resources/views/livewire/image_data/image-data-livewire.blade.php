<div>
    <form wire:submit.prevent="{{ $editMode ? 'update' : 'store' }}">
        <div>
            <label for="image">Profile Picture:</label>
            <input type="file" id="image" wire:model="image_binary">
            <div wire:loading wire:target="image_binary">Uploading...</div>
            @if ($image_binary)
                Photo Preview:
                <img src="{{ $image_binary->temporaryUrl() }}" width="100px">
            @endif
            @error('image_binary') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div>
            <button type="submit" class="btn btn-primary">{{ $editMode ? 'Update' : 'Create' }}</button>
        </div>
    </form>
    <br><br><br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Binary Image</th>
                <th>Image from Public Storage</th>
                <th>Image from Private Storage</th>
            </tr>
        </thead>
        <tbody>
            @foreach($images as $image)
                <tr>
                    <td>{{ $image->id }}</td>
                    <td><img src="{{ $this->imageBinaryToSRC($image->image_binary) }}" alt="" width="50px"></td>
                    <td><img src="{{ Storage::url($image->public_image_path) }}" alt="" width="50px">{{ $image->public_image_path }}</td>
                    <td><img src="data:image/jpeg;base64,{{ base64_encode(Storage::disk('private')->get($image->private_image_path)) }}" alt="" width="50px">{{ $image->private_image_path }}</td>
                    <td>
                        {{-- <button class="btn btn-sm btn-info" wire:click="edit({{ $item->id }})">Edit</button> --}}
                        <button class="btn btn-sm btn-danger" wire:click="delete({{ $image->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
