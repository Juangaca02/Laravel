<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ProfileController extends Controller
{
    /**
     * Display the user's profile.
     */
    public function index(Request $request): View
    {
        return view('profile.index', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'Perfil actualizado');
    }

    public function updatePhoto(Request $request)
    {
        $user = Auth::user();
        echo $request->image;
        if (isset($request->image)) {
            try {
                if ($user->image != "default.png") {
                    Storage::delete("public/images/" . Str::replaceFirst("storage/images/", "", $user->image));
                }
                $userPhoto = time() . "-" . $request->file("image")->getClientOriginalName();
                $user->image = $userPhoto;
                $request->file("image")->storeAs("public/images", $userPhoto);
                $user->save();
                $msg = "Foto actualizada";
            } catch (QueryException $ex) {
                $msg = "La foto ya existe";
            }
        } else {
            $msg = "No has seleccionado una Imagen";
        }

        return Redirect::route('profile.edit')->with('status', $msg);
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function destroyUser(Request $request, User $user)
    {
        try {
            User::findOrFail($request->user)->delete();
            return Redirect::route('listUsers')->with('status', 'Usuario eliminado');
        } catch (\Throwable $th) {
            return Redirect::route('listUsers')->with('status', 'Usuario no eliminado');
        }


        //echo ($user);
        //$user->delete();
        //return Redirect::route('listUsers')->with('status', 'Usuario eliminado');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'balance' => 0,
            'is_admin' => false,
        ]);
        return Redirect::route('listUsers')->with('status', 'Usuario creado');
    }

    public function promoteToAdmin(Request $request)
    {
        try {
            $user = User::findOrFail($request->user);
            $user->is_admin = true;
            $user->save();
            return Redirect::route('listUsers')->with("status", 'User promoted successfully');
        } catch (QueryException $ex) {
            return Redirect::route('listUsers')->with("status", 'User could not be promoted');
        }
    }


}
