<!-- Notifications Dropdown Menu -->
<div class="d-flex justify-content-center align-items-center">
    <li class="nav-item dropdown mr-3 mt-1" wire:poll.5s>
        <a class="nav-link" id="notificationsDropdown" data-toggle="dropdown" href="#">
            <i class="fa fa-solid fa-bell text-lg" style="color: #252525;"></i>
            @if ($unread_count && $unread_count > 0)
                <span class="badge badge-warning navbar-badge">{{ $unread_count }}</span>
            @endif
        </a>
        <div class="dropdown-menu dropdown-menu-right" id="notificationsDropdownMenu" style="max-width: 500px; max-height: 300px; overflow-y: auto; overflow-x: hidden;" wire:ignore.self>
            <div class="row">
                <div class="col-sm-6 d-flex flex-row justify-content-start">
                    <span class="dropdown-header text-lg text-left font-weight-bold" style="color: #252525;">Notification</span>
                </div>
                <div class="col-sm-6 d-flex flex-row justify-content-end">
                    <span class="dropdown-header text-sm" style="color: #252525; cursor: pointer;" wire:click='readAll()'>Mark all as read</span>
                </div>
            </div>

            @foreach ($notifications as $notif)
                <!-- NOTIF CONTENT -->
                <a class="dropdown-item mb-1" href="#">
                    <div class="d-flex flex-row align-items-center">
                        <div>
                            <img src="{{ $notif->sender_profile() }}" style="width: 50px; height: 50px;">
                        </div>
                        <div class="d-flex flex-column ml-1 mr-5">
                            <span class="text-sm">{{ $notif->sender_name() }}</span>
                            <span class="text-sm">{{ $notif->message }}</span>
                            <span class="text-sm">{{ $notif->created_at->format('F d,Y   h:i A') }}</span>
                        </div>
                        <div class="d-flex flex-column mr-4 align-items-center">
                            @if ($notif->is_read)
                                <i class="fa fa-solid fa-check text-sm" style="color: #3C58FF;"></i>
                            @else
                                <i class="fa fa-solid fa-circle text-sm" style="color: #3C58FF;"></i>
                            @endif
                        </div>
                    </div>
                </a>
            @endforeach

            <a class="btn mr-2 ml-2 d-block d-sm-none" href="{{ route('notification-page') }}" style="background-color: #0A0863; color: white; width: 100%;">See All Notifications</a>
            <a class="btn mr-2 ml-2 d-none d-sm-block" href="{{ route('notification-page') }}" style="background-color: #0A0863; color: white; width: 350px;">See All Notifications</a>
        </div>
    </li>
</div>

@section('scripts')
    <script>
        document.addEventListener('click', function(event) {
            const notificationsDropdown = document.getElementById('notificationsDropdown');
            const notificationsDropdownMenu = document.getElementById('notificationsDropdownMenu');

            if (!notificationsDropdown.contains(event.target) && !notificationsDropdownMenu.contains(event.target)) {
                // Close the dropdown when clicking outside the dropdown button or menu
                notificationsDropdownMenu.classList.remove('show');
            }
        });
    </script>
@endsection
