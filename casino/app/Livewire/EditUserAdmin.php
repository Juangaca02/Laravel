<?php

namespace App\Livewire;

use Livewire\Component;

class EditUserAdmin extends Component
{
    public $mostrar = false;

    public function mostrarForm()
    {
        $this->mostrar = !$this->mostrar;
    }
    public function render()
    {
        return view('livewire.edit-user-admin');
    }
}
