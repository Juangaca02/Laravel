<section class="home-Principal flex flex-col text-white">
    <article class="m-[100px] flex flex-col-reverse lg:flex-row items-center space-x-5 ">
        <div class="w-full lg:w-2/3">
            <p class="text-white text-[27px] font-bold">Nuestra plataforma está diseñada para brindar a los miembros
                del ejército acceso rápido y seguro a información crucial sobre posibles destinos de guerra, bases
                militares y más. Ya sea que estés preparándote para una misión importante o simplemente necesites
                mantenerte informado sobre los acontecimientos actuales, estamos aquí para ayudarte.</p>
        </div>
        <div class="w-full lg:w-1/2 mb-5 lg:mb-0">
            <figure class="flex items-center justify-center">
                <img class="rounded-3xl max-h-[375px]" src="{{ asset('/storage/Images/Images-Home/PlaneHome.jpg') }}"
                    alt="">
            </figure>
        </div>
    </article>
    <article class="m-[100px] flex flex-col lg:flex-row items-center space-x-5">
        <div class="w-full lg:w-1/2 mb-5 lg:mb-0">
            <figure class="flex items-center justify-center">
                <img class="rounded-3xl max-h-[375px]" src="{{ asset('/storage/Images/Images-Home/MilitaryBase.jpg') }}"
                    alt="">
            </figure>
        </div>
        <div class="w-full lg:w-1/2">
            <h4 class="text-center lg:text-left text-white text-[35px] font-bold">¿Qué puedes hacer aquí?</h4>
            <ul class="text-white text-[27px] font-bold">
                <li>- Explora Destinos: Accede a información detallada sobre destinos de despliegue, evaluaciones de
                    seguridad y condiciones locales.</li>
                <li>- Encuentra Bases Militares: Localiza bases cercanas, con detalles sobre su función, comandantes
                    y servicios disponibles.</li>
                <li>- Mantente Informado: Recibe actualizaciones en tiempo real sobre cambios en las operaciones,
                    alertas de seguridad y directrices importantes.</li>
            </ul>
        </div>
    </article>
    @auth
    @else
        <article class="m-[100px] flex flex-col items-center space-y-5">
            <div class="w-full lg:w-5/6 mb-5 lg:mb-0">
                <h4 class="text-center lg:text-left text-white text-[35px] font-bold mb-5">Únete a la Comunidad</h4>
                <p class="text-white text-[27px] font-bold">
                    ¿Eres nuevo aquí? Regístrate para obtener acceso completo a todas las funciones de nuestra
                    aplicación. Si ya eres parte de nuestra comunidad, ¡inicia sesión y sumérgete en la información que
                    necesitas!
                </p>
                <div class="flex justify-center space-x-5 mt-5">
                    {{-- <button class="w-[150px] bg-black h-[50px] my-3 flex items-center justify-center rounded-xl cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-[#009b49] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-xl hover:before:left-0 text-[#fff]">
                    Button
                </button> --}}
                    <button onclick="window.location.href = '{{ route('login') }}';" class="buttonHome">
                        Iniciar Sesion
                    </button>
                    <button onclick="window.location.href = '{{ route('register') }}';" class="buttonHome">
                        Registrarse
                    </button>
                </div>
            </div>
        </article>
    @endauth

    <hr class="mx-[100px]">
    @include('layouts.footer')
</section>
