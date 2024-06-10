<div>
    {{-- Do your work, then step back. --}}
    @if ($missions->isEmpty())
        <div class="text-center">
            <p class="text-5xl">No hay misiones disponibles para tu armada.</p>
        </div>
        @Auth
            @if (Auth::user()->range_id >= 16)
                <div class="flex justify-center my-5">
                    <button onclick="window.location.href = '{{ route('createMission') }}';" class="buttonHome">Crear
                        Mision</button>
                </div>
            @else
            @endif
        @endauth
    @else
        <div class="space-y-[100px] m-5">
            @foreach ($missions as $mission)
                <section class="flex flex-col space-y-5 p-5">
                    <div class="flex-grow text-center mb-5">
                        <h3 class="text-5xl font-bold">{{ $mission->title }}</h3>
                    </div>
                    <div class="lg:flex">
                        <figure class="mx-10 flex flex-col justify-center text-center">
                            <img class="rounded-3xl"
                                src="{{ asset('storage/Images/images-Missions/missions/' . $mission->photo) }}"
                                alt="{{ $mission->title }}" style="max-width: 700px; height: auto;">
                            <figcaption class="text-2xl italic mt-2">{{ $mission->title }}</figcaption>
                        </figure>
                        <div class="overflow-auto max-w-[1100px] min-w-0">
                            <table class="text-white w-full">
                                <thead>
                                    <tr>
                                        <th>Nombre del Campo</th>
                                        <th>Valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Subtítulo:</strong></td>
                                        <td><span>{{ $mission->subtitle }}</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Descripción:</strong></td>
                                        <td><span>{{ $mission->description }}</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Fecha:</strong></td>
                                        <td><span>{{ $mission->date }}</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Estado:</strong></td>
                                        <td>
                                            @if ($mission->status == 'Pendiente')
                                                <span class="bg-red-500 rounded-3xl px-2">{{ $mission->status }}</span>
                                            @elseif ($mission->status == 'En progreso')
                                                <span
                                                    class="bg-yellow-500 rounded-3xl px-2">{{ $mission->status }}</span>
                                            @elseif($mission->status == 'Finalizada')
                                                <span
                                                    class="bg-green-500 rounded-3xl px-2">{{ $mission->status }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tipo:</strong></td>
                                        <td><span>{{ $mission->type }}</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Prioridad:</strong></td>
                                        <td>
                                            @if ($mission->priority == 'Alta')
                                                <span
                                                    class="bg-red-500 rounded-3xl px-2">{{ $mission->priority }}</span>
                                            @elseif ($mission->priority == 'Media')
                                                <span
                                                    class="bg-yellow-500 rounded-3xl px-2">{{ $mission->priority }}</span>
                                            @elseif($mission->priority == 'Baja')
                                                <span
                                                    class="bg-green-500 rounded-3xl px-2">{{ $mission->priority }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Objetivo de la misión:</strong></td>
                                        <td><span>{{ $mission->objective }}</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Intervención:</strong></td>
                                        <td><span>{{ $mission->action }}</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Resultado:</strong></td>
                                        <td><span>{{ $mission->result }}</span></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="2" class="text-center pt-4">
                                            <button class="btnFollow follow-btn" data-id="{{ $mission->id }}"
                                                data-followed="{{ in_array($mission->id, $userMissions) ? 'true' : 'false' }}">
                                                {{ in_array($mission->id, $userMissions) ? 'Dejar de Seguir' : 'Seguir' }}
                                            </button>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </section>
            @endforeach
        </div>
    @endif
</div>
