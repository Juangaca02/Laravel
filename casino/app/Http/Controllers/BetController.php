<?php

namespace App\Http\Controllers;

use App\Http\Requests\BetRequest;
use App\Models\Bet;
use App\Models\Game;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('bet.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Games = Game::all();
        return view('bet.create')->with('Games', $Games);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BetRequest $request)
    {
        $request->validated();
        $user = Auth::user();
        try {
            $newBet = new Bet();
            $newBet->user_id = Auth::user()->id;
            $newBet->game_id = $request->game_id;
            $newBet->description_bet = $request->description_bet;
            $newBet->amount_bet = $request->amount_bet;

            if ($user->balance < $request->amount_bet) {
                return to_route('userProfile')->with('errorBet', 'Fondos Insuficientes');
            } else {
                $user->balance -= $request->amount_bet;
                $user->save();
                $newBet->save();
            }

            return to_route('userProfile')->with('successBet', 'Apuesta Creada Correctamente');
        } catch (QueryException $ex) {
            return to_route('userProfile')->with('errorBet', 'Error en la Base de Datos');
            //return back()->with('error', $ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Bet $bet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bet $bet)
    {
        return view('bet.edit')->with('bet', $bet);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bet $bet)
    {
        //dd($bet);
        $request->validate([
            'description_bet' => 'required',
            'amount_bet' => 'required',
        ]);
        $lastBet = Bet::find($bet->id);
        $user = Auth::user();
        try {
            $bet->description_bet = $request->description_bet;
            $bet->amount_bet = $request->amount_bet;

            if ($user->balance < $request->amount_bet) {
                return to_route('userProfile')->with('errorBet', 'Fondos Insuficientes');
            } else {
                if ($lastBet->amount_bet > $bet->amount_bet) {
                    $user->balance += $lastBet->amount_bet - $bet->amount_bet;
                    $bet->save();
                    $user->save();
                    return to_route('userProfile')->with('successBet', 'Apuesta Actualizada Correctamente');
                } else if ($lastBet->amount_bet < $bet->amount_bet) {
                    $user->balance -= $bet->amount_bet - $lastBet->amount_bet;
                    $bet->save();
                    $user->save();
                    return to_route('userProfile')->with('successBet', 'Apuesta Actualizada Correctamente');
                }
            }



        } catch (QueryException $ex) {
            return to_route('userProfile')->with('errorBet', 'Error en la Base de Datos');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bet $bet)
    {
        try {
            $user = Auth::user();
            $user->balance += $bet->amount_bet;
            $user->save();
            $bet->delete();
            return to_route('userProfile')->with('errorBet', 'Apuesta Borrada Correctamente');
        } catch (QueryException $ex) {
            return to_route('userProfile')->with('errorBet', 'Error en la Base de Datos');
        }
    }
}
