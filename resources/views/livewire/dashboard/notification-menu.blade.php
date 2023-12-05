<!-- Notifications Dropdown Menu -->
<li class="nav-item dropdown" style="margin-right: 1rem; margin-top: 2px;" wire:poll.5s>
    <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fa fa-solid fa-bell" style="color: #252525; font-size: 18px;"></i>
        @if ($unread_count && $unread_count > 0)
            <span class="badge badge-warning navbar-badge">{{ $unread_count }}</span>
        @endif
    </a>
    <div class="dropdown-menu dropdown-menu-right" style="max-width: 500px; max-height: 300px; overflow-y: auto; overflow-x: hidden;" wire:ignore.self>
        <div style="display: flex; flex-direction: row; justify-content: space-between;">
            <span class="dropdown-header" style="font-size: 20px; text-align: left; color: #252525; font-weight: bold;">Notification</span>
            <span class="dropdown-header" style="font-size: 12px; color: #252525; cursor: pointer;" wire:click='readAll()'>Mark all as read</span>
        </div>

        @foreach ($notifications as $notif)
            <!-- NOTIF CONTENT -->
            <a class="dropdown-item" href="#" style="margin-bottom: 1rem;">
                <div style="display: flex; flex-direction: row; align-items: center;">
                    <div>
                        <img src="{{ $notif->sender_profile() }}" style="width: 50px; height: 50px;">
                    </div>
                    <div style="display: flex; flex-direction: column; margin-left: 10px; margin-right: 5rem;">
                        <span class="text-sm">{{ $notif->sender_name() }}z</span>
                        <span class="text-sm">{{ $notif->message }}</span>
                        <span class="text-sm">{{ $notif->created_at->format('F d,Y   h:i A') }}</span>
                    </div>
                    <div style="display: flex; flex-direction: column; align-items: center; margin-right: 2rem;">
                        @if ($notif->is_read)
                            <i class="fa fa-solid fa-check" style="color: #3C58FF; font-size: 18px;"></i>
                        @else
                            <i class="fa fa-solid fa-circle" style="color: #3C58FF; font-size: 12px;"></i>
                        @endif
                    </div>
                </div>
            </a>
        @endforeach

        <a class="btn" href="{{ route('notification-page') }}" style="background-color: #0A0863; color: white; margin-left: 1rem; margin-right: 1rem; width: 350px;">See All Notifications</a>
    </div>
</li>
