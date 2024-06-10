<div class="container mx-auto mt-8">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <h1 class="text-2xl font-bold mb-4">Misiones Seguidas</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
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
    </div>
</div>
