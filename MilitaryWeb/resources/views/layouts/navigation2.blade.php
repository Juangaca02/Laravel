<nav class="navbar navbar-fixed w-full z-10">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        
        
        
        <div class="hidden sm:flex sm:items-center sm:ms-6">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700 items-center">
                
                    <a href="{{ route('login') }}"
                        class="font-semibold text-white hover:text-yellow-600 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-white hover:text-yellow-600 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            Register
                        </a>
                    @endif
            </ul>
        </div>
    </div>
</nav>
