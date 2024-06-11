<x-pagina-sin-nada-layout navbarType="black">
    <div class="relative h-screen overflow-hidden">
        <figure class="w-full h-full">
            <img src="{{ asset('/storage/Images/images-Destinations/editDestinations.jpg') }}" alt=""
                class="object-cover w-full h-full">
        </figure>
        <div class="absolute inset-0 flex flex-col items-center justify-center space-y-2">
            <div class="text-black text-4xl font-bold">
                Editar Destino
            </div>
            @if (session('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="flex space-x-5">
                <form class="bg-opacity-50 backdrop-blur-md p-4 rounded-lg shadow-md w-auto max-w-[1600px]"
                    enctype="multipart/form-data" method="post" action="{{ route('updateDestination') }}">
                    <div class="w-full flex">
                        <div class="flex flex-col">
                            @csrf
                            @method('PATCH')
                            <div class="flex items-center p-2">
                                <!-- Nombre -->
                                <label for="nombre" class="block text-black font-bold w-32">
                                    Nombre
                                    @error('nombre')
                                        <span class="text-red-500 text-xl">*</span>
                                    @enderror
                                </label>
                                <input type="text" name="nombre" id="nombre" value="{{ $destination->name }}"
                                    class="form-input mt-1 block">
                            </div>
                            <div class="flex items-center p-2">
                                <!-- País -->
                                <label for="identificardor_pais" class="block text-black font-bold w-32">
                                    País
                                    @error('identificardor_pais')
                                        <span class="text-red-500 text-xl">*</span>
                                    @enderror
                                </label>
                                <select name="identificardor_pais" id="identificardor_pais"
                                    class="form-select mt-1 block">
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}"
                                            {{ $destination->country_id === $country->id ? 'selected' : '' }}>
                                            {{ $country->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex items-center p-2">
                                <!-- Descripción -->
                                <label for="descripcion" class="block text-black font-bold w-32">
                                    Descripción
                                    @error('descripcion')
                                        <span class="text-red-500 text-xl">*</span>
                                    @enderror
                                </label>
                                <textarea name="descripcion" id="descripcion" cols="30" rows="5" class="form-input mt-1 block">{{ $destination->description }}</textarea>
                            </div>
                        </div>
                    </div>
                    <x-custom.custom-button type="submit" class="md:col-span-3 w-full mt-4">
                        Actualizar
                    </x-custom.custom-button>
                    <input type="hidden" name="id" id="id" value="{{ $destination->id }}">
                </form>
                <div
                    class="h-auto min-h-auto bg-red-100 border border-red-400 text-red-700 px-4 py-3 ml-5 rounded relative @if ($errors->any()) block @else hidden @endif">
                    <ol>
                        @error('nombre')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('descripcion')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('identificardor_pais')
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
