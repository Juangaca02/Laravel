<nav class="navbar navbar-fixed w-full z-10">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('storage/images/MilitaryWebLogo.png') }}" class="h-20" alt="Flowbite Logo" />
            <span class="text-black text-2xl font-semibold ">MilitaryWeb</span>
        </a>
        <div class="hidden sm:flex sm:items-center sm:ms-6">
            <ul class="flex font-medium p-4 md:p-0 mt-4 rounded-lg md:space-x-8 rtl:space-x-reverse items-center">
                @auth
                    <li>
                        <a href="{{ route('home') }}"
                            class="cursor-pointer block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-600 md:p-0">
                            Home
                        </a>
                    </li>
                    @if (Auth::user()->rol_id == 2)
                        <li>
                            <a href=""
                                class="cursor-pointer block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-600 md:p-0">
                                List Admin
                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->range_id >= 5)
                        <li>
                            <a href="{{ route('listSoldier') }}"
                                class="cursor-pointer block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-600 md:p-0">
                                List Soldier
                            </a>
                        </li>
                    @endif
                    @if (Auth::user()->range_id >= 11)
                        <li>
                            <a href=""
                                class="cursor-pointer block py-2 px-3 text-black rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-600 md:p-0">
                                Create Mission
                            </a>
                        </li>
                    @endif
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-black hover:text-yellow-600 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-black hover:text-yellow-600 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            Register
                        </a>
                    @endif
                @endauth
            </ul>
        </div>
    </div>
</nav>
