<nav class="navbar navbar-fixed w-full z-10">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('storage/images/logo.png') }}" class="h-20" alt="Flowbite Logo" />
            <span class="text-white text-2xl font-semibold ">Casino</span>
        </a>
        <button data-collapse-toggle="navbar-dropdown" type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 0 dark:focus:ring-gray-600"
            aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden sm:flex sm:items-center sm:ms-6">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 items-center">
                @auth
                    <li>
                        <a href="{{ route('home') }}"
                            class="cursor-pointer block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-600 md:p-0">
                            Home
                        </a>
                    </li>
                    @if (Auth::user()->is_admin == '1')
                        <li>
                            <a href="{{ route('listUsers') }}"
                                class="cursor-pointer block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-600 md:p-0">
                                List User
                            </a>
                        </li>
                    @endif
                    <li>
                        <a href="{{ route('transaction.index') }}"
                            class="cursor-pointer block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-600 md:p-0">
                            Transaction
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('userProfile') }}"
                            class="cursor-pointer block py-2 px-3 mr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-600  md:p-0">
                            Account
                        </a>
                    </li>
                    <li>
                        <x-dropdown width="48">
                            <x-slot name="trigger">
                                <button
                                    class="text-white inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md focus:outline-none transition ease-in-out duration-150 hover:bg-gray-900 hover:shadow-md">
                                    <div>
                                        <span class="dorado">
                                            Name:
                                        </span>
                                        {{ Auth::user()->name }}
                                        <br>
                                        <span class="dorado">
                                            Balance:
                                        </span>
                                        {{ Auth::user()->balance }} €
                                    </div>
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
                                    {{ __('Profile') }}
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
                    </li>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-white hover:text-yellow-600 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-white hover:text-yellow-600 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            Register
                        </a>
                    @endif
                @endauth
            </ul>
        </div>
        {{-- <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 items-center">
                <li>
                    <a href="{{ route('home') }}"
                        class="cursor-pointer block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-600 md:p-0">Home</a>
                </li>
                @auth
                    @if (Auth::user()->is_admin == '1')
                        <li>
                            <a href="{{ route('listUsers') }}"
                                class="cursor-pointer block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-600 md:p-0">
                                List User
                            </a>
                        </li>
                    @endif
                    <li>
                        <a href="{{ route('transaction.index') }}"
                            class="cursor-pointer block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-600 md:p-0">Transaction</a>
                    </li>
                    <li>
                        <a href="{{ route('userProfile') }}"
                            class="cursor-pointer block py-2 px-3 mr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-600  md:p-0">Account</a>
                    </li>
                    <li>
                        <div class="dropdown text-white">
                            <p class="cursor-pointer"><span class="dorado">Name:</span> {{ Auth::user()->name }} </p>
                            <p class="cursor-pointer"><span class="dorado">Balance:</span> {{ Auth::user()->balance }} €
                            </p>
                        </div>
                    </li>
                </ul>
            </div> --}}
    </div>
</nav>
