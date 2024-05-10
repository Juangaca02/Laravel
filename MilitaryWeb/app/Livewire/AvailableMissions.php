<?php

namespace App\Livewire;

use App\Models\Mission;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AvailableMissions extends Component
{
    public function render()
    {
        $army_id = Auth::user()->army_id;
        $missions = Mission::where('army_id', $army_id)->get();
        return view('livewire.available-missions')->with('missions', $missions);
    }
}
