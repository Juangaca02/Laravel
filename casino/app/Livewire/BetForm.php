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
    public $campoOrden = "game_id";
    public $orden = "asc";

    public function render()
    {
        $bets2 = User::find(Auth::id());
        $bets3 = $bets2->GameBelongsToMany()->wherePivot('description_bet', 'amaunt_bet');
        $bets = Bet::where('user_id', Auth::id())
            ->orderBy($this->campoOrden, $this->orden)
            ->paginate(5);
        return view('livewire.bet-form', compact('bets'));
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
