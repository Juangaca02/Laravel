<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class UserTable extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $paginacion = 4;

    public $buscar;
    public $campoOrden = "name";
    public $orden = "desc";
    public $mostrar = false;

    #[On('updatelist')]

    public function mostrarForm()
    {
        $this->mostrar = !$this->mostrar;
    }

    #[On('updatelist')]
    public function render()
    {
        // Obtén el usuario autenticado
        $currentUser = Auth::user();

        // Filtra los usuarios para excluir al usuario autenticado
        // y solo mostrar usuarios del mismo ejército
        $allUsers = User::where('army_id', $currentUser->army_id)
            ->where('id', '!=', $currentUser->id)               // Excluye al usuario autenticado
            ->where('range_id', '<', $currentUser->range_id)    // Filtra por el rango del usuario autenticado
            ->where(function ($query) {
                $query->where('name', 'like', '%' . $this->buscar . '%')
                    ->orWhere('surname', 'like', '%' . $this->buscar . '%')
                    ->orWhere('DNI', 'like', '%' . $this->buscar . '%')
                    ->orWhere('entry_army_date', 'like', '%' . $this->buscar . '%');
            })
            ->orderBy($this->campoOrden, $this->orden)
            ->paginate($this->paginacion);

        // return view('livewire.user-table')->with('allUsers', $allUsers);
        return view('livewire.user-table', compact('allUsers'));
    }

    #[On('updatelist')]
    public function ordenar($valor)
    {
        $this->campoOrden = $valor;
        $this->orden = ($this->orden == 'asc') ? 'desc' : 'asc';
    }

    #[On('updatelist')]
    public function updatingBuscar()
    {
        $this->resetPage();
    }
}
