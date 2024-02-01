<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(): View
    {
        return view('catalog/index');
    }
    public function create(): View
    {
        return view('catalog/create');
    }
    public function show(string $id): View
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
    public function anime($nom = "Kimetsu2", $nom2 = "jujutsu2")
    {
        return "Animes vistos: " . $nom . "," . $nom2;
    }
}
