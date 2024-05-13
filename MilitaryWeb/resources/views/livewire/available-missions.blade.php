<div>
    {{-- Do your work, then step back. --}}
    @if ($missions->isEmpty())
        <div class="text-center">
            <p class="text-5xl">No hay misiones disponibles para tu armada.</p>
        </div>
        @Auth
            @if (Auth::user()->range_id >= 16)
                <div class="flex justify-center my-5">
                    <button onclick="window.location.href = '{{ route('login') }}';" class="buttonHome">Crear Mision</button>
                </div>
            @else
            @endif
        @endauth
    @else
        <div class="space-y-[100px] m-5">
            @foreach ($missions as $mission)
                <div class="flex flex-col space-y-5 p-5">
                    <div class="flex-grow text-center mb-5">
                        <h3 class="text-5xl font-bold">{{ $mission->title }}</h3>
                    </div>
                    <div class="lg:flex">
                        <figure class="mx-10 flex flex-col justify-center text-center "><!--- max-w-[800px] --->
                            <img class="rounded-3xl" src="{{ asset('/storage/Images/ImagesRelleno/barco.jpg') }}"
                                alt="">
                            <figcaption class="text-2xl italic mt-2">Buque insignia de la Armada</figcaption>
                        </figure>
                        <div class="overflow-auto max-w-[1100px] min-w-0">
                            <table class="text-white">
                                <thead>
                                    <tr>
                                        <th>Nombre del Campo</th>
                                        <th>Valor</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Subtítulo:</strong></td>
                                        <td><span>{{ $mission->subtitle }}</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Descripción:</strong></td>
                                        <td><span>{{ $mission->description }}</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Fecha:</strong></td>
                                        <td><span>{{ $mission->date }}</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Estado:</strong></td>
                                        <td>
                                            @if ($mission->status == 'Pendiente')
                                                <span class="bg-red-500 rounded-3xl">{{ $mission->status }}</span>
                                            @elseif ($mission->status == 'En progreso')
                                                <span class="bg-yellow-500 rounded-3xl">{{ $mission->status }}</span>
                                            @elseif($mission->status == 'Finalizada')
                                                <span class="bg-green-500 rounded-3xl">{{ $mission->status }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Tipo:</strong></td>
                                        <td><span>{{ $mission->type }}</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Prioridad:</strong></td>
                                        <td>
                                            @if ($mission->priority == 'Alta')
                                                <span class="bg-red-500 rounded-3xl">{{ $mission->priority }}</span>
                                            @elseif ($mission->priority == 'Media')
                                                <span class="bg-yellow-500 rounded-3xl">{{ $mission->priority }}</span>
                                            @elseif($mission->priority == 'Baja')
                                                <span class="bg-green-500 rounded-3xl">{{ $mission->priority }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Objetivo de la misión:</strong></td>
                                        <td><span>{{ $mission->objective }}</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Intervención:</strong></td>
                                        <td><span>{{ $mission->action }}</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>Resultado:</strong></td>
                                        <td><span>{{ $mission->result }}</span></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3">
                                            <!-- Botón en el pie de la tabla -->
                                            <button
                                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                                Tu Opción
                                            </button>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>

                            {{-- <p><strong>Fecha:</strong> {{ $mission->date->format('d-m-Y') }}</p> --}}
                            {{-- <p><strong>Fecha:</strong> {{ $mission->date->formatLocalizd('%d de %B de %Y') }}</p>  --}}



                        </div>
                    </div>
                </div>
                {{-- <div class="flex">
                <figure class="ml-10 flex-col justify-center text-center">
                    <img class="rounded-3xl max-w-[500px]" src="{{ asset('/storage/Images/Images-Relleno/barco.jpg') }}"
                        alt="">
                    <figcaption class="">Buque insignia de la Armada</figcaption>
                </figure>
                <div>
                    <p><strong>Subtítulo:</strong> {{ $mission->subtitle }}</p>
                    <p><strong>Descripción:</strong> {{ $mission->description }}</p>
                    <p><strong>Fecha:</strong> {{ $mission->date }}</p>
                    <p><strong>Horas:</strong> {{ $mission->hours }}</p>
                    <p><strong>Estado:</strong> {{ $mission->status }}</p>
                    <p><strong>Tipo:</strong> {{ $mission->type }}</p>
                    <p><strong>Prioridad:</strong> {{ $mission->priority }}</p>
                    <p><strong>Objetivo de la mision:</strong> {{ $mission->objective }}</p>
                    <p><strong>Intervencion:</strong> {{ $mission->action }}</p>
                    <p><strong>Resultado:</strong> {{ $mission->result }}</p>
                </div>
            </div> --}}
            @endforeach
        </div>
    @endif
</div>
