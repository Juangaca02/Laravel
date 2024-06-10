<nav class="navbar navbar-fixed w-full z-10 oscuroScroll">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('storage/images/MilitaryWebLogo.png') }}" class="h-20" alt="Flowbite Logo" />
            <span class="text-black font-bold text-2xl">MilitaryWeb</span>
        </a>
        <div class="hidden sm:flex sm:items-center sm:ms-6">
            <ul class="flex font-medium p-4 md:p-0 mt-4 rounded-lg md:space-x-8 rtl:space-x-reverse items-center">
                @auth
                    @if (Auth::user()->verified == 1)
                        @if (Auth::user()->rol_id == 2)
                            @include('layouts.admin.navbarAdminBlack')
                        @else
                            @include('layouts.user.navbarUserBlack')
                        @endif
                    @else
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
                                        class="inline-flex items-center text-black font-bold px-3 py-2 text-sm leading-4 rounded-md hover:text-yellow-600 focus:outline-none transition ease-in-out duration-150">
                                        <div class="mr-2 rounded-full">
                                            <img src="{{ Storage::url('Images/imagesUsers/' . Auth::user()->profile_photo_path) }}"
                                                alt="profile_photo" class="w-[30px] h-[30px] object-cover rounded-full">
                                        </div>
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ms-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Perfil') }}
                                    </x-dropdown-link>

                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @endif
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-black font-bold hover:text-yellow-600 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-black font-bold hover:text-yellow-600 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            Register
                        </a>
                    @endif
                @endauth
            </ul>
        </div>
    </div>
</nav>
