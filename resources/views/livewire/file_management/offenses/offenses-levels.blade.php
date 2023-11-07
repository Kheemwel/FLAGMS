{{-- <div class="card-tools" style="display: flex; justify-content: flex-end; margin-bottom: 2rem; margin-right: 2rem;">
    <!--SEARCH FEATURE-->
    <div class="input-group input-group-sm" style="max-width: 20%;">
        <!--SEARCH INPUT-->
        <input class="form-control float-right" name="table_search" placeholder="Search" style="height: 35px;" type="text" wire:model.live='search'>
    </div>
</div> --}}

<div class="card" style="margin-left: 2rem; margin-right: 2rem;">
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="border: 1px solid #252525;">
        <table class="table text-nowrap" style="text-align: center;">
            <thead style="background-color: #7684B9; color: white;">
                <tr>
                    {{-- <th style="border-right: 1px solid #252525;">ID</th> --}}
                    <th style="border-right: 1px solid #252525;">Offense Levels</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($offense_levels as $level)
                    <tr>
                        {{-- <th scope="row">{{ $level->id }}</th> --}}
                        <td>{{ $level->level }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

