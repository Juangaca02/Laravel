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
use Illuminate\Validation\Rules;
use Illuminate\Validation\ValidationException;
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
        // Validar la fecha de nacimiento para asegurarse de que el usuario tenga al menos 18 años
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'DNI' => ['required', 'string', 'size:9', 'regex:/^[0-9]{8}[A-Z]$/', 'unique:' . User::class],
            'phone' => ['required', 'string', 'min:9', 'max:20'],
            'birthdate' => [
                'required',
                'date',
                function ($attribute, $value, $fail) {
                    $birthdate = Carbon::parse($value);
                    if ($birthdate->diffInYears(Carbon::now()) < 18) {
                        $fail('Debe tener al menos 18 años para registrarse.');
                    }
                }
            ],
            'sex' => ['required', 'string', 'in:M,H,Otro'],
            'town' => ['required', 'string', 'max:255'],
            'province' => ['required', 'string', 'max:255'],
            'entry_army_date' => ['required', 'date', 'after:before'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'army_id' => ['required', 'exists:armies,id'],
            'range_id' => ['required', 'exists:ranges,id'],
        ], [
            'required' => 'El campo :attribute es obligatorio.',
            'min' => 'El campo :attribute debe tener al menos :min caracteres.',
            'max' => 'El campo :attribute debe tener menos de :max caracteres.',
            'DNI.required' => 'El campo DNI es obligatorio.',
            'DNI.string' => 'El campo DNI debe ser una cadena de caracteres.',
            'DNI.size' => 'El campo DNI debe tener exactamente 9 caracteres.',
            'DNI.regex' => 'El campo DNI debe contener exactamente 8 números seguidos de una letra mayúscula.',
            'DNI.unique' => 'El DNI ya se encuentra registrado.',
            'password.confirmed' => 'Las contraseñas no coinciden.',
            'password.min' => 'La contraseña debe tener al menos :min caracteres.',
            'email.lowercase' => 'El correo debe estar en minúsculas.',
            'email.unique' => 'El correo ya se encuentra registrado.',
            'birthdate.date' => 'La fecha de nacimiento debe ser una fecha válida.',
            'entry_army_date.after' => 'La fecha de entrada al ejercito debe ser posterior a la fecha actual.',
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
            'range_id' => $request->range_id,
            'army_id' => $request->army_id,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
