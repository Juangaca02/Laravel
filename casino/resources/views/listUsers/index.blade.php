<x-app-layout>
    <section class="relative">
        <div class="grid grid-cols-2 text-white">
            <div class="rounded-lg">
                <a href="{{ route('home') }}" class="flex justify-center mb-6">
                    <img class="h-20" src="{{ asset('storage/images/logo.png') }}" alt="logo">
                </a>
                <h1 class="mb-6 text-xl font-bold dorado md:text-2xl text-center">
                    Create user
                </h1>
                <form method="POST" action="{{ route('profile.storeUser') }}"
                    class="flex justify-center items-center mb-6">
                    @csrf
                    <table>
                        <tr>
                            <td>
                                <div>
                                    <label for="name" class="block mb-2 text-md font-medium dorado">Name:
                                    </label>
                                    <input type="string" name="name" id="name" value="{{ old('name') }}"
                                        class="bg-gray-700 text-white sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        placeholder="Name" required="">
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                            </td>
                            <td>
                                <div class="ml-6">
                                    <label for="surname" class="block mb-2 text-md font-medium dorado">Surname:
                                    </label>
                                    <input type="string" name="surname" id="surname" value="{{ old('surname') }}"
                                        class="bg-gray-700 text-white sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        placeholder="Surname" required="">
                                    <x-input-error :messages="$errors->get('surname')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div>
                                    <label for="email" class="block mb-2 text-md font-medium dorado">Email:
                                    </label>
                                    <input type="string" name="email" id="email" value="{{ old('email') }}"
                                        class="bg-gray-700 text-white sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        placeholder="Email" required="">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <label for="password" class="block mb-2 text-md font-medium dorado">Password:
                                    </label>
                                    <input type="password" name="password" id="password"
                                        class="bg-gray-700 text-white sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        placeholder="Password" required="">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                            </td>
                            <td>
                                <div class="ml-6">
                                    <label for="password_confirmation"
                                        class="block mb-2 text-md font-medium dorado">Confirm Password:
                                    </label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="bg-gray-700 text-white sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                        placeholder="Repete password" required="">
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <div class="flex items-center justify-end m-4">
                                    <button type="submit"
                                        class="ms-4 inline-flex items-center px-4 py-2 bg-gradient-to-r from-doradoBoton1 to-doradoBoton2 botonGeneral rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                        Registrarse
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="ml-3 mr-6">
                <div class="px-4 py-5 border border-white rounded-lg">
                    @livewire('list-user')
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
