<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class ApiCasinoController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaction = Transaction::all();

        return response()->json([
            "transaction" => $transaction,
            "success" => true
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ApiCasinoController $request)
    {
        $transaction = Transaction::create($request->all());
        return response()->json([
            "transaction" => $transaction,
            "success" => true,
            "message" => "Transaction created successfully"
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaction = Transaction::find($id);
        return response()->json([
            "transaction" => $transaction,
            "success" => true,
            "message" => "Transaction found successfully"
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ApiCasinoController $request, string $id)
    {
        $transaction = Transaction::find($id);
        $transaction->update($request->all());
        return response()->json([
            "transaction" => $transaction,
            "success" => true,
            "message" => "Transaction updated successfully"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaction = Transaction::find($id);
        $transaction->delete();
        return response()->json([
            "transaction" => $transaction,
            "success" => true,
            "message" => "Transaction deleted successfully"
        ], 200);
    }
}
