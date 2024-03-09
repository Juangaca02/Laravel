<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransactionRequest;
use App\Models\Transaction;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{

    public function report()
    {
        $transactions = Transaction::where('user_id', Auth::id())->get();
        $pdf = Pdf::loadView('transaction.report', compact('transactions'));
        return $pdf->stream('transaction.pdf');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('transaction.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TransactionRequest $request)
    {
        $request->validated();
        $user = Auth::user();
        try {
            $newTransaction = new Transaction();
            $newTransaction->user_id = Auth::user()->id;
            $newTransaction->transaction_type = $request->transaction_type;
            $newTransaction->balance = $request->balance;

            if ($request->transaction_type == 'Ingresar') {
                $user->balance += $request->balance;
                $user->save();
                $newTransaction->save();
                return to_route('transaction.index')->with('updateTransaction', 'Transacción Creada Correctamente');
            }

            if ($request->transaction_type == 'Retirar' && $user->balance >= $request->balance) {
                $user->balance -= $request->balance;
                $user->save();
                $newTransaction->save();
                return to_route('transaction.index')->with('updateTransaction', 'Transacción Creada Correctamente');
            } else {
                return to_route('transaction.index')->with('errorTransaction', 'Fondos Insuficientes');
            }

        } catch (QueryException $ex) {
            return to_route('transaction.index')->with('errorTransaction', 'Error en la Base de Datos');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
