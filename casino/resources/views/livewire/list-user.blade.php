<div>
    <div>
        {{-- If your happiness depends on money, you will never be happy with yourself. --}}
        <h2 class="font-semibold text-center text-xl dorado leading-tight">Your Bets</h2>
        <div>
            @if ($mostrar)
                <p>hola</p>
            @endif
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            @if (session('status'))
                <x-my-alert textColor="text-green-800" bgColor="bg-green-50">
                    {{ session('status') }}
                </x-my-alert>
            @endif
            @if (session('errorBet'))
                <x-my-alert textColor="text-red-800" bgColor="bg-red-50">
                    {{ session('errorBet') }}
                </x-my-alert>
            @endif
            <table class="mt-4 w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="text-xs text-gray-700 uppercase bg-gray-400 ">
                    <tr>
                        <th scope="col" wire:click="ordenar('id')" class="px-6 py-3 cursor-pointer">
                            <div class="flex items-center">
                                @if ($campoOrden == 'id')
                                    <p class="text-red-600">Id</p>
                                @else
                                    Id
                                @endif
                                <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg>
                            </div>
                        </th>
                        <th scope="col" wire:click="ordenar('name')" class="px-6 py-3 cursor-pointer">
                            <div class="flex items-center">
                                @if ($campoOrden == 'name')
                                    <p class="text-red-600">User</p>
                                @else
                                    User
                                @endif
                                <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg>
                            </div>
                        </th>
                        <th scope="col" wire:click="ordenar('email')" class="px-6 py-3 cursor-pointer">
                            <div class="flex items-center">
                                @if ($campoOrden == 'email')
                                    <p class="text-red-600">Gmail</p>
                                @else
                                    Gmail
                                @endif
                                <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg>
                            </div>
                        </th>
                        <th scope="col" wire:click="ordenar('balance')" class="px-6 py-3 cursor-pointer">
                            <div class="flex items-center">
                                @if ($campoOrden == 'balance')
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
                    @foreach ($users as $user)
                        <tr class="bg-white ">
                            <th class="px-6 py-4">
                                {{ $user->id }}
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $user->name }} {{ $user->surname }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $user->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->balance }} €
                            </td>
                            <td class="px-6 py-4">
                                @if ($user->is_admin)
                                    <p class="font-medium dorado">Admin</p>
                                @else
                                    <div class="inline">
                                        <form action="{{ route('profile.promoteToAdmin', ['user' => $user]) }}"
                                            method="post" class="inline">
                                            @csrf
                                            @method('patch')
                                            <button type="submit"
                                                class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                                                Promote to Admin
                                            </button>
                                        </form>
                                        {{-- 
                                        <a>
                                            <button type="button" wire:click='mostrarForm()'
                                                class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                                                Edit
                                            </button>
                                        </a> 
                                        --}}
                                        <form action="{{ route('profile.destroyUser', ['user' => $user]) }}"
                                            method="post" class="inline">
                                            @csrf
                                            @method('delete')
                                            <button type="submit"
                                                class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @endforeach

                    @if ($users->hasPages())
                        <div>
                            {{ $users->links() }}
                        </div>
                    @endif
                </tbody>
            </table>

        </div>
    </div>

</div>
