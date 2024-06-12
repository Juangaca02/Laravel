<section class="bg-[#dbb186] border rounded-3xl border-transparent">
    <div class="py-4 mx-[20px] md:mx-[100px]">
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <span class="text-white text-2xl">Filtros:</span>
                <div class="relative w-full max-w-lg">
                    <div class="inputGroup">
                        <input type="text" required="" autocomplete="off" class="input w-full min-w-[300px]"
                            wire:model.live="buscar">
                        <label for="name">Nombre-Apellido-Dni-Fecha</label>
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
                            @if ($campoOrden == 'name' && $orden)
                                @if ($orden == 'asc')
                                    <p class="text-[#E50000]">Nombre ⬆</p>
                                @else
                                    <p class="text-[#E50000]">Nombre ⬇</p>
                                @endif
                            @else
                                <p>Nombre</p>
                            @endif
                        </th>
                        <th scope="col" wire:click="ordenar('surname')"
                            class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis pb-2 cursor-pointer">
                            @if ($campoOrden == 'surname' && $orden)
                                @if ($orden == 'asc')
                                    <p class="text-[#E50000]">Apellidos ⬆</p>
                                @else
                                    <p class="text-[#E50000]">Apellidos ⬇</p>
                                @endif
                            @else
                                <p>Apellidos</p>
                            @endif
                        </th>
                        <th scope="col" wire:click="ordenar('dni')"
                            class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis pb-2 cursor-pointer">
                            @if ($campoOrden == 'dni' && $orden)
                                @if ($orden == 'asc')
                                    <p class="text-[#E50000]">Dni ⬆</p>
                                @else
                                    <p class="text-[#E50000]">Dni ⬇</p>
                                @endif
                            @else
                                <p>Dni</p>
                            @endif
                        </th>
                        <th scope="col" wire:click="ordenar('entry_army_date')"
                            class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis pb-2 cursor-pointer">
                            @if ($campoOrden == 'entry_army_date' && $orden)
                                @if ($orden == 'asc')
                                    <p class="text-[#E50000]">Fecha de alistamiento ⬆</p>
                                @else
                                    <p class="text-[#E50000]">Fecha de alistamiento ⬇</p>
                                @endif
                            @else
                                <p>Fecha de alistamiento</p>
                            @endif
                        </th>
                        <th
                            class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis text-center pb-2">
                            Verificado
                        </th>
                        <th
                            class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis text-center pb-2">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody class="list">
                    @forelse  ($allUsers as $User)
                        <tr class="m-2">
                            <td class="">
                                <img src="{{ Storage::url('Images/imagesUsers/' . $User->profile_photo_path) }}"
                                    alt="profile_photo" class="w-[50px] h-[50px] object-cover">
                            </td>
                            <td class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">
                                {{ $User->name }}
                            </td>
                            <td class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">
                                {{ $User->surname }}
                            </td>
                            <td class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">
                                {{ $User->DNI }}
                            </td>
                            <td
                                class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis text-center">
                                {{ $User->entry_army_date }}
                            </td>

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
                                class="flex justify-center items-center min-w-[350px] whitespace-nowrap overflow-hidden text-ellipsis text-center">
                                <button class="BtnDetalles m-2 min-w-[90px]">
                                    Detalles
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="svgBtnDetalles"
                                        onclick="showUserDetails({{ $User->id }})">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                        <path
                                            d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                        <path d="M9 17h6" />
                                        <path d="M9 13h6" />
                                    </svg>
                                </button>
                                @if (Auth::user()->rol_id == 2)
                                    <a href="{{ route('editUser', ['id' => $User->id]) }}">
                                        <button class="BtnEdit m-2 min-w-[90px]">Edit
                                            <svg class="svgBtnEdit" viewBox="0 0 512 512">
                                                <path
                                                    d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z">
                                                </path>
                                            </svg>
                                        </button>
                                    </a>
                                    <form action="/deleteUser/{{ $User->id }}" method="delete" class="m-1">
                                        @csrf
                                        @method('delete')
                                        <button class="btn_deleteUser rounded-xl" type="button"
                                            onclick="confirmDelete({{ $User->id }}, 'a {{ $User->name }}','user')">
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
                                                        x1="80" x2="432" y1="112" y2="112">
                                                    </line>
                                                    <path
                                                        d="M192,112V72h0a23.93,23.93,0,0,1,24-24h80a23.93,23.93,0,0,1,24,24h0v40"
                                                        style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                                    </path>
                                                    <line
                                                        style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                        x1="256" x2="256" y1="176" y2="400">
                                                    </line>
                                                    <line
                                                        style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                        x1="184" x2="192" y1="176" y2="400">
                                                    </line>
                                                    <line
                                                        style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                        x1="328" x2="320" y1="176" y2="400">
                                                    </line>
                                                </svg>
                                            </span>
                                        </button>
                                    </form>
                                @else
                                    @if (Auth::user()->range_id >= 11)
                                        <a href="{{ route('editUser', ['id' => $User->id]) }}">
                                            <button class="BtnEdit m-2 min-w-[90px]">Edit
                                                <svg class="svgBtnEdit" viewBox="0 0 512 512">
                                                    <path
                                                        d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </a>
                                        <form action="/deleteUser/{{ $User->id }}" method="delete"
                                            class="m-1">
                                            @csrf
                                            @method('delete')
                                            <button class="btn_deleteUser rounded-xl" type="button"
                                                onclick="confirmDelete({{ $User->id }}, 'a {{ $User->name }}','user')">
                                                <span class="btn_deleteUser__text">Delete</span>
                                                <span class="btn_deleteUser__icon">
                                                    <svg class="svg" height="512" viewBox="0 0 512 512"
                                                        width="512" xmlns="http://www.w3.org/2000/svg">
                                                        <title></title>
                                                        <path
                                                            d="M112,112l20,320c.95,18.49,14.4,32,32,32H348c17.67,0,30.87-13.51,32-32l20-320"
                                                            style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                                        </path>
                                                        <line
                                                            style="stroke:#fff;stroke-linecap:round;stroke-miterlimit:10;stroke-width:32px"
                                                            x1="80" x2="432" y1="112"
                                                            y2="112">
                                                        </line>
                                                        <path
                                                            d="M192,112V72h0a23.93,23.93,0,0,1,24-24h80a23.93,23.93,0,0,1,24,24h0v40"
                                                            style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px">
                                                        </path>
                                                        <line
                                                            style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                            x1="256" x2="256" y1="176"
                                                            y2="400">
                                                        </line>
                                                        <line
                                                            style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                            x1="184" x2="192" y1="176"
                                                            y2="400">
                                                        </line>
                                                        <line
                                                            style="fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:32px"
                                                            x1="328" x2="320" y1="176"
                                                            y2="400">
                                                        </line>
                                                    </svg>
                                                </span>
                                            </button>
                                        </form>
                                    @endif
                                @endif
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
