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

class ProfileController extends Controller
{
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

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }
    /**
     * Update the user's photo.
     */
    public function updatePhoto(Request $request)
    {
        $user = Auth::user();
        if (isset($request->profile_photo_path)) {
            try {
                if (
                    $user->profile_photo_path !== "fotoUsers.png" &&
                    $user->profile_photo_path !== "fotoJuan.jpg" &&
                    $user->profile_photo_path !== "fotoAguayo.jpg" &&
                    $user->profile_photo_path !== "fotoPino.jpg"
                ) {
                    Storage::delete("public/Images/imagesUsers/" . $user->profile_photo_path);
                }
                $userPhoto = time() . "-" . $request->file("profile_photo_path")->getClientOriginalName();
                $user->profile_photo_path = $userPhoto;
                $request->file("profile_photo_path")->storeAs("public/Images/imagesUsers", $userPhoto);
                $user->save();
                $msg = "Foto actualizada";
            } catch (QueryException $ex) {
                $msg = "Error al actualizar la imagen";
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


