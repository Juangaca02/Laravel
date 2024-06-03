<?php

namespace App\Livewire;

use App\Models\Mission;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class ListMissions extends Component
{
    use WithPagination;

    public $paginacion = 4;
    public $buscar = '';
    public $campoOrden = "title";
    public $orden = "desc";
    public $mostrar = false;

    public function mostrarForm()
    {
        $this->mostrar = !$this->mostrar;
    }

    #[On('updatelist')]
    public function render()
    {
        $allMissions = Mission::where(function ($query) {
            $query->where('title', 'like', '%' . $this->buscar . '%')
                ->orWhere('date', 'like', '%' . $this->buscar . '%');
        })
            ->where('army_id', Auth::user()->army_id);

        $allMissions = $allMissions->orderBy($this->campoOrden, $this->orden)
            ->paginate($this->paginacion);

        return view('livewire.list-missions', compact('allMissions'));
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
