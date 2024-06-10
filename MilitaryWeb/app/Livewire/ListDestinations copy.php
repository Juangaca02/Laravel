<?php

namespace App\Livewire;

use App\Models\Country;
use App\Models\Destination;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class ListDestinations extends Component
{
    use WithPagination;
    public $paginacion = 4;
    public $buscar = '';
    public $campoOrden = "name";
    public $orden = "desc";
    public $mostrar = false;

    public function mostrarForm()
    {
        $this->mostrar = !$this->mostrar;
    }

    #[On('updatelist')]
    public function render()
    {

        $allDestination = Destination::where(function ($query) {
            $query->where('name', 'like', '%' . $this->buscar . '%')
                ->orWhere('description', 'like', '%' . $this->buscar . '%');
        });

        $allCountries = Country::all();

        $allDestination = $allDestination->orderBy($this->campoOrden, $this->orden)
            ->paginate($this->paginacion);

        return view('livewire.list-destinations', compact('allDestination','allCountries'));
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
