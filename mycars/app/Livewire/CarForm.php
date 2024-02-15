<?php

namespace App\Livewire;

use App\Models\Car;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

// #[On('actualizarLista')]
//Se Puede poner en la clase entera y funciona en todos
class CarForm extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $nombre;
    public $buscar;
    public $campoOrden = "id";
    public $orden ="asc";

    #[On('actualizarLista')]
    public function render()
    {
        $cars = Car::where('marca', 'like', '%' . $this->buscar . '%')->orWhere('modelo', 'like', '%' . $this->buscar . '%')->
        orderBy($this->campoOrden, $this->orden)->paginate(4);
        return view('livewire.car-form')->with('cars', $cars);
    }

    public function ordenar($valor){
        $this->campoOrden = $valor;
        $this->orden = ($this->orden == 'asc') ? 'desc' : 'asc';
        // if( $this->campoOrden == $valor){
        //     if ($this->orden == 'asc') {
        //         $this->orden = 'desc';
        //     } else {
        //         $this->orden = 'asc';
        //     }
        // }else{
        //     $this->campoOrden = $valor;
        //     $this->orden = 'asc';
        // }
    }

    public function updatingBuscar(){
        $this->resetPage();
    }
}
