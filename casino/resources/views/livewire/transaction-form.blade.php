<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <h2 class="font-semibold text-center text-xl dorado leading-tight">Your Transactions</h2>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        @if (session('updateBet'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                {{ session('updateBet') }}
            </div>
        @endif
        @if (session('deleteBet'))
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                {{ session('deleteBet') }}
            </div>
        @endif
        @if ($transactions->isEmpty())
            <div>
                <p class="text-red-600">No hay transacciones</p>
            </div>
        @else
            <table class="bg-white mt-4 w-full text-sm text-left rtl:text-right text-gray-500 ">
                <thead class="bg-gray-800 text-xs text-white uppercase">
                    <tr>
                        <th scope="col" wire:click="ordenar('transaction_type')" class="px-6 py-3 cursor-pointer">
                            <div class="flex items-center">
                                @if ($campoOrden == 'transaction_type')
                                    <p class="text-red-600">Tipo de Transaction</p>
                                @else
                                    Tipo de Transaction
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
                        <th scope="col" wire:click="ordenar('created_at')" class="px-6 py-3 cursor-pointer">
                            <div class="flex items-center">
                                @if ($campoOrden == 'created_at')
                                    <p class="text-red-600">Fecha de Transaction</p>
                                @else
                                    Fecha de Transaction
                                @endif
                                <svg class="w-3 h-3 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg>
                            </div>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        <tr class="text-black">
                            <th scope="row" class="font-bold px-6 py-4 font-medium whitespace-nowrap">
                                {{ $transaction->transaction_type }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $transaction->balance }} €
                            </td>
                            <td class="px-6 py-4">
                                {{ $transaction->created_at }}
                            </td>
                        </tr>
                    @endforeach
                    @if ($transactions->hasPages())
                        <div>
                            {{ $transactions->links() }}
                        </div>
                    @endif
                </tbody>
            </table>
        @endif
    </div>
</div>
