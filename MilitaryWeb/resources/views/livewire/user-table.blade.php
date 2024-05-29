<section class="bg-[#dbb186] border rounded-3xl border-transparent">
    <div class="py-4 mx-[20px] md:mx-[100px]">
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <span class="text-white text-2xl">Filtros:</span>
                <div class="relative w-full max-w-lg">
                    <div class="inputGroup">
                        <input type="text" required="" autocomplete="off" class="input w-full min-w-[300px]"
                            wire:model.live="buscar">
                        <label for="name">Nombre-Apellido-Dni</label>
                    </div>
                </div>
            </div>
            <div class="flex space-x-2">
                <button class="px-4 py-2 bg-blue-500 text-white rounded" wire:click="toggleVerificados">
                    @if ($soloVerificados === null)
                        Mostrar Verificados
                    @elseif ($soloVerificados)
                        Mostrar No Verificados
                    @else
                        Mostrar Verificados
                    @endif
                </button>
                <button class="px-4 py-2 bg-green-500 text-white rounded" wire:click="mostrarTodos">
                    Mostrar Todos
                </button>
            </div>
        </div>
    </div>
    <div class="mx-[20px] md:mx-[100px]">

        <div class="overflow-x-auto mb-4">
            <table class="table-auto w-full text-left align-middle">
                <thead class="bg-[#CE9568]">
                    <tr class="">
                        <th scope="col"
                            class="min-w-[70px] max-w-[300px] whitespace-nowrap overflow-hidden text-center pb-2">
                            <p>Foto</p>
                        </th>
                        <th scope="col" wire:click="ordenar('name')"
                            class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis pb-2 cursor-pointer">
                            @if ($campoOrden == 'name')
                                <p>Nombre ⬇</p>
                            @else
                                <p>Nombre ⬆</p>
                            @endif
                        </th>
                        <th scope="col" wire:click="ordenar('surname')"
                            class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis pb-2 cursor-pointer">
                            @if ($campoOrden == 'surname')
                                <p>Apellidos ⬇</p>
                            @else
                                <p>Apellidos ⬆</p>
                            @endif
                        </th>
                        <th class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis pb-2">Dni
                        </th>
                        <th class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis pb-2">
                            Fecha de alistamiento</th>
                        <th class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis text-center pb-2">
                            Verificado</th>
                        <th class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis pb-2">
                            Opciones</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @forelse  ($allUsers as $User)
                        <tr class="">
                            <td class="flex justify-center items-center">
                                <img src="{{ Storage::url('Images/imagesUsers/' . $User->profile_photo_path) }}"
                                    alt="profile_photo" class="w-[50px] h-[50px] object-cover">
                            </td>
                            <td class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">
                                {{ $User->name }}</td>
                            <td class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">
                                {{ $User->surname }}</td>
                            <td class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">
                                {{ $User->DNI }}</td>
                            <td class="text-start">{{ $User->entry_army_date }}</td>
                            <td
                                class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis text-center">
                                <form action="/verificarUser/{{ $User->id }}" method="post" class="m-1 ml-2">
                                    @csrf
                                    @method('post')
                                    <input type="checkbox" class="verificar" data-id="{{ $User->id }}"
                                        {{ $User->verified ? 'checked' : '' }}>
                                </form>
                            </td>
                            <td
                                class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis text-start">
                                <form action="/deleteUser/{{ $User->id }}" method="delete" class="m-1">
                                    @csrf
                                    @method('delete')
                                    <button class="btn_deleteUser rounded-xl" type="button"
                                        onclick="confirmDelete({{ $User->id }})">
                                        <span class="btn_deleteUser__text">Delete</span>
                                        <span class="btn_deleteUser__icon">
                                            <svg class="svg" height="512" viewBox="0 0 512 512" width="512"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <title></title>
                                                <path
                                                    d="M112,112l20,320c.95,18.49,14.4,32,32,32H348c17.67,0,30.87-13.51,32-32l20-320"
                                                    style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                                </path>
                                                <line
                                                    style="stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"
                                                    x1="80" x2="432" y1="112" y2="112"></line>
                                                <path
                                                    d="M192,112V72h0a23.93,23.93,0,0,1,24-24h80a23.93,23.93,0,0,1,24,24h0v40"
                                                    style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                                </path>
                                                <line
                                                    style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                    x1="256" x2="256" y1="176" y2="400"></line>
                                                <line
                                                    style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                    x1="184" x2="192" y1="176" y2="400"></line>
                                                <line
                                                    style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                    x1="328" x2="320" y1="176" y2="400"></line>
                                            </svg>
                                        </span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr class="m-5">
                            <td colspan="13" class="text-center text-red-500 text-5xl">No se encontraron resultados
                                para : {{ $buscar }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            @if ($allUsers->hasPages())
                <div>
                    {{ $allUsers->links() }}
                </div>
            @endif
        </div>
    </div>
</section>
