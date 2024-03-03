<?php

namespace App\Livewire;

use App\Models\Bet;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class BetForm extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $buscar;
    public $campoOrden = "amount_bet";
    public $orden = "asc";

    public function render()
    {
        // $bets = Bet::all()->where('user_id', Auth::user()->id);
        // return view('livewire.bet-form')->with('bets', $bets);
        $bets = Bet::where('user_id', Auth::id())
            ->orderBy($this->campoOrden, $this->orden)
            ->get();
        return view('livewire.bet-form', compact('bets'));
    }

    public function ordenar($valor)
    {
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

    public function updatingBuscar()
    {
        $this->resetPage();
    }
}
