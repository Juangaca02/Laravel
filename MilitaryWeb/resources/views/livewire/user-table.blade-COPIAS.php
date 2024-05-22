<section class="bg-[#CE9568]">
    <div class="border border-dashed border-r-0 border-l-0 p-4">
        <div class="grid gap-3">
            <div class="col-span-full xl:col-span-5">
                <div class="relative">
                    <input type="text" class="bg-light border-light w-full p-2 rounded" wire:model="search" placeholder="Buscar...">
                    <i class="ri-search-line absolute right-2 top-2"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="p-4">
        <div class="overflow-auto mb-4">
            <table class="table-auto w-full text-left align-middle">
                <thead class="bg-gray-200 text-gray-600">
                    <tr>
                        <th class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">Nombre</th>
                        <th class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">Apellidos</th>
                        <th class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">Dni</th>
                        <th class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">Fecha de alistamiento</th>
                        <th class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">Verificado</th>
                        <th class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">Opciones</th>
                    </tr>
                </thead>
                <tbody class="list">
                    @forelse ($allUsers as $item)
                        <tr>
                            <td class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">{{ $item->name }}</td>
                            <td class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">{{ $item->surname }}</td>
                            <td class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">{{ $item->DNI }}</td>
                            <td class="text-center">{{ $item->entry_army_date }}</td>
                            <td class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis text-center">
                                <form action="/verificarUser/{{ $item->id }}" method="post">
                                    @csrf
                                    @method('post')
                                    <input type="checkbox" class="verificar" data-id="{{ $item->id }}" {{ $item->verified ? 'checked' : '' }}>
                                </form>
                            </td>
                            <td class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis text-center">
                                <form action="/deleteUser/{{ $item->id }}" method="delete">
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






{{-- <section class="bg-[#CE9568]">
    <div class="card-body border border-dashed border-end-0 border-start-0">
        <div class="row g-3">
            <div class="col-xxl-5 col-sm-12">
                <div class="search-box">
                    <input type="text" class="form-control search bg-light border-light" wire:model="search"
                        placeholder="Buscar...">
                    <i class="ri-search-line search-icon"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive table-card mb-4">
            <table class="table text-start align-middle table-nowrap mb-0 w-full" id="tasksTable">
                <thead class="table-light text-muted">
                    <tr>
                        <th class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">Nombre
                        </th>
                        <th class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">
                            Apellidos</th>
                        <th class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">Dni</th>
                        <th class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">Fecha de
                            alistamiento</th>
                        <th class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">
                            Vefiricado</th>
                        <th class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">Opcines
                        </th>
                    </tr>
                </thead>
                <tbody class="list form-check-all">
                    <!-- Content here -->
                    @forelse ($allUsers as $item)
                        <tr>
                            <td class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">
                                {{ $item->name }}</td>
                            <td class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">
                                {{ $item->surname }}</td>
                            <td class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis">
                                {{ $item->DNI }}</td>
                            <td class="text-center">{{ $item->entry_army_date }}</td>
                            <td
                                class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis text-center">
                                <form action="/verificarUser/{{ $item->id }}" method="post">
                                    @csrf
                                    @method('post')
                                    <input type="checkbox" class="verificar" data-id="{{ $item->id }}"
                                        {{ $item->verified ? 'checked' : '' }}>
                                </form>
                            </td>
                            <td
                                class="min-w-[150px] max-w-[300px] whitespace-nowrap overflow-hidden text-ellipsis text-center">
                                <form action="/deleteUser/{{ $item->id }}" method="delete">
                                    @csrf
                                    @method('delete')
                                    <button class="btn_deleteUser rounded-xl" type="button"
                                        onclick="confirmDelete({{ $item->id }})">
                                        <span class="btn_deleteUser__text">Delete</span>
                                        <span class="btn_deleteUser__icon">
                                            <!-- SVG icon here -->
                                        </span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="13" class="text-center text-danger text-5xl">No se encontraron resultados
                                para : {{ $search }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section> --}}


















{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
{{-- <section class="bg-[#CE9568]">
    <div class="card-body border border-dashed border-end-0 border-start-0">
        <div class="row g-3">
            <div class="col-xxl-5 col-sm-12">
                <div class="search-box">
                    <input type="text" class="form-control search bg-light border-light" wire:model="search"
                        placeholder="Buscar...">
                    <i class="ri-search-line search-icon"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive table-card mb-4">
            <table class="table text-start align-middle table-nowrap mb-0" id="tasksTable">
                <thead class="table-light text-muted">
                    <tr>
                        <th class="">Nombre</th>
                        <th class="">Apellidos</th>
                        <th class="">Dni</th>
                        <th class="">Fecha de alistamiento</th>
                        <th class="">Vefiricado</th>
                        <th class="">Opcines</th>
                    </tr>
                </thead>
                <tbody class="list form-check-all">
                    @forelse ($allUsers as $item)
                        <tr>
                            <td>
                                {{ $item->name }}
                            </td>
                            <td>
                                {{ $item->surname }}
                            </td>
                            <td>
                                {{ $item->DNI }}
                            </td>
                            <td class="text-center">
                                {{ $item->entry_army_date }}
                            </td>
                            <td class="text-center">
                                <form action="/verificarUser/{{ $item->id }}" method="post">
                                    @csrf
                                    @method('post')
                                    <input type="checkbox" class="verificar" data-id="{{ $item->id }}"
                                        {{ $item->verified ? 'checked' : '' }}>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="/deleteUser/{{ $item->id }}" method="delete">
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
                            <td colspan="13" class="text-center text-danger text-5xl">No se encontraron resultados
                                para : {{ $search }}
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    </div> --}}
