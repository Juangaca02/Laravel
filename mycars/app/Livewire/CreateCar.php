<?php

namespace App\Livewire;

use App\Models\Car;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CreateCar extends Component
{
    use WithFileUploads;

    public $mostrar = false;
    #[Validate('required|min:7|max:7')]
    public $matricula;
    #[Validate('required')]
    public $marca;
    #[Validate('required')]
    public $modelo;
    #[Validate('required|integer')]
    public $anio;
    #[Validate('required|integer')]
    public $precio;
    public $foto;
    #[Validate('required')]
    public$fecha_ultima_revision;
    public function render()
    {
        return view('livewire.create-car');
    }


    public function mostrarForm(){
        $this->mostrar=!$this->mostrar;
    }

    public function guardar(){
        $this->validate();
        $image = time() ."-".$this->foto->getClientOriginalName();
        $this->foto->storeAs('public/img_car', $image);

        Car::create([
        'matricula' => $this->matricula,
        'marca' => $this->marca,
        'modelo' => $this->modelo,
        'anio' =>$this->anio,
        'fecha_ultima_revision' => $this->fecha_ultima_revision,
        'foto' => $image,
        'precio' => $this->precio,
        'user_id' => Auth::User()->id,
        ]);

        $this->dispatch('actualizarLista');
        $this->mostrarForm();
        $this->reset('matricula','marca','modelo','anio','fecha_ultima_revision','foto','precio');
    }


}
