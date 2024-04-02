<?php

namespace App\Livewire;

use App\Models\Bet;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class BetForm extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $campoOrden = "id";
    public $orden = "asc";

    public function render()
    {
        $user = Auth::user();
        $bets = $user->GameBelongsToMany()->orderBy($this->campoOrden, $this->orden)->paginate(5);
        // $bets3 = Bet::where('user_id', Auth::id())
        //     ->orderBy($this->campoOrden, $this->orden)
        //     ->paginate(5);
        //return view('livewire.bet-form', compact('bets'));
        return view('livewire.bet-form')->with('bets', $bets);
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