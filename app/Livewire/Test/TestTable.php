<?php

namespace App\Livewire\Test;

use App\Models\UserAccounts;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('tests.livewire.test-container')]
class TestTable extends Component
{
    public $text;
    public $count = 0;
    protected $listeners = ['textChange'];
    public $users;

    public function mount()
    {
        $this->users = UserAccounts::join('roles', 'user_accounts.role_id', '=', 'roles.id')
            ->select('user_accounts.*', 'roles.role as role', DB::raw("CONCAT(first_name, ' ', last_name) as name"))
            ->where('is_archive', false)->get();
    }

    public function render()
    {
        $this->count++;
        return view('tests.livewire.test-table');
    }

    public function updatedText()
    {
        $this->count *= 2;
    }

    public function textChange($value)
    {
        $this->text = $value;
    }

    public function runme()
    {
        $this->text = 'sassa';
    }
}
