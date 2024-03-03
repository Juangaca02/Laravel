<nav class="navbar navbar-fixed w-full z-10">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
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
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
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
                            <p class="cursor-pointer"><span class="dorado">Balance:</span> {{ Auth::user()->balance }} €</p>
                        </div>
                    </li>
                    <li>
                        <a
                            class="cursor-pointer block py-2 px-3 text-white rounded hover:bg-transparent border-0 hover:text-red-700 p-0">Logout</a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('login') }}"
                            class="cursor-pointer block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-600 md:p-0">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}"
                            class="cursor-pointer block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-600 md:p-0">Register</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
