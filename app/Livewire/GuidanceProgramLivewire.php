<?php

namespace App\Livewire;

use App\Events\NewNotification;
use App\Models\CalendarColors;
use App\Models\GuidancePrograms;
use App\Models\GuidanceScheduleTags;
use App\Models\Notifications;
use App\Models\UserAccounts;
use App\Traits\Toasts;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class GuidanceProgramLivewire extends Component
{
    use Toasts;
    public $id, $title, $program_start, $program_end, $description, $schedule_tag_id, $is_public = true;
    public $schedule_tags, $tag_name;
    public $privileges = [];
    protected $listeners = ['get_event'];
    public $users, $user_id, $selected_users = [];

    public function mount(HttpRequest $request)
    {
        if ($request->query('private_schedule')) {
            $content = $request->query('private_schedule');
            $this->is_public = 0;
            $this->selected_users = $content['users'];
            $this->dispatch('addEvent', $this->selected_users);
        }

        $user_id = session('user_id');
        if ($user_id) {
            $user = UserAccounts::find($user_id);
            $this->user_id = $user->id;
            $this->privileges = $user->Roles->privileges()->pluck('privilege')->toArray();
        }
        $this->schedule_tags = GuidanceScheduleTags::all();
        $this->users = UserAccounts::select('id', 'first_name', 'last_name')->where('id', '!=', $this->user_id)
            ->where('is_archive', false)->get();
    }

    public function render()
    {
        $this->renderCalendar();
        return view('livewire.guidance_program.guidance-program-livewire');
    }

    public function renderCalendar()
    {
        $programs = GuidancePrograms::join('guidance_schedule_tags', 'guidance_programs.schedule_tag_id', '=', 'guidance_schedule_tags.id')
            ->select('guidance_programs.*', 'guidance_schedule_tags.tag_name', 'guidance_schedule_tags.color')->get();
        $programs = GuidancePrograms::leftJoin('guidance_private_schedules', function ($join) {
            $join->on('guidance_programs.id', '=', 'guidance_private_schedules.guidance_program_id')
                ->where('guidance_private_schedules.user_account_id', '=', $this->user_id);
        })
            ->join('guidance_schedule_tags', 'guidance_programs.schedule_tag_id', '=', 'guidance_schedule_tags.id')
            ->select(
                'guidance_programs.*',
                'guidance_schedule_tags.tag_name',
                'guidance_schedule_tags.color'
            )
            ->where(function ($query) {
                $query->where('guidance_programs.is_public', true)
                    ->orWhereNotNull('guidance_private_schedules.id');
            })
            ->get();
        $this->dispatch('calendar', $programs);
    }

    public function addEvent()
    {
        $validatedData = $this->validate([
            'title' => 'required|string|max:255',
            'program_start' => 'required|date|after_or_equal:today',
            'program_end' => 'required|date|after:program_start',
            'description' => 'nullable',
            'schedule_tag_id' => 'required|int',
            'is_public' => 'required|int',
            'selected_users' => 'required_if:is_public,false|array'
        ]);

        $guidance_program = GuidancePrograms::create($validatedData);

        if (!$guidance_program->is_public) {
            $this->selected_users[] = $this->user_id;
            $users = [];
            $notifs = [];
            foreach ($this->selected_users as $id) {
                $users[] = [
                    'user_account_id' => $id
                ];
                if ($id != $this->user_id) {
                    $notifs[] = [
                        'from_user' => $this->user_id,
                        'to_user' => $id,
                        'message' => "Private Schedule: ".$validatedData['title'],
                        'created_at' => now(),
                    ];
                }
            }
            $guidance_program->PrivateSchedules()->createMany($users);
            Notifications::insert($notifs);
            NewNotification::dispatch();
            $this->showToast('success', 'The Private Schedule is Added Successfully');
        } else {
            $this->showToast('success', 'The Event is Added Successfully');
        }
        $this->resetFields();
    }

    public function get_event($id)
    {
        $program = GuidancePrograms::find($id);
        $this->id = $program->id;
        $this->title = $program->title;
        $this->description = $program->description;
        $this->program_start = $program->program_start;
        $this->program_end = $program->program_end;
        $this->schedule_tag_id = $program->schedule_tag_id;
        $this->is_public = $program->is_public;
        $this->tag_name = $program->tag_name();

        if (!$program->is_public) {
            $array = $program->PrivateSchedules->pluck('user_account_id')->toArray();
            $this->selected_users = array_map('strval', $array);
            $this->dispatch('selectedUsers', $this->selected_users);
        }
    }

    public function updateEvent()
    {
        $validatedData = $this->validate([
            'title' => 'required|string|max:255',
            'program_start' => 'required|date|after_or_equal:today',
            'program_end' => 'required|date|after:program_start',
            'description' => 'nullable',
            'schedule_tag_id' => 'required|int',
            'is_public' => 'required|int',
            'selected_users' => 'required_if:is_public,false|array'
        ]);

        $guidance_program = GuidancePrograms::find($this->id); // Assuming you have the guidance program ID
        $guidance_program->update($validatedData);
        if (!$this->is_public) {
            $this->selected_users[] = $this->user_id;
            // New array of selected user IDs
            $newSelectedUsers = $this->selected_users;

            // Get the existing user IDs associated with the guidance program
            $existingUsers = $guidance_program->PrivateSchedules()->pluck('user_account_id')->toArray();

            // Determine the IDs to add and remove
            $usersToAdd = array_diff($newSelectedUsers, $existingUsers);
            $usersToRemove = array_diff($existingUsers, $newSelectedUsers);

            // Add new users
            $usersToAddData = [];
            foreach ($usersToAdd as $userId) {
                $usersToAddData[] = ['user_account_id' => $userId];
            }
            $guidance_program->PrivateSchedules()->createMany($usersToAddData);

            // Remove users
            $guidance_program->PrivateSchedules()->whereIn('user_account_id', $usersToRemove)->delete();
            $this->showToast('success', 'The Private Schedule is Added Successfully');
        } else {
            $existingUsers = $guidance_program->PrivateSchedules()->pluck('user_account_id')->toArray();
            $guidance_program->PrivateSchedules()->whereIn('user_account_id', $existingUsers)->delete();
            $this->showToast('success', 'The Event is Added Successfully');
        }

        $this->resetFields();
    }

    public function deleteEvent($id)
    {
        GuidancePrograms::find($id)->delete();
        $this->showToast('success', 'The Event is Deleted Successfully');
    }

    public function resetFields()
    {
        $this->title = null;
        $this->program_start = null;
        $this->program_end = null;
        $this->description = null;
        $this->schedule_tag_id = null;
        $this->is_public = true;
        $this->selected_users = [];
        $this->resetErrorBag();
        $this->dispatch('clearSelection');
    }
}
