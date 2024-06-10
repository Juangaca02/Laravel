{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

{{-- <div class="container mx-auto">
    <h1 class="text-2xl text-center font-bold mb-4">Misiones Seguidas</h1>
    @foreach ($missions as $mission)
        <div class="bg-white p-4 rounded-lg shadow">
            <h2 class="text-xl font-bold">{{ $mission->title }}</h2>
            <p>{{ $mission->description }}</p>
            <button wire:click="unfollow({{ $mission->id }})"
                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                Dejar de Seguir
            </button>
        </div>
    @endforeach
</div> --}}

<div class="container mx-auto pb-[200px]">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <h1 class="text-2xl text-center text-white font-bold my-8">Misiones Seguidas</h1>
    @if ($missions->count() == 0)
        <p class="text-center">No tienes misiones seguidas</p>
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
                        <p><strong>Usuario:</strong> {{ $mission->user_id }}</p>
                    </div>
                    <button wire:click="unfollow({{ $mission->id }})"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                        Dejar de Seguir
                    </button>
                </div>
            </div>
        </div>
    @endforeach
</div>
