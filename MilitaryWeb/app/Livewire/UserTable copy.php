<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class UserTable extends Component
{

    use WithPagination,WithoutUrlPagination;

    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public $search = '';
    public $tecnico = '';
    public $paginacion = 8;

    public function render()
    {
        $allUsers = User::all();
        return view('livewire.user-table')->with('allUsers', $allUsers);
    }

    public function ordenar($valor)
    {
        $this->campoOrden = $valor;
        $this->orden = ($this->orden == 'asc') ? 'desc' : 'asc';
    }

    public function updatingBuscar()
    {
        $this->resetPage();
    }
}
