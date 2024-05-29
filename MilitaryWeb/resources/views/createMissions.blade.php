{{-- <x-pagina-sin-nada-layout navbarType="black">
    <figure class="">
        <img src="{{ asset('/storage/Images/ImagesRelleno/createMission.png') }}" alt="">
    </figure>
    <form class="" action="" method="POST">
        @csrf
        @method('POST')
        <table>
            <tr>
                <td>
                    <label for="title">Titulo</label>
                    <input type="text" name="title" id="title">
                </td>
                <td>
                    <label for="description">Descripción</label>
                    <textarea name="description" id="description" cols="5" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="date">Fecha</label>
                    <input type="date" name="date" id="date">
                </td>
                <td>
                    <label for="subtitle">Subtitulo</label>
                    <input type="subtitle" name="subtitle" id="subtitle">
                </td>
            </tr>
        </table>
    </form>
</x-pagina-sin-nada-layout> --}}

<x-pagina-sin-nada-layout navbarType="black">
    <div class="relative h-screen overflow-hidden">
        <figure class="w-full h-full">
            <img src="{{ asset('/storage/Images/ImagesRelleno/createMission.png') }}" alt=""
                class="object-cover w-full h-full">
        </figure>
        <div class="absolute inset-0 flex items-center justify-center">
            <form class="bg-opacity-50 backdrop-blur-md p-8 rounded-lg shadow-md w-full max-w-4xl">
                @csrf
                @method('POST')
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div>
                        <label for="title">Título</label>
                        <input type="text" name="title" id="title" class="w-full mt-1 p-2 rounded">
                    </div>
                    <div>
                        <label for="subtitle">Subtítulo</label>
                        <input type="text" name="subtitle" id="subtitle" class="w-full mt-1 p-2 rounded">
                    </div>
                    <div>
                        <label for="date">Fecha</label>
                        <input type="date" name="date" id="date" class="w-full mt-1 p-2 rounded">
                    </div>
                    <div class="md:col-span-3">
                        <label for="description">Descripción</label>
                        <textarea name="description" id="description" cols="1" rows="3" class="w-full mt-1 p-2 rounded"></textarea>
                    </div>
                    <div>
                        <label for="action">Acción</label>
                        <input type="text" name="action" id="action" class="w-full mt-1 p-2 rounded">
                    </div>
                    <div>
                        <label for="type">Tipo de misión</label>
                        <select name="type" id="type" class="w-full mt-1 p-2 rounded">
                            <option value=""></option>
                            <option value="Reconocimiento">Reconocimiento</option>
                            <option value="Patrulla">Patrulla</option>
                        </select>
                    </div>
                    <div>
                        <label for="priority">Prioridad</label>
                        <select name="priority" id="priority" class="w-full mt-1 p-2 rounded">
                            <option value=""></option>
                            <option value="Alta">Alta</option>
                            <option value="Media">Media</option>
                            <option value="Baja">Baja</option>
                        </select>
                    </div>
                    <div>
                        <label for="objective">Objetivo</label>
                        <input type="text" name="objective" id="objective" class="w-full mt-1 p-2 rounded">
                    </div>
                    <div>
                        <label for="destination_id">Destino</label>
                        <select name="destination_id" id="destination_id" class="w-full mt-1 p-2 rounded">
                            <option value=""></option>
                            @foreach ($destination as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex items-end">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full"
                            type="submit">
                            Crear Destino
                        </button>
                    </div>
                    <div class="md:col-span-3">
                        <label for="user_id">Persona a cargo</label>
                        <select name="user_id" id="user_id" class="w-full mt-1 p-2 rounded">
                            <option value=""></option>
                            @foreach ($usersInRange as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="text" name="status" id="status" value="En espera de ejecución" hidden>
                    <input type="text" name="result" id="result" value="En espera de ejecución" hidden>
                </div>
            </form>
        </div>
        <div class="absolute inset-x-0 bottom-0">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative">
                @include('layouts.footer')
            </div>
        </div>
    </div>


</x-pagina-sin-nada-layout>
