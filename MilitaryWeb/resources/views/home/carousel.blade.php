<figure>
    {{-- <figcaption></figcaption> --}}
    <img src="{{ asset('/storage/Images/Images-Home/TopHome.png') }}" alt="">
</figure>
{{-- <div class="overlay"> --}}
<div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-transparent to-black flex justify-center items-center"
    style="background-color: rgba(0, 0, 0, 0.5);">
    @auth
        @if (Auth::User()->verified == 0)
            <div class="text-center mt-[-200px]">
                <h2
                    class="text-7xl inline-block bg-gradient-to-r from-yellow-500 via-white to-blue-500 bg-clip-text text-transparent py-1">
                    Espere a que le verifique un superior
                </h2>
            </div>
        @else
            <div class="text-center mt-[-200px]">
                <h1 class="text-3xl text-yellow-500">En la línea del deber, cada decisión cuenta</h1>
                <h2
                    class="text-7xl inline-block bg-gradient-to-r from-yellow-500 via-white to-blue-500 bg-clip-text text-transparent py-1">
                    Bienvenido a Military Web
                </h2>
                <h3 class="text-2xl text-blue-500">Preparados para el deber, informados para la victoria</h3>
            </div>
        @endif
    @else
        <div class="text-center mt-[-200px]">
            <h1 class="text-3xl text-yellow-500">En la línea del deber, cada decisión cuenta</h1>
            <h2
                class="text-7xl inline-block bg-gradient-to-r from-yellow-500 via-white to-blue-500 bg-clip-text text-transparent py-1">
                Bienvenido a Military Web
            </h2>
            <h3 class="text-2xl text-blue-500">Preparados para el deber, informados para la victoria</h3>
        </div>
    @endauth
</div>