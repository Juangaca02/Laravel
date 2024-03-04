<x-app-layout>
    <div class="bg-image">
        <div class="overlay">
            <h2>────── EXPERIENCE THE RICHNESS ──────</h2>
            <h1>Win Big Playing Luxury Casino Games</h1>
            <p>Win a once-in-a-lifetime exclusive Experience!</p>
            @auth
            @else
                <button type="submit"
                    class="btn-dorado bg-dorado text-white font-medium rounded-lg text-sm px-4 py-2 text-center">
                    <a href="{{ route('login') }}">Get started</a>
                </button>
            @endauth
        </div>
    </div>
    <br><br>
    <div class="centrar grid-container">
        <div class="mx-auto ">
            <a class="centrar" href=""><img src="{{ asset('storage/images/roulette.png') }}" alt=""
                    style="height: 100px;"></a>
            <p class="text-white text-center">Roulette</p>
            <!-- <table border="1" class=" min-w-4 text-white text-center border border-white"> -->
            <div class="border border-yellow-500 rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-white">
                    <thead class="text-xs uppercase dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                User Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Bet
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Balance
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Option
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bets as $bet)
                            @if ($bet->game_id == 1)
                                <tr class="">
                                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                        @php
                                            $user = App\Models\User::find($bet->user_id);
                                        @endphp
                                        {{ $user->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $bet->description_bet }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $bet->amount_bet }} €
                                    </td>
                                    {{-- Auth::check() Verifica si hay un usuario autentificado y devuelve true o false,
                                        haciendo que si el Auth::user() es null, no de fallo al no controlar dicho null --}}
                                    @if (Auth::check() && $bet->user_id == Auth::user()->id)
                                        <td class="px-6 py-4">
                                            <a href="{{ route('bet.edit', ['bet' => $bet->id]) }}">
                                                <button type="button"
                                                    class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    Editar
                                                </button>
                                            </a>
                                        </td>
                                    @endif
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mx-auto ">
            <a class="centrar" href=""><img src="{{ asset('storage/images/poker.png') }}" alt=""
                    style="height: 100px;"></a>
            <p class="text-white text-center">Poker</p>
            <!-- <table border="1" class=" min-w-4 text-white text-center border border-white"> -->
            <div class="border border-yellow-500 rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-white">
                    <thead class="text-xs uppercase dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                User Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Bet
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Balance
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Option
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bets as $bet)
                            @if ($bet->game_id == 2)
                                <tr class="">
                                    <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                                        @php
                                            $user = App\Models\User::find($bet->user_id);
                                        @endphp
                                        {{ $user->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{ $bet->description_bet }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $bet->amount_bet }} €
                                    </td>
                                    {{-- Auth::check() Verifica si hay un usuario autentificado y devuelve true o false,
                                        haciendo que si el Auth::user() es null, no de fallo al no controlar dicho null --}}
                                    @if (Auth::check() && $bet->user_id == Auth::user()->id)
                                        <td class="px-6 py-4">
                                            <a href="{{ route('bet.edit', ['bet' => $bet->id]) }}">
                                                <button type="button"
                                                    class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                    Editar
                                                </button>
                                            </a>
                                        </td>
                                    @endif
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
