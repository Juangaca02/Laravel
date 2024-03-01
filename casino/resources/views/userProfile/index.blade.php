<x-app-layout>
    <section class="flex relative">
        <div class="border border-white rounded-lg ml-20 mr-20 max-w-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium dorado">
                    Your Profile
                </h3>
            </div>
            <div class="px-4 py-5 sm:p-0">
                <table class="text-sm text-left rtl:text-right text-white">
                    <tbody>
                        <tr>
                            <th class="px-3 py-2 text-sm font-medium dorado">
                                Full Name
                            </th>
                            <td class="px-3 py-2 mt-1 text-sm">
                                {{ Auth::user()->name }} {{ Auth::user()->surname }}
                            </td>
                        </tr>
                        <tr>
                            <th class="px-3 py-2 font-medium dorado">
                                Email address
                            </th>
                            <td class="px-3 py-2 mt-1 text-sm">
                                {{ Auth::user()->email }}
                            </td>
                        </tr>
                        <tr>
                            <th class="px-3 py-2 font-medium dorado">
                                Balance
                            </th>
                            <td class="px-3 py-2 mt-1 text-sm">
                                {{ Auth::user()->balance }}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="px-4 py-5 flex justify-center items-center">
                    <button type="submit"
                        class="btn-dorado bg-dorado text-white  items-center focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:focus:ring-blue-800">
                        <a href="{{ route('profile.edit') }}">
                            Edit profile
                        </a>
                    </button>
                    <button type="submit"
                        class="btn-dorado text-white ml-3 items-center focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:focus:ring-blue-800">
                        <a href="{{ route('bet.create') }}">
                            Create Bet
                        </a>
                    </button>
                </div>
            </div>
            <div class="px-4 py-3 sm:px-6">
                <h3 class="text-center text-lg leading-6 font-medium dorado">
                    Delete User
                </h3>
            </div>
        </div>
        <div class="">
            <div class="px-4 py-5 border border-white rounded-lg">
                <p class="text-lg text-center leading-6 font-medium dorado">
                    Your Bets
                </p>
                <table class="text-left rtl:text-right text-white">
                    <thead class="text-xs uppercase dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                User
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Game
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Edir
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Delete
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- <tr *ngFor="let bet of betProfile">
                            <th class="px-6 py-4 font-medium dorado">{{ bet . name }} {{ bet . username }}</th>
                            <td class="px-6 py-4">{{ bet . nameGame }}</td>
                            <td class="px-6 py-4">{{ bet . description }}</td>
                            <td class="px-6 py-4">{{ bet . balance }}</td>
                            <td class="px-6 py-4">
                                <button type="button" (click)="edit_bets(bet.id)"
                                    class="bg-blue-700 hover:bg-blue-500 text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">Edit
                                    Bet</button>
                            </td>
                            <td class="px-6 py-4">
                                <button type="button" (click)="deleteBet(bet.id)"
                                    class="bg-red-700 hover:bg-red-500 text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center">Delete</button>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-app-layout>
