{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
<section class="bg-[#dbb186] border rounded-3xl border-transparent">
    <div class="py-4 mx-[20px] md:mx-[100px]">
        <div class="grid gap-3">
            <div class="col-span-full xl:col-span-5">
                <div class="relative">
                    <input type="text" class="bg-[#CE9568] w-full p-2 rounded border-white placeholder-white" wire:model="search" placeholder="Buscar...">
                </div>                
            </div>
        </div>
    </div>
    <div class="mx-[20px] md:mx-[100px]">
        <div class="overflow-x-auto mb-4">
            <table class="table-auto w-full text-left align-middle">
                <thead class="bg-[#CE9568]">
                    <tr class="">
                        <th class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis pb-2">Nombre</th>
                        <th class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis pb-2">Apellidos</th>
                        <th class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis pb-2">Dni</th>
                        <th class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis pb-2">Fecha de alistamiento</th>
                        <th class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis pb-2">Verificado</th>
                        <th class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis pb-2">Opciones</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @forelse ($allUsers as $item)
                        <tr class="" >
                            <td class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">{{ $item->name }}</td>
                            <td class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">{{ $item->surname }}</td>
                            <td class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">{{ $item->DNI }}</td>
                            <td class="text-start">{{ $item->entry_army_date }}</td>
                            <td class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis text-start">
                                <form action="/verificarUser/{{ $item->id }}" method="post" class="m-1 ml-2">
                                    @csrf
                                    @method('post')
                                    <input type="checkbox" class="verificar" data-id="{{ $item->id }}" {{ $item->verified ? 'checked' : '' }}>
                                </form>
                            </td>
                            <td class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis text-start">
                                <form action="/deleteUser/{{ $item->id }}" method="delete" class="m-1">
                                    @csrf
                                    @method('delete')
                                    <button class="btn_deleteUser rounded-xl" type="button"
                                        onclick="confirmDelete({{ $item->id }})">
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
                        <tr>
                            <td colspan="13" class="text-center text-red-500 text-5xl">No se encontraron resultados para : {{ $search }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
