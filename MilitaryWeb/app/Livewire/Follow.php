<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Follow extends Component
{
    public $missions;

    public function mount()
    {
        $this->missions = Auth::user()->missions;
    }

    public function unfollow($missionId)
    {
        Auth::user()->missions()->detach($missionId);
        $this->missions = Auth::user()->missions;
        return to_route('missions.followed');
    }

    public function render()
    {
        return view('livewire.follow');
    }
}
