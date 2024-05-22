<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class UserTable extends Component
{
    use WithPagination, WithoutUrlPagination;

    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];

    public $search = '';
    public $tecnico = '';
    public $paginacion = 8;

    public $buscar;
    public $campoOrden = "name";
    public $orden = "asc";
    public $mostrar = false;

    public function render()
    {
        // Obtén el usuario autenticado
        $currentUser = Auth::user();

        // Filtra los usuarios para excluir al usuario autenticado
        // y solo mostrar usuarios del mismo ejército
        $allUsers = User::where('army_id', $currentUser->army_id)
            ->where('id', '!=', $currentUser->id)
            ->get();

        return view('livewire.user-table')->with('allUsers', $allUsers);
    }

    public function mostrarForm()
    {
        $this->mostrar = !$this->mostrar;
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
