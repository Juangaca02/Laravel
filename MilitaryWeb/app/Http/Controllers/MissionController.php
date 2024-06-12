<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMissionRequest;
use App\Http\Requests\MissionRequest;
use App\Models\Army;
use App\Models\Destination;
use App\Models\Mission;
use App\Models\Range;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("mission.listMissions");
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Obtener los usuarios que están dentro del rango especificado (excluyendo los límites) y pertenecen a la misma army
        $usersInRange = User::where('army_id', Auth::user()->army_id)
            ->where('range_id', '>', 9)
            ->where('range_id', '<', Auth::user()->range_id)
            ->get();

        // Obtener todos los destinos
        $destination = Destination::all();

        // Devolver la vista con los datos necesarios
        return view("mission.createMissions")
            ->with('destination', $destination)
            ->with('usersInRange', $usersInRange);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateMissionRequest $request)
    {
        $request->validated();

        $mission = new Mission();
        $mission->title = $request->titulo;
        $mission->subtitle = $request->subtitulo;
        $mission->description = $request->descripcion;
        $mission->date = $request->fecha;
        $mission->status = $request->estado;
        $mission->type = $request->tipo;
        $mission->priority = $request->prioridad;
        $mission->objective = $request->objetivo;
        $mission->action = $request->accion;
        $mission->result = $request->resultado;
        // $mission->photo = time() . "-" . $request->file("foto")->getClientOriginalName();
        // $mission->photo = $request->foto;

        $originalFileName = $request->file('foto')->getClientOriginalName();

        // Guardar el archivo en la carpeta de almacenamiento con el nombre original
        $storedFilePath = $request->file('foto')->storeAs('public/images/images-Missions/missions/', $originalFileName);

        // Guardar el nombre del archivo original en la base de datos
        $mission->photo = $originalFileName;

        $mission->army_id = $request->army_id;
        $mission->destination_id = $request->destination_id;
        $mission->user_id = $request->user_id;

        // dd($request->foto);

        //Guardar la imagen en la carpeta public
        // if ($request->hasFile('foto')) {
        //     // Acceder al archivo y guardarlo
        //     // $request->file('foto')->storeAs("public/Images/Images-Home-Naval/", $request->foto);

        //     $userPhoto = time() . "-" . $request->file("profile_photo_path")->getClientOriginalName();
        //     $request->file("profile_photo_path")->storeAs("public/Images/imagesUsers", $userPhoto);
        // }

        $mission->save();

        return redirect()->route('createMission')->with('success', 'Mision Creada Correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Mission $mission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mission = Mission::find($id);
        $currentUser = $mission->user_id;
        $currentUser = User::find($currentUser);

        $usersInRange = User::where('army_id', Auth::user()->army_id)
            ->where('range_id', '>', 9)
            ->where('range_id', '<', Auth::user()->range_id)
            ->get();


        $ranges = Range::all();
        $armies = Army::all();
        $destinations = Destination::all();

        return view('mission.editMission', compact('mission', 'currentUser', 'usersInRange', 'destinations', 'armies'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(MissionRequest $request) // Mission $mission
    {
        $request->validated();
        $mission = Mission::find($request->id);
        if ($request->hasFile('photo')) {
            // Eliminar la foto existente si hay una
            if ($mission->photo) {
                if ($mission->photo != "barco.jpg") {
                    Storage::delete("public/Images/images-Missions/missions/" . $mission->photo);
                }
            }

            // Guardar la nueva foto
            $originalFileName = time() . '_' . $request->file('photo')->getClientOriginalName();
            $request->file('photo')->storeAs('public/Images/images-Missions/missions/', $originalFileName);
            $mission->photo = $originalFileName;
        }
        // Actualizar otros campos de la misión si es necesario
        $mission->update($request->validated());

        $mission->save();

        return redirect()->route('editMission', ['id' => $request->id])->with('success', 'Misión Actualizada Correctamente');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mission $mission)
    {
        //
    }

    public function deleteMission($id)
    {
        $Mission = Mission::find($id);
        if (!$Mission) {
            return response()->json(['error' => 'Mission no encontrado'], 404);
        }
        $Mission->delete();
        return response()->json(['success' => 'Mission eliminado correctamente']);
    }

    public function getMissionsDetails($id)
    {
        $mission = Mission::with(['army', 'destination'])->find($id);
        $userName = User::find($mission->user_id)->name;
        $armyName = $mission->army->name;
        $destinationName = $mission->destination->name;

        return response()->json([
            'mission' => $mission,
            'userName' => $userName,
            'armyName' => $armyName,
            'destinationName' => $destinationName
        ]);
    }

    public function follow($id)
    {
        $mission = Mission::findOrFail($id);
        Auth::user()->missions()->attach($mission);

        return response()->json(['status' => 'Mission followed successfully']);
    }

    public function unfollow($id)
    {
        $mission = Mission::findOrFail($id);
        Auth::user()->missions()->detach($mission);

        return response()->json(['status' => 'Mission unfollowed successfully']);
    }

    public function followedMissions()
    {
        // $missions = Auth::user()->missions;
        // $user = User::find($missions->user_id);
        // return view('mission.missionsFollowed', compact('missions', 'user'));
        $missions = Mission::with('users')->get();
        return view('mission.missionsFollowed', compact('missions'));
    }


    public function getFollowers($id)
    {
        $mission = Mission::findOrFail($id);
        $followers = $mission->users()->with('range')->get(); // Asegúrate de cargar la relación con el rango

        return response()->json($followers);
    }

}
