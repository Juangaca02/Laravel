<?php

namespace App\Livewire;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Features\SupportPagination\WithoutUrlPagination;
use Livewire\WithPagination;

class TransactionForm extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $buscar;
    public $campoOrden = "created_at";
    public $orden = "asc";

    public function render()
    {

        $transactions = Auth::user()->transactionHasMany()->orderBy($this->campoOrden, $this->orden)->paginate(5);
        // $transactions2 = Transaction::where('user_id', Auth::id())
        //     ->orderBy($this->campoOrden, $this->orden)
        //     ->paginate(5);
        //return view('livewire.transaction-form', compact('transactions'));
        return view('livewire.transaction-form')->with('transactions', $transactions);

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