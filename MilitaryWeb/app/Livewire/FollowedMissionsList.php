<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class FollowedMissionsList extends Component
{
    public $missions;

    public function mount()
    {
        $this->missions = Auth::user()->missions;
    }

    public function unfollow($missionId)
    {
        $mission = Auth::user()->missions()->detach($missionId);
        $this->missions = Auth::user()->missions;
    }

    public function render()
    {
        return view('livewire.followed-missions-list');
    }
}
