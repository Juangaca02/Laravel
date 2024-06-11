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
                    enctype="multipart/form-data" method="post" action="{{ route('updateUser') }}">
                    <!-- <form class="bg-opacity-50 backdrop-blur-md p-8 rounded-lg shadow-md w-full max-w-4xl flex" enctype="multipart/form-datas" wire:submit.prevent="submit">    -->
                    <div class="w-full">
                        @csrf
                        @method('PATCH')
                        <table>
                            <tr>
                                <td>
                                    <!-- Nombre -->
                                    <label for="nombre" class="block text-black font-bold">
                                        Nombre
                                        @error('nombre')
                                            <span class="text-red-500 text-xl">*</span>
                                        @enderror
                                    </label>
                                    <input type="text" name="nombre" id="nombre" value="{{ $user->name }}"
                                        class="form-input mt-1 block w-full">
                                </td>
                                <td>
                                    <!-- Apellidos -->
                                    <label for="apellidos" class="block text-black font-bold">
                                        Apellidos
                                        @error('apellidos')
                                            <span class="text-red-500 text-xl">*</span>
                                        @enderror
                                    </label>
                                    <input type="text" name="apellidos" id="apellidos" value="{{ $user->surname }}"
                                        class="form-input mt-1 block w-full">
                                </td>
                                <td>
                                    <!-- Dni -->
                                    <label for="DNI" class="block text-black font-bold">
                                        DNI
                                        @error('DNI')
                                            <span class="text-red-500 text-xl">*</span>
                                        @enderror
                                    </label>
                                    <input type="text" name="DNI" id="DNI" value="{{ $user->DNI }}"
                                        class="form-input mt-1 block w-full">
                                </td>
                                <td>
                                    <!-- Phone -->
                                    <label for="telefono" class="block text-black font-bold">
                                        Telefono
                                        @error('telefono')
                                            <span class="text-red-500 text-xl">*</span>
                                        @enderror
                                    </label>
                                    <input type="text" name="telefono" id="telefono" value="{{ $user->phone }}"
                                        class="form-input mt-1 block w-full">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <!-- Town -->
                                    <label for="ciudad" class="block text-black font-bold">
                                        Ciudad
                                        @error('ciudad')
                                            <span class="text-red-500 text-xl">*</span>
                                        @enderror
                                    </label>
                                    <input type="text" name="ciudad" id="ciudad" value="{{ $user->town }}"
                                        class="form-input mt-1 block w-full">
                                </td>
                                <td><!-- province -->
                                    <label for="provincia" class="block text-black font-bold">
                                        Provincia
                                        @error('provincia')
                                            <span class="text-red-500 text-xl">*</span>
                                        @enderror
                                    </label>
                                    <input type="text" name="provincia" id="provincia" value="{{ $user->province }}"
                                        class="form-input mt-1 block w-full">
                                </td>
                                <td>
                                    <!-- Fecha de Nacimiento -->
                                    <label for="Fecha_de_Nacimiento" class="block text-black font-bold">
                                        Fecha de Nacimiento
                                        @error('Fecha_de_Nacimiento')
                                            <span class="text-red-500 text-xl">*</span>
                                        @enderror
                                    </label>
                                    <input type="date" name="Fecha_de_Nacimiento" id="Fecha_de_Nacimiento"
                                        value="{{ $user->birthdate }}" class="form-input mt-1 block w-full">
                                </td>
                                <td>
                                    <!-- Entry_army_date -->
                                    <label for="fecha_de_ingreso" class="block text-black font-bold">
                                        Fecha de Ingreso
                                        @error('fecha_de_ingreso')
                                            <span class="text-red-500 text-xl">*</span>
                                        @enderror
                                    </label>
                                    <input type="date" name="fecha_de_ingreso" id="fecha_de_ingreso"
                                        value="{{ $user->entry_army_date }}" class="form-input mt-1 block w-full">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <!-- Sexo -->
                                    <label for="sexo" class="block text-black font-bold">
                                        Sexo
                                        @error('sexo')
                                            <span class="text-red-500 text-xl">*</span>
                                        @enderror
                                    </label>
                                    <select name="sexo" id="sexo" class="form-select mt-1 block w-full">
                                        <option value="H" {{ $user->sex === 'H' ? 'selected' : '' }}>Hombre
                                        </option>
                                        <option value="M" {{ $user->sex === 'M' ? 'selected' : '' }}>Mujer
                                        </option>
                                    </select>
                                </td>
                                <td>
                                    <!-- range_id -->
                                    <label for="range_id" class="block text-black font-bold">
                                        Rango
                                        @error('range_id')
                                            <span class="text-red-500 text-xl">*</span>
                                        @enderror
                                    </label>
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
                                        <label for="army_id" class="block text-black font-bold">
                                            Armada
                                            @error('army_id')
                                                <span class="text-red-500 text-xl">*</span>
                                            @enderror
                                        </label>
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
                                        <label for="army_id" class="block text-black font-bold">
                                            Armada
                                            @error('army_id')
                                                <span class="text-red-500 text-xl">*</span>
                                            @enderror
                                        </label>
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
                        @error('nombre')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('apellidos')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('DNI')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('telefono')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('ciudad')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('provincia')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('Fecha_de_Nacimiento')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('fecha_de_ingreso')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('sexo')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('range_id')
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
        {{-- <div class="absolute inset-x-0 bottom-0">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative">
                @include('layouts.footer')
            </div>
        </div> --}}
    </div>
</x-pagina-sin-nada-layout>
