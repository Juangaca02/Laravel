<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use Illuminate\Support\Str;

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
                    Storage::delete(Str::replaceFirst("storage/images/", "", $user->image));
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
}
