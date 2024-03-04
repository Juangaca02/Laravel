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
        try {
            $newBet = new Bet();
            $newBet->user_id = Auth::user()->id;
            $newBet->game_id = $request->game_id;
            $newBet->description_bet = $request->description_bet;
            $newBet->amount_bet = $request->amount_bet;
            $newBet->save();

            return to_route('userProfile')->with('success', 'Bet created successfully');
        } catch (QueryException $ex) {
            return to_route('bet.index')->with('error', $ex->getMessage());
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
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bet $bet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bet $bet)
    {
        //
    }
}
