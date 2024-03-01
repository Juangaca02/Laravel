{{-- <nav class="navbar navbar-fixed w-full z-10">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('storage/images/logo.png') }}" class="h-20" alt="Flowbite Logo" />
            <span class="text-white text-2xl font-semibold ">Casino</span>
        </a>
        <li>
            <a href="#"
                class="cursor-pointer block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-600 md:p-0">Home</a>
        </li>
        @auth
            <li>
                <a
                    class="cursor-pointer block py-2 px-3  text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-600 md:p-0">Transaction</a>
            </li>
            <li>
                <a
                    class="cursor-pointer block py-2 px-3 mr-4 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-yellow-600 md:p-0">Account</a>
            </li>
            <li>
                <div class="dropdown text-white">
                    <p class="cursor-pointer"><span class="dorado">Name:</span> {{ Auth::user()->name }} </p>
                    <p class="cursor-pointer"><span class="dorado">Balance:</span> {{ Auth::user()->balance }} €</p>

                </div>
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
    </div>
</nav> --}}
<nav class="navbar navbar-fixed w-full z-10">
    <a class="font-bold text-xl tracking-tight" href="#">My Site</a>
    <div class="flex items-center">
        <a class="text-sm px-4 py-2 leading-none rounded-full hover:bg-gray-700" href="#">Home</a>
        <a class="text-sm px-4 py-2 leading-none rounded-full hover:bg-gray-700" href="#">About</a>
        <a class="text-sm px-4 py-2 leading-none rounded-full hover:bg-gray-700" href="#">Contact</a>
    </div>
</nav>
