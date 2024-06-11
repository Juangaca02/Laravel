<x-pagina-sin-nada-layout>
    <div class="relative h-screen overflow-hidden">
        <figure class="w-full h-full">
            <img src="{{ asset('/storage/Images/images-Destinations/createDestinations.jpg') }}" alt=""
                class="object-cover w-full h-full">
        </figure>
        <div class="absolute inset-0 flex flex-col items-center justify-center">
            <div class="text-black text-4xl font-bold">
                Crear Destino
            </div>
            @if (session('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="flex space-x-5">
                <form class="bg-opacity-50 backdrop-blur-md p-8 rounded-lg shadow-md w-full max-w-4xl flex"
                    enctype="multipart/form-data" method="post" action="{{ route('storeDestination') }}">
                    <div class="w-full">
                        @csrf
                        @method('POST')
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label for="nombre">
                                    Nombre
                                    @error('nombre')
                                        <span class="text-red-500 text-xl">*</span>
                                    @enderror
                                </label>
                                <input value="{{ old('nombre') }}" type="text" name="nombre" id="nombre"
                                    class="w-full mt-1 p-2 rounded">
                            </div>
                            <div>
                                <label for="identificardor_pais">
                                    País
                                    @error('identificardor_pais')
                                        <span class="text-red-500 text-xl">*</span>
                                    @enderror
                                </label>
                                <select name="identificardor_pais" id="identificardor_pais"
                                    class="w-full mt-1 p-2 rounded">
                                    <option value=""></option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}"
                                            {{ old('identificardor_pais') == $country->id ? 'selected' : '' }}>
                                            {{ $country->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="md:col-span-3">
                                <label for="descripcion">
                                    Descripción
                                    @error('descripcion')
                                        <span class="text-red-500 text-xl">*</span>
                                    @enderror
                                </label>
                                <textarea name="descripcion" id="descripcion" cols="1" rows="3" class="w-full mt-1 p-2 rounded">{{ old('descripcion') }}</textarea>
                            </div>
                            <x-custom.custom-button type="submit" class="md:col-span-3 w-full">
                                Guardar
                            </x-custom.custom-button>
                        </div>
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
                        @error('identificardor_pais')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </ol>
                    <ol>
                        @error('descripcion')
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
