<x-pagina-sin-nada-layout>
    <div class="relative min-h-screen bg-cover bg-center bg-fixed"
        style="background-image: url('{{ asset('/storage/Images/images-Missions/listUserMissions.png') }}');">
        <div class="pt-24 pb-24">
            <div class="max-w-screen-lg mx-auto">
                @livewire('follow')
            </div>
        </div>
        <div class="absolute bottom-0 left-0 w-full bg-black opacity-75 py-4">
            @include('layouts.footer')
        </div>
    </div>
</x-pagina-sin-nada-layout>
