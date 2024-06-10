<x-pagina-sin-nada-layout navbarType="black">
    <div class="relative h-screen overflow-hidden">
        <figure class="w-full h-full">
            <img src="{{ asset('/storage/Images/images-Missions/createMission.png') }}" alt=""
                class="object-cover w-full h-full">
        </figure>
        <div class="absolute inset-0 flex flex-col items-center justify-center">
            <div class="text-black text-4xl font-bold">
                Crear Mision
            </div>
            @if (session('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="flex space-x-5">
                <form class="bg-opacity-50 backdrop-blur-md p-8 rounded-lg shadow-md w-full max-w-4xl flex"
                    enctype="multipart/form-data" method="post" action="{{ route('storeMission') }}">
                    {{-- <form class="bg-opacity-50 backdrop-blur-md p-8 rounded-lg shadow-md w-full max-w-4xl flex" enctype="multipart/form-datas" wire:submit.prevent="submit">    --}}
                    <div class="w-full">
                        @csrf
                        @method('POST')
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label for="titulo" class="text-xl font-bold">
                                    Título
                                    @error('titulo')
                                        <span class="text-red-500 text-xl">*</span>
                                    @enderror
                                </label>
                                <input value="{{ old('titulo') }}" type="text" name="titulo" id="titulo"
                                    class="w-full mt-1 p-2 rounded">
                                {{-- @error('titulo')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror --}}
                            </div>
                            <div>
                                <label for="subtitulo" class="text-xl font-bold">
                                    Subtítulo
                                    @error('subtitulo')
                                        <span class="text-red-500 text-xl">*</span>
                                    @enderror
                                </label>
                                <input value="{{ old('subtitulo') }} " type="text" name="subtitulo" id="subtitulo"
                                    class="w-full mt-1 p-2 rounded">
                                {{-- @error('subtitulo')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror --}}
                            </div>
                            <div>
                                <label for="fecha" class="text-xl font-bold">
                                    Fecha
                                    @error('fecha')
                                        <span class="text-red-500 text-xl">*</span>
                                    @enderror
                                </label>
                                <input value="{{ old('fecha') }}" type="date" name="fecha" id="fecha"
                                    class="w-full mt-1 p-2 rounded">
                            </div>
                            <div class="md:col-span-3">
                                <label for="descripcion" class="text-xl font-bold">
                                    Descripción
                                    @error('descripcion')
                                        <span class="text-red-500 text-xl">*</span>
                                    @enderror
                                </label>
                                <textarea name="descripcion" id="descripcion" cols="1" rows="3" class="w-full mt-1 p-2 rounded">{{ old('descripcion') }}</textarea>
                            </div>
                            <div>
                                <label for="accion" class="text-xl font-bold">
                                    Acción
                                    @error('accion')
                                        <span class="text-red-500 text-xl">*</span>
                                    @enderror
                                </label>
                                <input value="{{ old('accion') }}" type="text" name="accion" id="accion"
                                    class="w-full mt-1 p-2 rounded">
                            </div>
                            <div>
                                <label for="tipo" class="text-xl font-bold">
                                    Tipo de misión
                                    @error('tipo')
                                        <span class="text-red-500 text-xl">*</span>
                                    @enderror
                                </label>
                                <select name="tipo" id="tipo" class="w-full mt-1 p-2 rounded">
                                    <option value=""></option>
                                    <option value="Reconocimiento"
                                        {{ old('tipo') == 'Reconocimiento' ? 'selected' : '' }}>
                                        Reconocimiento
                                    </option>
                                    <option value="Patrulla" {{ old('tipo') == 'Patrulla' ? 'selected' : '' }}>
                                        Patrulla
                                    </option>
                                    <option value="Combate" {{ old('tipo') == 'Combate' ? 'selected' : '' }}>
                                        Combate
                                    </option>
                                    <option value="Guerra de Minas"
                                        {{ old('tipo') == 'Guerra de Minas' ? 'selected' : '' }}>
                                        Guerra de Minas
                                    </option>
                                    <option value="Apoyo" {{ old('tipo') == 'Apoyo' ? 'selected' : '' }}>
                                        Apoyo
                                    </option>
                                    <option value="Defensa" {{ old('tipo') == 'Defensa' ? 'selected' : '' }}>
                                        Defensa
                                    </option>
                                    <option value="Rescate" {{ old('tipo') == 'Rescate' ? 'selected' : '' }}>
                                        Rescate
                                    </option>
                                    <option value="Reparación" {{ old('tipo') == 'Reparación' ? 'selected' : '' }}>
                                        Reparación
                                    </option>
                                    <option value="Entrenamiento"
                                        {{ old('tipo') == 'Entrenamiento' ? 'selected' : '' }}>
                                        Entrenamiento
                                    </option>
                                    <option value="Humanitaria"{{ old('tipo') == 'Humanitaria' ? 'selected' : '' }}>
                                        Humanitaria
                                    </option>
                                    @switch((Auth::user()->army_id))
                                        {{-- Carousel Tierra --}}
                                        @case(2)
                                            <option
                                                value="Seguridad terrestre"{{ old('tipo') == 'Seguridad terrestre' ? 'selected' : '' }}>
                                                Seguridad terrestre
                                            </option>
                                        @break

                                        {{-- Carousel Naval --}}
                                        @case(3)
                                            <option
                                                value="Seguridad Marítima"{{ old('tipo') == 'Seguridad Marítima' ? 'selected' : '' }}>
                                                Seguridad Marítima
                                            </option>
                                        @break

                                        {{-- Carousel Aire --}}
                                        @case(4)
                                            <option
                                                value="Seguridad Aerea"{{ old('tipo') == 'Seguridad Aerea' ? 'selected' : '' }}>
                                                Seguridad Aerea
                                            </option>
                                        @break
                                    @endswitch
                                    <option value="Otros" {{ old('tipo') == 'Otros' ? 'selected' : '' }}>
                                        Otros
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label for="prioridad" class="text-xl font-bold">
                                    Prioridad
                                    @error('prioridad')
                                        <span class="text-red-500 text-xl">*</span>
                                    @enderror
                                </label>
                                <select name="prioridad" id="prioridad" class="w-full mt-1 p-2 rounded">
                                    <option value=""></option>
                                    <option value="Baja" {{ old('prioridad') == 'Baja' ? 'selected' : '' }}>
                                        Baja
                                    </option>
                                    <option value="Media" {{ old('prioridad') == 'Media' ? 'selected' : '' }}>
                                        Media
                                    </option>
                                    <option value="Alta" {{ old('prioridad') == 'Alta' ? 'selected' : '' }}>
                                        Alta
                                    </option>
                                </select>
                            </div>
                            <div>
                                <label for="objetivo" class="text-xl font-bold">
                                    Objetivo
                                    @error('objetivo')
                                        <span class="text-red-500 text-xl">*</span>
                                    @enderror
                                </label>
                                <input value="{{ old('objetivo') }}" type="text" name="objetivo" id="objetivo"
                                    class="w-full mt-1 p-2 rounded">
                            </div>
                            <div>
                                <label for="destination_id" class="text-xl font-bold">
                                    Destino
                                    @error('destination_id')
                                        <span class="text-red-500 text-xl">*</span>
                                    @enderror
                                </label>
                                <select name="destination_id" id="destination_id" class="w-full mt-1 p-2 rounded">
                                    <option value=""></option>
                                    @foreach ($destination as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('destination_id') == $item->id ? 'selected' : '' }}>
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="user_id" class="text-xl font-bold">
                                    Persona a cargo
                                    @error('user_id')
                                        <span class="text-red-500 text-xl">*</span>
                                    @enderror
                                </label>
                                <select name="user_id" id="user_id" class="w-full mt-1 p-2 rounded">
                                    <option value=""></option>
                                    {{-- Verificar si hay usuarios en el rango --}}
                                    @if ($usersInRange->isEmpty())
                                        {{-- Si no hay usuarios en el rango, mostrar el usuario actualmente autenticado --}}
                                        <option value="{{ auth()->id() }}">{{ auth()->user()->name }}
                                        </option>
                                    @else
                                        {{-- Mostrar las opciones de los usuarios en el rango --}}
                                        @foreach ($usersInRange as $item)
                                            <option value="{{ $item->id }}"
                                                {{ old('user_id') == $item->id ? 'selected' : '' }}>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <input type="text" name="estado" id="estado" value="En espera de ejecución"
                                hidden>
                            <input type="text" name="resultado" id="resultado" value="En espera de ejecución"
                                hidden>
                            <input type="number" name="army_id" id="army_id" value="{{ Auth::user()->army_id }}"
                                hidden>
                            <x-custom.custom-button type="submit" class="md:col-span-3 w-full">
                                Guardar
                            </x-custom.custom-button>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center m-6">
                        <label for="foto" class="text-xl font-bold">
                            Imagen
                            @error('foto')
                                <span class="text-red-500 text-xl">*</span>
                            @enderror
                        </label>
                        <img id="imagePreview" src="#" alt="Vista previa de la imagen"
                            class="hidden w-full max-w-xs h-auto mt-1 p-2 rounded border border-gray-300">
                        <input value="{{ old('foto') }}" type="file" name="foto" id="foto"
                            class="w-full mt-1 p-2 rounded" onchange="previewImage(event, 'imagePreview')">
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
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative">
                @include('layouts.footer')
            </div>
        </div>
    </div>
</x-pagina-sin-nada-layout>
