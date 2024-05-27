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
    <figure class="relative">
        <img src="{{ asset('/storage/Images/ImagesRelleno/createMission.png') }}" alt="">
        <div class="absolute top-[300px] inset-x-0 flex items-center justify-center ">
            <form class="bg-opacity-50 backdrop-blur-md p-8 rounded-lg shadow-md">
                @csrf
                @method('POST')
                <table>
                    <tr>
                        <td>
                            <label for="title">Titulo</label>
                            <input type="text" name="title" id="title">
                        </td>
                        <td>
                            <label for="subtitle">Subtitulo</label>
                            <input type="text" name="subtitle" id="subtitle">
                        </td>
                        <td>
                            <label for="description">Descripción</label>
                            <textarea name="description" id="description" cols="1" rows="1"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="date">Fecha</label>
                            <input type="date" name="date" id="date">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="action">Accion</label>
                            <input type="text" name="action" id="action">
                        </td>
                        <td>
                            <label for="type">Tipo de misión</label>
                            <select name="type" id="type">
                                <option value=""></option>
                                <option value="Reconocimiento">Reconocimiento</option>
                                <option value="Patrulla">Patrulla</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="priority">Prioridad</label>
                            <select name="priority" id="priority">
                                <option value=""></option>
                                <option value="Alta">Alta</option>
                                <option value="Media">Media</option>
                                <option value="Baja">Baja</option>
                            </select>
                        </td>
                        <td>
                            <label for="objective">Objetivo</label>
                            <input type="text" name="objective" id="objective">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="status" hidden>Estado</label>
                            <input type="text" name="status" id="status" value="En espera de ejecución" hidden>
                        </td>
                        <td>
                            <label for="result" hidden>Resultado</label>
                            <input type="text" name="result" id="result" value="En espera de ejecución" hidden>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="destination_id">Destino</label>
                            <select name="destination_id" id="destination_id">
                                <option value=""></option>
                                @foreach ($destination as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                                type="submit">
                                Crear Destino
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="user_id">Persona a cargo</label>
                            <select name="user_id" id="user_id">
                                <option value=""></option>
                                @foreach ($usersInRange as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </figure>
</x-pagina-sin-nada-layout>
