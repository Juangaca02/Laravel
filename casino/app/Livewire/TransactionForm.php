<?php

namespace App\Livewire;

use App\Models\Transaction;
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
        $transactions = Transaction::where('user_id', Auth::id())
            ->orderBy($this->campoOrden, $this->orden)
            ->paginate(5);
        return view('livewire.transaction-form', compact('transactions'));
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