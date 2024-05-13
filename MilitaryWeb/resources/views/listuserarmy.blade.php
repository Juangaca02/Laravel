<script src="{{ asset('js/buttonDeleteUser.js') }}"></script>
<x-pagina-sin-nada-layout>
    <figure class=""><!--- max-w-[800px] --->
        <img src="{{ asset('/storage/Images/Images-Relleno/Soldados2.jpg') }}"
            alt="">
        <figcaption class="text-2xl italic mt-2">Buque insignia de la Armada</figcaption>
    </figure>
    @livewire('user-table')
</x-pagina-sin-nada-layout>
