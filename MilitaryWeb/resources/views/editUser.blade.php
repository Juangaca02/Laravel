<x-pagina-sin-nada-layout navbarType="black">
    <div class="relative h-screen overflow-hidden">
        <figure class="w-full h-full">
            <img src="{{ asset('/storage/Images/ImagesRelleno/EditUser.jpg') }}" alt=""
                class="object-cover w-full h-full">
        </figure>
        <div class="absolute inset-0 flex flex-col items-center justify-center space-y-2">
            <div class="text-black text-4xl font-bold">
                Editar Usuario
            </div>
            @if (session('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="flex space-x-5">
                <form class="bg-opacity-50 backdrop-blur-md p-8 rounded-lg shadow-md w-full max-w-4xl flex"
                    enctype="multipart/form-data" method="post" action="{{ route('updateUser') }}" >
                    <!-- <form class="bg-opacity-50 backdrop-blur-md p-8 rounded-lg shadow-md w-full max-w-4xl flex" enctype="multipart/form-datas" wire:submit.prevent="submit">    -->
                    <div class="w-full">
                        @csrf
                        @method('PATCH')
                        <table>
                            <tr>
                                <td>
                                    <!-- Nombre -->
                                    <label for="name" class="block text-black font-bold">Nombre</label>
                                    <input type="text" name="name" id="name" value="{{ $user->name }}"
                                        class="form-input mt-1 block w-full">
                                </td>
                                <td>
                                    <!-- Apellidos -->
                                    <label for="surname" class="block text-black font-bold">Apellidos</label>
                                    <input type="text" name="surname" id="surname" value="{{ $user->surname }}"
                                        class="form-input mt-1 block w-full">
                                </td>
                                <td>
                                    <!-- Dni -->
                                    <label for="DNI" class="block text-black font-bold">DNI</label>
                                    <input type="text" name="DNI" id="DNI" value="{{ $user->DNI }}"
                                        class="form-input mt-1 block w-full">
                                </td>
                                <td>
                                    <!-- Phone -->
                                    <label for="phone" class="block text-black font-bold">Phone</label>
                                    <input type="text" name="phone" id="phone" value="{{ $user->phone }}"
                                        class="form-input mt-1 block w-full">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <!-- Town -->
                                    <label for="town" class="block text-black font-bold">Ciudad</label>
                                    <input type="text" name="town" id="town" value="{{ $user->town }}"
                                        class="form-input mt-1 block w-full">
                                </td>
                                <td><!-- Municipality -->
                                    <label for="municipality" class="block text-black font-bold">Municipio</label>
                                    <input type="text" name="municipality" id="municipality"
                                        value="{{ $user->municipality }}" class="form-input mt-1 block w-full">
                                </td>
                                <td>
                                    <!-- Fecha de Nacimiento -->
                                    <label for="birthdate" class="block text-black font-bold">Fecha de
                                        Nacimiento</label>
                                    <input type="date" name="birthdate" id="birthdate" value="{{ $user->birthdate }}"
                                        class="form-input mt-1 block w-full">
                                </td>
                                <td>
                                    <!-- Entry_army_date -->
                                    <label for="entry_army_date" class="block text-black font-bold">Fecha de
                                        Ingreso</label>
                                    <input type="date" name="entry_army_date" id="entry_army_date"
                                        value="{{ $user->entry_army_date }}" class="form-input mt-1 block w-full">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <!-- Sexo -->
                                    <label for="sex" class="block text-black font-bold">Sexo</label>
                                    <select name="sex" id="sex" class="form-select mt-1 block w-full">
                                        <option value="H" {{ $user->sex === 'H' ? 'selected' : '' }}>Hombre
                                        </option>
                                        <option value="M" {{ $user->sex === 'M' ? 'selected' : '' }}>Mujer
                                        </option>
                                    </select>
                                </td>
                                <td>
                                    <!-- range_id -->
                                    <label for="range_id" class="block text-black font-bold">Rango</label>
                                    <select name="range_id" id="range_id" class="form-select mt-1 block w-full">
                                        @foreach ($ranges as $range)
                                            <!-- Verificar si el rol_id del usuario logueado es 1 para permitir solo rango por debajo -->
                                            @if (Auth::user()->rol_id == 1)
                                                <!-- Verificar si el rango actual está por debajo del rango del usuario logueado -->
                                                @if ($range->id < Auth::user()->range_id)
                                                    <option value="{{ $range->id }}"
                                                        {{ $user->range_id === $range->id ? 'selected' : '' }}>
                                                        {{ $range->name }}
                                                    </option>
                                                @endif
                                            @else
                                                <!-- Permitir todos los rangos para otros roles -->
                                                <option value="{{ $range->id }}"
                                                    {{ $user->range_id === $range->id ? 'selected' : '' }}>
                                                    {{ $range->name }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                </td>
                                @if (Auth::user()->rol_id == 2)
                                    <td>
                                        <!-- army_id -->
                                        <label for="army_id" class="block text-black font-bold">Armada</label>
                                        <select name="army_id" id="army_id" class="form-select mt-1 block w-full">
                                            @foreach ($armies as $army)
                                                <option value="{{ $army->id }}"
                                                    {{ $user->army_id === $army->id ? 'selected' : '' }}>
                                                    {{ $army->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                @else
                                    <td>
                                        <!-- army_id -->
                                        <label for="army_id" class="block text-black font-bold">Armada</label>
                                        @foreach ($armies as $army)
                                            @if ($user->army_id == $army->id)
                                                <input type="text" name="army_id" id="army_id"
                                                    value="{{ $army->name }}" class="form-input mt-1 block w-full"
                                                    readonly>
                                            @endif
                                        @endforeach
                                    </td>
                                @endif
                            </tr>
                        </table>
                        <input type="hidden" name="id" id="id" value="{{ $user->id }}">
                        
                        <x-custom.custom-button type="submit" class="md:col-span-3 w-full mt-4">
                            Actualizar
                        </x-custom.custom-button>
                    </div>
                </form>
                <div
                    class="h-auto min-h-auto bg-red-100 border border-red-400 text-red-700 px-4 py-3 ml-5 rounded relative @if ($errors->any()) block @else hidden @endif">
                    <ol>
                        @error('titulo')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('subtitulo')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('accion')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('fecha')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('descripcion')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('tipo')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('prioridad')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('objetivo')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('destination_id')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('user_id')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('status')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('foto')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('result')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('army_id')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 bottom-0">
            <!-- Capa oscura transparente -->
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative">
                @include('layouts.footer')
            </div>
        </div>
    </div>
</x-pagina-sin-nada-layout>
