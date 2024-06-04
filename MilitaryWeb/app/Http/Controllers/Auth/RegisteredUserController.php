<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Carbon;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'DNI' => ['required', 'string', 'max:9', 'min:9'],
            'phone' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'date'],
            'sex' => ['required', 'string', 'in:M,H,Otro'],
            'town' => ['required', 'string', 'max:255'],
            'province' => ['required', 'string', 'max:255'],
            'entry_army_date' => ['required', 'date'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'DNI' => $request->DNI,
            'phone' => $request->phone,
            'birthdate' => Carbon::parse($request->birthdate),
            'sex' => $request->sex,
            'entry_army_date' => Carbon::parse($request->entry_army_date), // Carbon::now(),
            'town' => $request->town,
            'province' => $request->province,
            'profile_photo_path' => 'fotoUsers.png',
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'verified' => false,
            'rol_id' => 1,
            'range_id' => 1,
            'army_id' => 1,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
