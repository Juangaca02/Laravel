<div class="container mx-auto pb-[200px]">
    <h1 class="text-2xl text-center text-white font-bold my-8">Misiones Seguidas</h1>
    @if ($missions->count() == 0)
        <p class="text-center text-red-500 font-bold my-8 text-3xl">No sigues ninguna misión</p>
    @endif
    @foreach ($missions as $mission)
        <div class="bg-white shadow-lg rounded-lg overflow-hidden mb-8">
            @if ($mission->photo)
                <img src="{{ asset('/storage/Images/images-Missions/missions/' . $mission->photo) }}" alt="Mission Photo"
                    class="w-full h-56 object-cover object-center">
            @endif
            <div class="p-6">
                <h2 class="text-xl font-bold mb-2">{{ $mission->title }}</h2>
                <p class="text-gray-700 mb-4">{{ $mission->subtitle }}</p>
                <p class="mb-4">{{ $mission->description }}</p>
                <div class="flex justify-between items-center mb-4">
                    <div>
                        <p><strong>Fecha:</strong> {{ $mission->date }}</p>
                        <p><strong>Estado:</strong> {{ $mission->status }}</p>
                    </div>
                    <div>
                        <p><strong>Tipo:</strong> {{ $mission->type }}</p>
                        <p><strong>Prioridad:</strong> {{ $mission->priority }}</p>
                    </div>
                </div>
                <div class="flex justify-between items-center mb-4">
                    <div>
                        <p><strong>Objetivo:</strong> {{ $mission->objective }}</p>
                        <p><strong>Acción:</strong> {{ $mission->action }}</p>
                    </div>
                    <div>
                        <p><strong>Resultado:</strong> {{ $mission->result }}</p>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <div>
                        <p><strong>Armada:</strong> {{ $mission->army->name }}</p>
                        <p><strong>Destino:</strong> {{ $mission->destination->name }}</p>
                        <p><strong>Persona a cargo:</strong> {{ $mission->user->name }}</p>
                    </div>
                    <div>
                        <button onclick="showFollowers({{ $mission->id }})"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Ver Seguidores
                        </button>
                        <button wire:click="unfollow({{ $mission->id }})"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                            Dejar de Seguir
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
