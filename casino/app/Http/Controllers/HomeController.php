<?php

namespace App\Http\Controllers;

use App\Models\Bet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        $bets = Bet::all();
        return view('home')->with('bets', $bets);
    }
}
