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
                            <label for="description">Descripción</label>
                            <textarea name="description" id="description" cols="1" rows="1"></textarea>
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
        </div>
    </figure>
</x-pagina-sin-nada-layout>

