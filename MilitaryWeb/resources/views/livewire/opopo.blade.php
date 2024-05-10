<div>
    <div class="card-body border border-dashed border-end-0 border-start-0">
        <div class="row g-3">
            <div class="col-xxl-5 col-sm-12">
                <div class="search-box">
                    <!-- <input type="text" class="form-control search bg-light border-light" placeholder="Search for tasks or something..."> -->
                    <input type="text" class="form-control search bg-light border-light" wire:model="search" placeholder="Buscar...">
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
                        <!-- <th class="text-center" data-sort="acciones">Acciones</th> ORDENACION PLANTILLA -->

                        <th class="text-center">Acciones</th>
                        <th class="">Técnico</th>
                        <th class="">Tipo</th>
                        <th class="">Ejercicio</th>
                        <th class="">Serie</th>
                        <th class="">Número</th>
                        <th class="">Fecha</th>
                        <th class="">Código Cliente</th>
                        <th class="">Razón Social</th>
                        <th class="">Prioridad</th>
                        <th class="">Status</th>
                        <th class="">Persona Contacto</th>
                        <th class="">Observaciones</th>
                    </tr>
                </thead>
                <tbody class="list form-check-all">
                @forelse ($parts as $part)
                    <tr>
                        <td class="text-center">
                            <!-- <button onclick="modalAnadirLineaParte()"
                            class="acciones-btn bg-transparent text-white border-0" id="btnAnadirLineaParte"><i class="fa-solid fa-plus"></i></button> -->
                            <button data-toggle="tooltip" data-placement="top" title="Añadir imputación"
                                class="acciones-btn bg-transparent text-success border-0" data-bs-toggle="modal" data-bs-target="#imputacionModal"
                                data-idcliente="{{ $part->IdCliente }}" data-codigocliente="{{ $part->CodigoCliente }}" data-razonsocial="{{ $part->RazonSocial }}"
                                data-domicilio="{{ $part->Domicilio }}"data-codigopostal="{{ $part->CodigoPostal }}" data-municipio="{{ $part->Municipio }}"
                                data-provincia="{{ $part->Provincia }}" data-nacion="{{ $part->Nacion }}" data-telefono="{{ $part->Telefono }}"
                                data-ejercicio="{{ $part->Ejercicio }}" data-serie="{{ $part->Serie }}" 
                                {{-- Messi --}}
                                data-latitud="{{ $part->VLatitud }}"
                                data-longitud="{{ $part->VLongitud }}"

                                data-numero="{{ $part->Numero }}" data-tipo="{{ $part->Tipo }}"><i class="fa-solid fa-plus"></i>
                            </button>

                            <!-- Se comenta el botón que ya existia en el proyecto, lo reemplazamos por el de abajo
                                <button onclick="modalDetalleParte('{{$part->Ejercicio}}', '{{$part->Serie}}', '{{$part->Numero}}')" class="acciones-btn bg-transparent text-danger border-0" id="{{$part->idParte}}"><i class="fa-solid fa-eye"></i></button>
                            -->
                            <button data-toggle="tooltip" data-placement="top" title="Mostrar imputaciones"
                                onclick="modalTablaDetalleParte2('{{$part->Ejercicio}}', '{{$part->Serie}}', '{{$part->Numero}}', '{{$part->Tipo}}', '{{$part->RazonSocial}}','{{ $part->IdCliente }}')" {{--  2024-04-16  --}}
                                class="acciones-btn bg-transparent text-warning border-0" id="{{$part->idParte}}"><i class="fa-solid fa-eye"></i>
                            </button>

                        </td>
                        <td class="codigoTecnico fw-medium">{{ $part->CodigoTecnico }}</td>
                        <td class="tipo fw-medium text-primary">{{ $part->Tipo }}</td>
                        <td class="ejercicio fw-medium text-primary">{{ $part->Ejercicio }}</td>
                        <td class="serie">{{ $part->Serie }}</td>
                        <td class="numero">{{ $part->Numero }}</td>
                        <td class="fecha">{{ $part->Fecha }}</td>
                        <td class="codigoCliente"><span class=" text-uppercase">{{ $part->CodigoCliente }}</span></td>
                        <td class="razonSocial"><span class=" text-uppercase">{{ $part->RazonSocial }}</span></td>
                        <td class="prioridad"><span class="badge bg-danger text-uppercase">{{ $part->Prioridad }}</span></td>
                        <td class="estado"><span class="badge bg-danger text-uppercase">{{ $part->Status }}</span></td>
                        <td class="personaContacto"><span class="badge bg-info text-uppercase">{{ $part->PersonaContacto }}</span></td>
                        <td class="observaciones"><span class="break-all">{{ $part->Observaciones }}</span></td>
                        <!-- badge badge-soft-secondary CLASE ETIQUETA AZUL -->
                    </tr>

                    @empty
                        <tr>
                            <td colspan="13" class="text-center text-danger text-5xl">No se encontraron resultados para : {{ $search }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <div class="noresult" style="display: none">
                <div class="text-center">
                    <!-- Aquí mantén el código para el icono lord-icon si está funcionando correctamente -->
                    <h5 class="mt-2">¡Lo siento! No se han encontrado resultados. </h5>
                    <p class="text-muted mb-0">He buscado más de 200.000 tareas, no hemos encontrado ninguna tarea que coincida con su búsqueda.</p>
                </div>
            </div>
        </div>

        {{ $parts->links('vendor.livewire.bootstrap') }}

    </div>
</div>
