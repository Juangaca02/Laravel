<script src="{{ asset('js/buttonDeleteUser.js') }}"></script>
<x-pagina-sin-nada-layout>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css"> --}}
    <figure class=""><!--- max-w-[800px] --->
        <img src="{{ asset('/storage/Images/ImagesRelleno/Soldados2.jpg') }}"
            alt="">
        {{-- <figcaption class="text-2xl italic mt-2">Buque insignia de la Armada</figcaption> --}}
    </figure>
    <div class="m-5">
        @livewire('user-table')
    </div>
    
</x-pagina-sin-nada-layout>
