<?php

namespace App\Livewire;

use App\Models\Country;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class ListCountries extends Component
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

        $allCountries = Country::where(function ($query) {
            $query->where('name', 'like', '%' . $this->buscar . '%');
        });


        $allCountries = $allCountries->orderBy($this->campoOrden, $this->orden)
            ->paginate($this->paginacion);

        return view('livewire.list-countries', compact('allCountries'));
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
