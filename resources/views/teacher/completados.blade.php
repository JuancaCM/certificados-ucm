@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="card mt-3 mb-3 ml-3 mr-3">
            <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Cursos terminados</h5>
            <div class="card-body">
                <ol class="list-group list-group-numbered">
                    <div class="table-responsive">
                        <table id="table" class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Programa</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Mes</th>
                                    <th scope="col">Semestre</th>
                                    <th scope="col">Modalidad</th>
                                    <th scope="col">Relatoria</th>
                                    <th scope="col">Sesiones</th>
                                    <th scope="col">Horas sincronicas</th>
                                    <th scope="col">Horas autonomas</th>
                                    <th scope="col">Duración total</th>
                                    <th scope="col">Horario</th>
                                    <th scope="col">Inicio</th>
                                    <th scope="col">Cierre</th>
                                    <th scope="col">Certificado</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inscribeds as $inscribed)
                                    @if ($inscribed->course->state->name === 'Realizado')
                                        @php
                                            $month = ltrim(date('m', strtotime($inscribed->course->start)), 0);
                                            $mes = $meses[$month - 1];
                                        @endphp
                                        <tr>
                                            <td scope="row" class="align-middle">{{ $inscribed->id }}</td>
                                            <td scope="row" class="align-middle">{{ $inscribed->course->course_name->name }}</td>
                                            <td scope="row" class="align-middle">
                                                @if (filter_var($inscribed->course->program, FILTER_VALIDATE_URL))
                                                    <div class="text-center"><a class="btn btn-info btn-sm" target="_blank"
                                                            href="{{ $inscribed->course->program }}" role="button">Ver</a>
                                                    </div>
                                                @else
                                                    {{ $inscribed->course->program }}
                                                @endif
                                            </td>
                                            <td scope="row" class="align-middle">{{ $inscribed->course->type->name }}
                                            </td>
                                            <td scope="row" class="align-middle">{{ $mes }}</td>
                                            @if ($month >= 1 and $month <= 6)
                                                <td scope="row" class="align-middle">1° Semestre</td>
                                            @else
                                                <td scope="row" class="align-middle">2° Semestre</td>
                                            @endif
                                            <td scope="row" class="align-middle">{{ $inscribed->course->modality->name }}
                                            </td>
                                            <td scope="row" class="align-middle">
                                                {{ $inscribed->course->course_teacher->name }}
                                            </td>
                                            <td scope="row" class="align-middle">{{ $inscribed->course->sessions }}</td>
                                            <td scope="row" class="align-middle">
                                                {{ $inscribed->course->synchronous_hours }}</td>
                                            <td scope="row" class="align-middle">
                                                {{ $inscribed->course->autonomous_hours }}</td>
                                            <td scope="row" class="align-middle">{{ $inscribed->course->duration }}</td>
                                            <td scope="row" class="align-middle">{{ $inscribed->course->schedule }}</td>
                                            <td scope="row" class="align-middle">
                                                {{ date('d-m-Y', strtotime($inscribed->course->start)) }}</td>
                                            <td scope="row" class="align-middle">
                                                {{ date('d-m-Y', strtotime($inscribed->course->end)) }}</td>
                                            @if ($inscribed->authorization === 1)
                                                <td scope="row" class="align-middle">
                                                    <div class="text-center"><a class="btn btn-info btn-sm" target="_blank"
                                                            href="/pdf?id={{ $inscribed->id }}" role="button"><i class="fa-solid fa-eye"></i></a>
                                                </td>
                                            @else
                                                <td scope="row" class="align-middle">
                                                    <div class="text-center">No esta autorizado
                                                </td>
                                            @endif
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </ol>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('table').DataTable({
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.13.1/i18n/es-CL.json'
                }
            });
        });
    </script>
@endsection
