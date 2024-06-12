<li>
    <a href="{{ route('home') }}"
        class="cursor-pointer block py-2 px-3 text-black font-bold rounded md:hover:bg-transparent md:border-0 hover:text-yellow-600 md:p-0">
        Inicio
    </a>
</li>

<div class="hidden sm:flex sm:items-center sm:ms-6">
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button
                class="inline-flex items-center text-black font-bold px-3 py-2 text-md leading-4 rounded-md hover:text-yellow-600 focus:outline-none transition ease-in-out duration-150">
                <div>Listas</div>
                <div class="ms-1">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </button>
        </x-slot>
        <x-slot name="content">
            @if (Auth::user()->range_id >= 5)
                <x-dropdown-link :href="route('listSoldier')">
                    {{ __('Lista de Soldados') }}
                </x-dropdown-link>
            @endif
            <x-dropdown-link :href="route('missions.followed')">
                {{ __('Mis Misiones') }}
            </x-dropdown-link>
        </x-slot>
    </x-dropdown>
</div>
@if (Auth::user()->range_id >= 11)
    <div class="hidden sm:flex sm:items-center sm:ms-6">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button
                    class="inline-flex items-center text-black font-bold px-3 py-2 text-md leading-4 rounded-md hover:text-yellow-600 focus:outline-none transition ease-in-out duration-150">
                    <div>Paises</div>
                    <div class="ms-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>
            <x-slot name="content">
                <x-dropdown-link :href="route('createCountry')">
                    {{ __('Crear Pais') }}
                </x-dropdown-link>
                <x-dropdown-link :href="route('listCountries')">
                    {{ __('Lista de Paises') }}
                </x-dropdown-link>
            </x-slot>
        </x-dropdown>
    </div>
    <div class="hidden sm:flex sm:items-center sm:ms-6">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button
                    class="inline-flex items-center text-black font-bold px-3 py-2 text-md leading-4 rounded-md hover:text-yellow-600 focus:outline-none transition ease-in-out duration-150">
                    <div>Destinos</div>
                    <div class="ms-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>
            <x-slot name="content">
                <x-dropdown-link :href="route('createDestination')">
                    {{ __('Crear Destino') }}
                </x-dropdown-link>
                <x-dropdown-link :href="route('listDestinations')">
                    {{ __('Lista de Destinos') }}
                </x-dropdown-link>
            </x-slot>
        </x-dropdown>
    </div>
    <div class="hidden sm:flex sm:items-center sm:ms-6">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button
                    class="inline-flex items-center text-black font-bold px-3 py-2 text-md leading-4 rounded-md hover:text-yellow-600 focus:outline-none transition ease-in-out duration-150">
                    <div>Misiones</div>
                    <div class="ms-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>
            <x-slot name="content">
                <x-dropdown-link :href="route('createMission')">
                    {{ __('Crear Mision') }}
                </x-dropdown-link>
                <x-dropdown-link :href="route('listMissions')">
                    {{ __('Lista de Misiones') }}
                </x-dropdown-link>
            </x-slot>
        </x-dropdown>
    </div>
@endif
<div class="hidden sm:flex sm:items-center sm:ms-6">
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button
                class="inline-flex items-center text-black font-bold px-3 py-2 text-md leading-4 rounded-md hover:text-yellow-600 focus:outline-none transition ease-in-out duration-150">
                <div class="mr-2 rounded-full">
                    <img src="{{ Storage::url('Images/imagesUsers/' . Auth::user()->profile_photo_path) }}"
                        alt="profile_photo" class="w-[30px] h-[30px] object-cover rounded-full">
                </div>
                <div>{{ Auth::user()->name }}</div>
                <div class="ms-1">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </button>
        </x-slot>

        <x-slot name="content">
            <div class="px-4 py-2 text-white "><em>{{ Auth::user()->range->name }}</em></div>
            <x-dropdown-link :href="route('profile.edit')">
                {{ __('Perfil') }}
            </x-dropdown-link>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault();
                        this.closest('form').submit();">
                    {{ __('Cerrar Sesion') }}
                </x-dropdown-link>
            </form>
        </x-slot>
    </x-dropdown>
</div>
