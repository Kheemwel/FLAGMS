<div>
    <form wire:submit.prevent="{{ $updateMode ? 'update' : 'store' }}">
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" wire:model="name">
            @error('name') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div>
            <label for="middlename">Middle Name:</label>
            <input type="text" id="middlename" wire:model="middle_initial">
            @error('middle_initial') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div>
            <label for="age">Age:</label>
            <input type="number" id="age" wire:model="age">
            @error('age') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div>
            <label for="weight">Weight:</label>
            <input type="number" step="0.01" id="weight" wire:model="weight">
            @error('weight') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div>
            <label for="contact">Contact:</label>
            <input type="number" id="contact" wire:model="contact">
            @error('contact') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div>
            <label for="birthday">Birthday:</label>
            <input type="date" id="birthday" wire:model="birthday">
            @error('birthday') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div>
            <label for="alarm">Alarm Time:</label>
            <input type="time" id="alarm" wire:model="alarm">
            @error('alarm') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div>
            <label for="profile">Profile Picture:</label>
            <input type="file" id="profile" wire:model="profile">
            @if ($profile)
                Photo Preview:
                <img src="{{ $profile->temporaryUrl() }}" width="100px">
            @elseif ($updateMode)
                Photo Preview:
                <img src="{{ Storage::url($profile) }}" alt="" width="100px">
            @endif
            @error('profile') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div>
            <label for="human">isHuman?</label>
            <input type="checkbox" id="isHuman" wire:model="isHuman">
            @error('isHuman') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div>
            <button type="submit" class="btn btn-primary">{{ $updateMode ? 'Update' : 'Create' }}</button>
        </div>
    </form>
    <br><br><br>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Middle Name</th>
                <th>Age</th>
                <th>Weight</th>
                <th>Contact</th>
                <th>Birthday</th>
                <th>Alarm</th>
                <th>Profile</th>
                <th>isHuman?</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->middle_initial }}</td>
                    <td>{{ $item->age }}</td>
                    <td>{{ $item->weight }}</td>
                    <td>{{ $item->contact }}</td>
                    <td>{{ date('F d,Y', strtotime($item->birthday)) }}</td>
                    <td>{{ date('H:i A', strtotime($item->alarm)) }}</td>
                    <td><img src="{{ Storage::url($item->profile) }}" alt="" width="50px"></td>
                    <td>{{ $item->isHuman ? 'True' : 'False' }}</td>
                    <td>
                        <button class="btn btn-sm btn-info" wire:click="edit({{ $item->id }})">Edit</button>
                        <button class="btn btn-sm btn-danger" wire:click="delete({{ $item->id }})">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
