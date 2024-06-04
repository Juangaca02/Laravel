<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Army;
use App\Models\Range;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * 
     */
    public function index()
    {
        return view('user.index');
    }

    /**
     * 
     */
    public function edit(string $id)
    {
        $user = User::find($id);

        $ranges = Range::all();
        $armies = Army::all();


        return view('editUser', compact('user', 'ranges', 'armies'));
    }

    /**
     * 
     */
    public function update(UserRequest $request)
    {
        $request->validated();

        $user = User::find($request->id);
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->DNI = $request->DNI;
        $user->phone = $request->phone;
        $user->town = $request->town;
        $user->province = $request->province;
        $user->birthdate = $request->birthdate;
        $user->entry_army_date = $request->entry_army_date;
        $user->sex = $request->sex;
        $user->range_id = $request->range_id;
        $user->army_id = $request->army_id;
        $user->save();

        return redirect()->route('editUser', ['id' => $user->id])->with('success', 'Usuario Editado Correctamente');

    }

    /**
     * 
     */
    public function destroy(Request $request)
    {
        $request->validate([
            'password' => 'required',
        ]);
    }

    /**
     * 
     */
    public function verificarUser($id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }

        $verificar = request()->input('verificar', false);

        $user->verified = $verificar;
        $user->save();

        return response()->json(['success' => 'Usuario actualizado correctamente']);
    }

    /**
     * 
     */
    public function deleteUser($id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }
        $user->delete();
        return response()->json(['success' => 'Usuario eliminado correctamente']);
    }

    /**
     * 
     */
    public function getUserDetails($id)
    {
        $user = User::with(['range', 'army'])->find($id);
        $rangeName = $user->range->name;
        $armyName = $user->army->name;

        return response()->json([
            'user' => $user,
            'rangeName' => $rangeName,
            'armyName' => $armyName
        ]);
    }

}
