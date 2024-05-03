<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<script src="{{ asset('js/index.js') }}"></script>
@include('layouts.navigation2')
<x-pagina-sin-nada-layout>
    {{-- <div class="bg-image"> --}}
    <div class="relative bg-center text-center text-rgb(229, 206, 182)">
        <figure>
            {{-- <figcaption></figcaption> --}}
            <img src="{{ asset('/storage/Images/Images-Home/TopHome.png') }}" alt="">
        </figure>
        {{-- <div class="overlay"> --}}
        <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-transparent to-black flex justify-center items-center"
            style="background-color: rgba(0, 0, 0, 0.5);">
            <div class="text-center mt-[-200px]">
                <h1 class="text-3xl text-yellow-500">En la línea del deber, cada decisión cuenta</h1>
                <h2
                    class="text-7xl inline-block bg-gradient-to-r from-yellow-500 via-white to-blue-500 bg-clip-text text-transparent py-1">
                    Bienvenido a Military Web
                </h2>
                <h3 class="text-2xl text-blue-500">Preparados para el deber, informados para la victoria</h3>
            </div>
        </div>
    </div>
    <section class="home-Principal flex flex-col text-white">
        <article class="mt-[100px] mx-[100px] flex items-center">
            <div class="w-2/3 text-center">
                <p class="text-xl">Nuestra plataforma está diseñada para brindar a los miembros del ejército acceso
                    rápido y seguro a información crucial sobre posibles destinos de guerra, bases militares y más. Ya
                    sea que estés preparándote para una misión importante o simplemente necesites mantenerte informado
                    sobre los acontecimientos actuales, estamos aquí para ayudarte.</p>
            </div>
            <div class="w-1/2 text-center">
                <figure>
                    <img class="rounded-3xl" src="{{ asset('/storage/Images/Images-Home/PlaneHome.jpg') }}"
                        alt="">
                </figure>
            </div>
        </article>
        <article class="mt-[200px] mx-[100px] flex items-center">
            <div class="w-1/2 text-center">
                <figure>
                    <img class="rounded-3xl" src="{{ asset('/storage/Images/Images-Home/MilitaryBase.jpg') }}"
                        alt="">
                </figure>
            </div>
            <div class="w-2/3 text-center">
                <h4 class="text-3xl">¿Qué puedes hacer aquí?</h4>
                <p class="text-xl">- Explora Destinos: Accede a información detallada sobre destinos de despliegue,
                    evaluaciones de seguridad y condiciones locales. - Encuentra Bases Militares: Localiza bases
                    cercanas,
                    con detalles sobre su función, comandantes y servicios disponibles. - Mantente Informado: Recibe
                    actualizaciones en tiempo real sobre cambios en las operaciones, alertas de seguridad y directrices
                    importantes.</p>
            </div>
        </article>
    </section>
</x-pagina-sin-nada-layout>
