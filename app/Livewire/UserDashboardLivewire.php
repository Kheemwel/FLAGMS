<?php

namespace App\Livewire;

use App\Models\GuidancePrograms;
use App\Models\Offenses;
use App\Models\ProfilePictures;
use App\Models\RequestHomeVisitationForms;
use App\Models\RequestViolationForms;
use App\Models\StudentsAnecdotals;
use App\Models\UserAccounts;
use Carbon\Carbon;
use Livewire\Component;

class UserDashboardLivewire extends Component
{
    public $user_id, $role, $first_name, $profile_picture_id, $privileges = [];
    public $numAnecdotalReports, $numViolationReports, $numHomeVisitationReports;
    public $upcomingEvents;

    public function mount()
    {
        $this->user_id = session('user_id');
        if ($this->user_id) {
            $user = UserAccounts::find($this->user_id);
            $this->role = $user->role;
            $this->first_name = $user->first_name;
            $this->profile_picture_id = $user->profile_picture_id;
            $this->privileges = $user->Roles->privileges()->pluck('privilege')->toArray();
        }

        $offensesWithCount = Offenses::withCount('Anecdotals')
            ->get()
            ->map(function ($offense) {
                return [
                    'offense' => $offense->offense_name, // Replace `name` with the relevant attribute
                    'count' => $offense->anecdotals_count, // Adjust the count attribute name if different
                ];
            })
            ->toArray();

        // Format the result as an array with offense as key and count as value
        $offenses = array_combine(
            array_column($offensesWithCount, 'offense'),
            array_column($offensesWithCount, 'count')
        );
        $this->dispatch('offensesData', $offenses);

        $this->numAnecdotalReports = StudentsAnecdotals::count();
        $this->numViolationReports = RequestViolationForms::count();
        $this->numHomeVisitationReports = RequestHomeVisitationForms::count();

        $this->upcomingEvents = GuidancePrograms::leftJoin('guidance_private_schedules', function ($join) {
            $join->on('guidance_programs.id', '=', 'guidance_private_schedules.guidance_program_id')
                ->where('guidance_private_schedules.user_account_id', '=', $this->user_id);
        })
            ->join('guidance_schedule_tags', 'guidance_programs.schedule_tag_id', '=', 'guidance_schedule_tags.id')
            ->select(
                'guidance_programs.*',
                'guidance_schedule_tags.tag_name',
                'guidance_schedule_tags.color'
            )
            ->where('program_start', '>=', Carbon::now()->addDays(1))
            ->where('program_start', '<', Carbon::now()->addDays(8))
            ->where(function ($query) {
                $query->where('guidance_programs.is_public', true)
                    ->orWhereNotNull('guidance_private_schedules.id');
            })
            ->get();
        // dd($programs);
    }

    public function render()
    {
        return view('livewire.dashboard.user-dashboard-livewire');
    }

    public function viewProfile()
    {
        $profile = ProfilePictures::find($this->profile_picture_id);
        if ($profile) {
            return 'data:image/jpeg;base64,' . base64_encode($profile->profile_picture);
        }
    }
}
