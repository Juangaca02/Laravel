<x-pagina-sin-nada-layout navbarType="black">
    <div class="relative h-screen overflow-hidden">
        <figure class="w-full h-full">
            <img src="{{ asset('/storage/Images/images-Missions/missions/' . $mission->photo) }}" alt=""
                class="object-cover w-full h-full">
        </figure>
        <div class="absolute inset-0 flex flex-col items-center justify-center space-y-2">
            <div class="text-black text-4xl font-bold">
                Editar Misión
            </div>
            @if (session('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="flex space-x-5">
                <form class="bg-opacity-50 backdrop-blur-md p-4 rounded-lg shadow-md w-auto max-w-[1600px]"
                    enctype="multipart/form-data" method="post" action="{{ route('updateMission') }}">
                    <div class="w-full flex">
                        <div class="">
                            @csrf
                            @method('PATCH')
                            <table class="w-auto">
                                <tr>
                                    <td class="p-2">
                                        <!-- Título -->
                                        <label for="title" class="block text-black font-bold">
                                            Título
                                            @error('title')
                                                <span class="text-red-500 text-xl">*</span>
                                            @enderror
                                        </label>
                                        <textarea name="title" id="title" cols="22" rows="3">{{ $mission->title }}</textarea>
                                    </td>
                                    <td class="p-2">
                                        <!-- Subtítulo -->
                                        <label for="subtitle" class="block text-black font-bold">Subtítulo
                                            @error('subtitle')
                                                <span class="text-red-500 text-xl">*</span>
                                            @enderror
                                        </label>
                                        <textarea name="subtitle" id="subtitle" cols="22" rows="3">{{ $mission->subtitle }}</textarea>

                                    </td>
                                    <td class="p-2">
                                        <!-- Acción -->
                                        <label for="action" class="block text-black font-bold">Acción</label>
                                        <textarea name="action" id="action" cols="22" rows="3">{{ $mission->action }}</textarea>
                                        @error('action')
                                            <span class="text-red-500 text-xl">*</span>
                                        @enderror
                                    </td>
                                    <td class="p-2">
                                        <!-- Objetivo -->
                                        <label for="objective" class="block text-black font-bold">Objetivo
                                            @error('objective')
                                                <span class="text-red-500 text-xl">*</span>
                                            @enderror
                                        </label>
                                        <textarea name="objective" id="objective" cols="22" rows="3">{{ $mission->objective }}</textarea>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2">
                                        <!-- Tipo -->
                                        <label for="type" class="block text-black font-bold">
                                            Tipo de Mision
                                            @error('type')
                                                <span class="text-red-500 text-xl">*</span>
                                            @enderror
                                        </label>
                                        <select name="type" id="type">
                                            <option value="Reconocimiento"
                                                {{ $mission->type == 'Reconocimiento' ? 'selected' : '' }}>
                                                Reconocimiento
                                            </option>
                                            <option value="Patrulla"
                                                {{ $mission->type == 'Patrulla' ? 'selected' : '' }}>
                                                Patrulla
                                            </option>
                                            <option value="Combate" {{ $mission->type == 'Combate' ? 'selected' : '' }}>
                                                Combate
                                            </option>
                                            <option value="Guerra de Minas"
                                                {{ $mission->type == 'Guerra de Minas' ? 'selected' : '' }}>
                                                Guerra de Minas
                                            </option>
                                            <option value="Apoyo" {{ $mission->type == 'Apoyo' ? 'selected' : '' }}>
                                                Apoyo
                                            </option>
                                            <option value="Defensa"
                                                {{ $mission->type == 'Defensa' ? 'selected' : '' }}>
                                                Defensa
                                            </option>
                                            <option value="Rescate"
                                                {{ $mission->type == 'Rescate' ? 'selected' : '' }}>
                                                Rescate
                                            </option>
                                            <option value="Reparación"
                                                {{ $mission->type == 'Reparación' ? 'selected' : '' }}>
                                                Reparación
                                            </option>
                                            <option value="Entrenamiento"
                                                {{ $mission->type == 'Entrenamiento' ? 'selected' : '' }}>
                                                Entrenamiento
                                            </option>
                                            <option
                                                value="Humanitaria"{{ $mission->type == 'Humanitaria' ? 'selected' : '' }}>
                                                Humanitaria
                                            </option>
                                            @switch((Auth::user()->army_id))
                                                {{-- Carousel Tierra --}}
                                                @case(2)
                                                    <option
                                                        value="Seguridad terrestre"{{ $mission->type == 'Seguridad terrestre' ? 'selected' : '' }}>
                                                        Seguridad terrestre
                                                    </option>
                                                @break

                                                {{-- Carousel Naval --}}
                                                @case(3)
                                                    <option
                                                        value="Seguridad Marítima"{{ $mission->type == 'Seguridad Marítima' ? 'selected' : '' }}>
                                                        Seguridad Marítima
                                                    </option>
                                                @break

                                                {{-- Carousel Aire --}}
                                                @case(4)
                                                    <option
                                                        value="Seguridad Aerea"{{ $mission->type == 'Seguridad Aerea' ? 'selected' : '' }}>
                                                        Seguridad Aerea
                                                    </option>
                                                @break
                                            @endswitch
                                            <option value="Otros" {{ $mission->type == 'Otros' ? 'selected' : '' }}>
                                                Otros
                                            </option>
                                        </select>
                                    </td>
                                    <td class="p-2">
                                        <!-- Prioridad -->
                                        <label for="priority" class="block text-black font-bold">Prioridad
                                            @error('priority')
                                                <span class="text-red-500 text-xl">*</span>
                                            @enderror
                                        </label>
                                        <input type="text" name="priority" id="priority"
                                            value="{{ $mission->priority }}" class="form-input mt-1 block">

                                    </td>
                                    <td class="p-2">
                                        <!-- Resultado -->
                                        <label for="result" class="block text-black font-bold">Resultado
                                            @error('result')
                                                <span class="text-red-500 text-xl">*</span>
                                            @enderror
                                        </label>
                                        <select name="result" id="result">
                                            <option value="En Espera de ejecuion"
                                                {{ $mission->type == 'En Espera de ejecuion' ? 'selected' : '' }}>
                                                En Espera de ejecuion
                                            </option>
                                            <option value="En progreso"
                                                {{ $mission->type == 'En progreso' ? 'selected' : '' }}>
                                                En progreso
                                            </option>
                                            <option value="Concluida"
                                                {{ $mission->type == 'Concluida' ? 'selected' : '' }}>
                                                Concluida
                                            </option>
                                        </select>
                                    </td>
                                    <td class="p-2">
                                        <!-- Estado -->
                                        <label for="status" class="block text-black font-bold">Estado @error('status')
                                                <span class="text-red-500 text-xl">*</span>
                                            @enderror
                                        </label>
                                        <select name="status" id="status">
                                            <option value="En Espera de ejecuion"
                                                {{ $mission->type == 'En Espera de ejecuion' ? 'selected' : '' }}>
                                                En Espera de ejecuion
                                            </option>
                                            <option value="En progreso"
                                                {{ $mission->type == 'En progreso' ? 'selected' : '' }}>
                                                En progreso
                                            </option>
                                            <option value="Concluida"
                                                {{ $mission->type == 'Concluida' ? 'selected' : '' }}>
                                                Concluida
                                            </option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-2">
                                        <!-- Ejército -->
                                        <label for="army_id" class="block text-black font-bold">Ejército
                                            @error('army_id')
                                                <span class="text-red-500 text-xl">*</span>
                                            @enderror
                                        </label>
                                        <select name="army_id" id="army_id" class="form-select mt-1 block">
                                            @foreach ($armies as $army)
                                                <option value="{{ $army->id }}"
                                                    {{ $mission->army_id === $army->id ? 'selected' : '' }}>
                                                    {{ $army->name }}
                                                </option>
                                            @endforeach
                                        </select>

                                    </td>
                                    <td class="p-2">
                                        <!-- Destino -->
                                        <label for="destination_id" class="block text-black font-bold">Destino
                                            @error('destination_id')
                                                <span class="text-red-500 text-xl">*</span>
                                            @enderror
                                        </label>
                                        <select name="destination_id" id="destination_id"
                                            class="form-select mt-1 block">
                                            @foreach ($destinations as $destination)
                                                <option value="{{ $destination->id }}"
                                                    {{ $mission->destination_id === $destination->id ? 'selected' : '' }}>
                                                    {{ $destination->name }}
                                                </option>
                                            @endforeach
                                        </select>

                                    </td>
                                    <td class="p-2">
                                        <!-- Usuario -->
                                        <label for="user_id" class="block text-black font-bold">Persona a Cargo
                                            @error('user_id')
                                                <span class="text-red-500 text-xl">*</span>
                                            @enderror
                                        </label>
                                        <select name="user_id" id="user_id" class="form-select mt-1 block">
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}"
                                                    {{ $mission->user_id === $user->id ? 'selected' : '' }}>
                                                    {{ $user->name }}
                                                </option>
                                            @endforeach
                                        </select>

                                    </td>
                                    <td class="p-2">
                                        <!-- Fecha -->
                                        <label for="date" class="block text-black font-bold">Fecha @error('date')
                                                <span class="text-red-500 text-xl">*</span>
                                            @enderror
                                        </label>
                                        <input type="date" name="date" id="date"
                                            value="{{ $mission->date }}" class="form-input mt-1 block">

                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="p-2">
                            <!-- Descripción -->
                            <label for="description" class="block text-black font-bold">Descripción
                                @error('description')
                                    <span class="text-red-500 text-xl">*</span>
                                @enderror
                            </label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-input mt-1 block">{{ $mission->description }}</textarea>
                        </div>
                        <div class="p-2">
                            <!-- Foto -->
                            <label for="photo" class="block text-black font-bold mt-4 min-w-[300px]">Foto
                                @if (!$mission->photo)
                                    @error('photo')
                                        <span class="text-red-500 text-xl">*</span>
                                    @enderror
                                @endif
                            </label>
                            <!-- Input para seleccionar la foto -->
                            <input type="file" name="photo" id="photo" class="form-input mt-1 block"
                                @if (!$mission->photo) required @endif onchange="previewImage(event)">
                            <!-- Vista previa de la imagen -->
                            <img id="missionImage"
                                src="{{ $mission->photo ? asset('storage/images/images-Missions/missions/' . $mission->photo) : '#' }}"
                                alt="Foto de la misión" class="w-auto h-auto object-cover mt-2">
                        </div>
                    </div>
                    <x-custom.custom-button type="submit" class="md:col-span-3 w-full mt-4">
                        Actualizar
                    </x-custom.custom-button>
                    <input type="hidden" name="id" id="id" value="{{ $mission->id }}">
                </form>
                <div
                    class="h-auto min-h-auto bg-red-100 border border-red-400 text-red-700 px-4 py-3 ml-5 rounded relative @if ($errors->any()) block @else hidden @endif">
                    <ol>
                        @error('title')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('subtitle')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('description')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('date')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('status')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('type')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('priority')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('objective')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('action')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('result')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('photo')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('army_id')
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
