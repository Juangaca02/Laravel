<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <h2 class="font-semibold text-center text-xl dorado leading-tight">Your Bets</h2>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        @if (session('successBet'))
            <x-my-alert textColor="text-green-800" bgColor="bg-green-50">
                {{ session('successBet') }}
            </x-my-alert>
        @endif
        @if (session('errorBet'))
            <x-my-alert textColor="text-red-800" bgColor="bg-red-50">
                {{ session('errorBet') }}
            </x-my-alert>
        @endif
        {{-- @if ($bets->isEmpty())
            <div>
                <p class="text-red-600">No hay apuestas</p>
            </div>
        @else --}}
        <table class="mt-4 w-full text-sm text-left rtl:text-right text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-gray-400 ">
                <tr>
                    <th scope="col" wire:click="ordenar('user_id')" class="px-6 py-3 cursor-pointer">
                        <div class="flex items-center">
                            User
                        </div>
                    </th>
                    <th scope="col" wire:click="ordenar('game_id')" class="px-6 py-3 cursor-pointer">
                        <div class="flex items-center">
                            @if ($campoOrden == 'game_id')
                                <p class="text-red-600">Game</p>
                            @else
                                Game
                            @endif
                            <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                            </svg>
                        </div>
                    </th>
                    <th scope="col" wire:click="ordenar('description_bet')" class="px-6 py-3 cursor-pointer">
                        <div class="flex items-center">
                            @if ($campoOrden == 'description_bet')
                                <p class="text-red-600">Descripcion</p>
                            @else
                                Descripcion
                            @endif
                            <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                            </svg>
                        </div>
                    </th>
                    <th scope="col" wire:click="ordenar('amount_bet')" class="px-6 py-3 cursor-pointer">
                        <div class="flex items-center">
                            @if ($campoOrden == 'amount_bet')
                                <p class="text-red-600">Balance</p>
                            @else
                                Balance
                            @endif
                            <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                            </svg>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3 cursor-pointer">
                        <div class="flex items-center">
                            Options
                        </div>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bets as $bet)
                    <tr class="bg-white ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            @php
                                $user = App\Models\User::find($bet->user_id);
                            @endphp
                            {{ $user->name }}
                        </th>
                        <td class="px-6 py-4">
                            @php
                                $game = App\Models\Game::find($bet->game_id)->name;
                            @endphp
                            {{ $game }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $bet->description_bet }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $bet->amount_bet }} €
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('bet.edit', ['bet' => $bet->id]) }}">
                                <button type="button"
                                    class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                                    Editar
                                </button>
                            </a>
                            <form action="{{ route('bet.destroy', ['bet' => $bet->id]) }}" method="post"
                                class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                @if ($bets->hasPages())
                    <div>
                        {{ $bets->links() }}
                    </div>
                @endif
            </tbody>
        </table>
        {{-- @endif --}}

    </div>
</div>
