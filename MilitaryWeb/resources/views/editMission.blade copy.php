<x-pagina-sin-nada-layout navbarType="black">
    <div class="relative h-screen overflow-hidden">
        <figure class="w-full h-full">
            <img src="{{ asset('/storage/Images/ImagesRelleno/EditUser.jpg') }}" alt=""
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
                <form class="bg-opacity-50 backdrop-blur-md p-8 rounded-lg shadow-md w-full max-w-4xl "
                    enctype="multipart/form-data" method="post">
                    <div class="w-full flex">
                        <div class="">
                            @csrf
                            @method('PATCH')
                            <table  style="width: 100%;">
                                <tr>
                                    <td style="width: 33%;">
                                        <!-- Título -->
                                        <label for="title" class="block text-black font-bold">Título</label>
                                        <input type="text" name="title" id="title"
                                            value="{{ $mission->title }}" class="form-input mt-1 block ">
                                    </td>
                                    <td>
                                        <!-- Subtítulo -->
                                        <label for="subtitle" class="block text-black font-bold">Subtítulo</label>
                                        <input type="text" name="subtitle" id="subtitle"
                                            value="{{ $mission->subtitle }}" class="form-input mt-1 block ">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- Tipo -->
                                        <label for="type" class="block text-black font-bold">Tipo</label>
                                        <input type="text" name="type" id="type" value="{{ $mission->type }}"
                                            class="form-input mt-1 block ">
                                    </td>
                                    <td>
                                        <!-- Prioridad -->
                                        <label for="priority" class="block text-black font-bold">Prioridad</label>
                                        <input type="text" name="priority" id="priority"
                                            value="{{ $mission->priority }}" class="form-input mt-1 block ">
                                    </td>
                                    
                                </tr>
                                <tr>
                                    <td>
                                        <!-- Fecha -->
                                        <label for="date" class="block text-black font-bold">Fecha</label>
                                        <input type="date" name="date" id="date" value="{{ $mission->date }}"
                                            class="form-input mt-1 block ">
                                    </td>
                                    <td>
                                        <!-- Resultado -->
                                        <label for="result" class="block text-black font-bold">Resultado</label>
                                        <input type="text" name="result" id="result"
                                            value="{{ $mission->result }}" class="form-input mt-1 block ">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- Acción -->
                                        <label for="action" class="block text-black font-bold">Acción</label>
                                        <textarea name="action" id="action" cols="22" rows="4">{{ $mission->action }}</textarea>
                                        {{-- <input type="text" name="action" id="action"
                                            value="{{ $mission->action }}" class="form-input mt-1 block "> --}}
                                    </td>
                                    <td>
                                        <!-- Objetivo -->
                                        <label for="objective" class="block text-black font-bold">Objetivo</label>
                                        <textarea name="objective" id="objective" cols="22" rows="4"></textarea>
                                        {{-- <input type="text" name="objective" id="objective"
                                            value="{{ $mission->objective }}" class="form-input mt-1 block "> --}}
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- Destino -->
                                        <label for="destination_id" class="block text-black font-bold">Destino</label>
                                        <select name="destination_id" id="destination_id"
                                            class="form-select mt-1 block ">
                                            @foreach ($destinations as $destination)
                                                <option value="{{ $destination->id }}"
                                                    {{ $mission->destination_id === $destination->id ? 'selected' : '' }}>
                                                    {{ $destination->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <!-- Usuario -->
                                        <label for="user_id" class="block text-black font-bold">Persona a Cargo</label>
                                        <select name="user_id" id="user_id" class="form-select mt-1 block ">
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}"
                                                    {{ $mission->user_id === $user->id ? 'selected' : '' }}>
                                                    {{ $user->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <!-- Ejército -->
                                        <label for="army_id" class="block text-black font-bold">Ejército</label>
                                        <select name="army_id" id="army_id" class="form-select mt-1 block ">
                                            @foreach ($armies as $army)
                                                <option value="{{ $army->id }}"
                                                    {{ $mission->army_id === $army->id ? 'selected' : '' }}>
                                                    {{ $army->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <!-- Estado -->
                                        <label for="status" class="block text-black font-bold">Estado</label>
                                        <input type="text" name="status" id="status"
                                            value="{{ $mission->status }}" class="form-input mt-1 block ">
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="">
                            <!-- Descripción -->
                            <label for="description" class="block text-black font-bold">Descripción</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-input mt-1 block ">{{ $mission->description }}</textarea>
                        </div>
                        <div>
                            <!-- Foto -->
                            <label for="photo" class="block text-black font-bold mt-4 min-w-[300px]">Foto</label>
                            <input type="file" name="photo" id="photo"
                                class="form-input mt-1 block w-full">
                            @if ($mission->photo)
                                <img src="{{ asset('storage/images/imagesRelleno/' . $mission->photo) }}"
                                    alt="Foto de la misión" class="w-full h-auto object-cover mt-2">
                            @endif
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
