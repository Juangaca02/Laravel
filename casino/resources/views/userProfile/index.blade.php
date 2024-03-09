<x-app-layout>
    <section class="flex relative container mx-auto">
        <div class="border border-white rounded-lg ml-40 mr-20 max-w-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium dorado">
                    Your Profile
                </h3>
            </div>
            <div class="px-4 py-5 sm:p-0">
                <table class="text-sm text-left rtl:text-right text-white">
                    <tbody>
                        <tr>
                            <img class="w-56 max-h-56 max-w-56 min-h-56 min-w-56 mx-auto"
                                src="{{ Storage::url('images/' . Auth::user()->image) }}" alt="">
                        </tr>
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
        </div>
        <div class="">
            <div class="px-4 py-5 border border-white rounded-lg">
                @livewire('bet-form')
            </div>
        </div>
    </section>
</x-app-layout>
