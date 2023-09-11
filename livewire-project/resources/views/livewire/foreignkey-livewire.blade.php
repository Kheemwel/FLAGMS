<div>
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @include('livewire.livewire_foreignkey.add')

    <div>
        <div>
            <div id="categoryDropdown" class="dropdown">
                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    Filter by Category:
                </button>
                <div class="dropdown-menu">
                    @foreach ($food_categories as $category)
                        <label class="dropdown-item">
                            <input type="checkbox" wire:model.defer="selectedCategories" value="{{ $category->category }}">
                            {{ $category->category }}
                        </label>
                     @endforeach
                     <hr class="dropdown-divider">
                     <button wire:click="applyFilter()" class="btn btn-primary btn-sm">Apply</button>
                </div>
            </div>
        </div>
        
        <div>
            <div id="nutritionDropdown">
                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside">
                    Filter by Nutrition:
                </button>
                <div class="dropdown-menu">
                    @foreach ($food_nutritions as $nutrition)
                        <label class="dropdown-item">
                            <input type="checkbox" wire:model.defer="selectedNutritions" value="{{ $nutrition->nutrition }}">
                            {{ $nutrition->nutrition }}
                        </label>
                    @endforeach
                    <hr class="dropdown-divider">
                    <button wire:click="applyFilter()" class="btn btn-primary btn-sm">Apply</button>
                </div>
            </div>
        </div>
        
        <input type="text" wire:model="search" placeholder="Search Food Name...">
    </div>

    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Food Name</th>
                <th>Food Category</th>
                <th>Food Nutrition</th>
                <th width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($foods as $food)
                <tr>
                    <td>{{ $food->id }}</td>
                    <td>{{ $food->food_name }}</td>
                    <td>{{ $food->food_category }}</td>
                    <td>{{ $food->food_nutrition }}</td>
                    <td>
                        <button wire:click="get_data({{ $food->id }})" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#viewModal">View</button>
                        <button wire:click="get_data({{ $food->id }})" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                        <button wire:click="get_data({{ $food->id }})" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#confirm-deleteModal">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $foods->links() }}



    @include('livewire.livewire_foreignkey.edit')
    @include('livewire.livewire_foreignkey.view')
    @include('livewire.livewire_foreignkey.confirm-delete')
    @include('livewire.livewire_foreignkey.add_category_nutrition')
</div>

