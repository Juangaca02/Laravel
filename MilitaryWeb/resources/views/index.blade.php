<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<script src="{{ asset('js/index.js') }}"></script>
<x-pagina-sin-nada-layout>
    {{-- <div class="bg-image"> --}}
    <div class="relative bg-center text-center text-rgb(229, 206, 182)">
        @auth
            @if (Auth::user()->verified == 0)
                {{-- Carousel Sin verificar --}}
                @include('home.carousel')
            @else
                @switch((Auth::user()->army_id))
                    {{-- Carousel Sin armada --}}
                    @case(1)
                        @include('home.carousel')
                    @break

                    {{-- Carousel Tierra --}}
                    @case(2)
                        @include('tierra.carousel')
                    @break

                    {{-- Carousel Naval --}}
                    @case(3)
                        @include('naval.carousel')
                    @break

                    {{-- Carousel Aire --}}
                    @case(4)
                        @include('aire.carousel')
                    @break
                @endswitch
            @endif
        @else
            @include('home.carousel')
        @endauth
    </div>
    @auth
        @if (Auth::user()->verified == 0)
            {{-- Home Sin verificar --}}
            @include('home.home')
        @else
            @switch((Auth::user()->army_id))
                {{-- Home Sin verificar --}}
                @case(1)
                    @include('home.home')
                @break

                {{-- Home Tierra --}}
                @case(2)
                    @include('tierra.Home-Tierra')
                @break

                {{-- Home Naval --}}
                @case(3)
                    @include('naval.Home-Naval')
                @break

                {{-- Home Aire --}}
                @case(4)
                    @include('aire.Home-Aire')
                @break
            @endswitch
        @endif
    @else
        @include('home.home')
    @endauth
</x-pagina-sin-nada-layout>
