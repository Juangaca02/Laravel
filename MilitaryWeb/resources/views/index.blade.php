<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<script src="{{ asset('js/index.js') }}"></script>
@include('layouts.navigation2')
<x-pagina-sin-nada-layout>
    {{-- <div class="bg-image"> --}}
    <div class="relative bg-center text-center text-rgb(229, 206, 182)">
        @auth
            @switch((Auth::user()->army_id))
                {{-- Carousel Tierra --}}
                @case(2)
                    <figure>
                        <img src="{{ asset('/storage/Images/Images-Home-Naval/TopHome.png') }}" alt="">
                    </figure>
                @break

                {{-- Carousel Naval --}}
                @case(3)
                    @include('naval.carousel')
                @break

                {{-- Carousel Aire --}}
                @case(4)
                    <figure>
                        <img src="{{ asset('/storage/Images/Images-Home-Aire/TopHome.png') }}" alt="">
                    </figure>
                @break
            @endswitch
        @else
            @include('home.carousel')
        @endauth
    </div>
    @auth
        @switch((Auth::user()->army_id))
            {{-- Home Tierra --}}
            @case(2)
                <section>
                </section>
            @break

            {{-- Home Naval --}}
            @case(3)
                @include('naval.Home-Naval')
            @break

            {{-- Home Aire --}}
            @case(4)
                <section>
                </section>
            @break
        @endswitch
    @else
        @include('home.home')
    @endauth
</x-pagina-sin-nada-layout>
