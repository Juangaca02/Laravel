<x-pagina-sin-nada-layout navbarType="black" >
    <div class="relative h-screen overflow-hidden">
        <figure class="w-full h-full">
            <img src="{{ asset('/storage/Images/images-Missions/listMissions.jpg') }}" alt=""
                class="object-cover w-full h-full">
        </figure>
        <div class="absolute inset-0 flex flex-col items-center justify-center space-y-2">
            <div class="text-black text-4xl font-bold p-2">
                Lista de Misiones
            </div>
            <div>
                @livewire('list-missions')
            </div>
        </div>
        <div class="absolute inset-x-0 bottom-0">
            <!-- Capa oscura transparente -->
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative">
                @include('layouts.footer')
            </div>
        </div>
    </div>
</x-pagina-sin-nada-layout>
