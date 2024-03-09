<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;


class ListUser extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $buscar;
    public $campoOrden = "id";
    public $orden = "asc";
    public $mostrar = false;

    public function mostrarForm()
    {
        $this->mostrar = !$this->mostrar;
    }

    public function render()
    {
        $users = User::orderBy($this->campoOrden, $this->orden)->paginate(5);
        return view('livewire.list-user', compact('users'));
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