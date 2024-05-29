<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class UserPhoto extends Component
{
    use WithFileUploads;
    public $profile_photo_path;
    public function render()
    {
        return view('livewire.user-photo');
    }
}
