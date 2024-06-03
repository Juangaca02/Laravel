<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class UserAdminTable extends Component
{
    use WithPagination;

    public $paginacion = 4;
    public $buscar = '';
    public $campoOrden = "name";
    public $orden = "desc";
    public $mostrar = false;
    public $soloVerificados = null; // Nueva propiedad para el filtro

    public function mostrarForm()
    {
        $this->mostrar = !$this->mostrar;
    }

    #[On('updatelist')]
    public function render()
    {
        $currentUser = Auth::user();

        $allUsers = User::where('id', '!=', $currentUser->id)
            ->whereNotIn('rol_id', [2]) // Excluir usuarios con rol de administrador
            ->where(function ($query) {
                $query->where('name', 'like', '%' . $this->buscar . '%')
                    ->orWhere('surname', 'like', '%' . $this->buscar . '%')
                    ->orWhere('DNI', 'like', '%' . $this->buscar . '%')
                    ->orWhere('entry_army_date', 'like', '%' . $this->buscar . '%');
            });

        if ($this->soloVerificados !== null) {
            $allUsers = $allUsers->where('verified', $this->soloVerificados);
        }

        $allUsers = $allUsers->orderBy($this->campoOrden, $this->orden)
            ->paginate($this->paginacion);

        return view('livewire.user-admin-table', compact('allUsers'));
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

    public function toggleVerificados()
    {
        $this->soloVerificados = $this->soloVerificados === null ? true : ($this->soloVerificados ? false : null);
        $this->resetPage();
    }

    public function mostrarTodos()
    {
        $this->soloVerificados = null;
        $this->resetPage();
    }
}
