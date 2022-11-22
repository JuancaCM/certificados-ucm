@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="card mt-3 mb-3 ml-3 mr-3">
            <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Certificaciones</h5>
            <div class="card-body">
                <ol class="list-group list-group-numbered">
                    <div class="table-responsive">
                        <table id="table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Inscripción</th>
                                    <th scope="col">Programa</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Sede</th>
                                    <th scope="col">Modalidad</th>
                                    <th scope="col">Relatoria</th>
                                    <th scope="col">Publico objetivo</th>
                                    <th scope="col">Sesiones</th>
                                    <th scope="col">Horas sincronicas</th>
                                    <th scope="col">Horas autonomas</th>
                                    <th scope="col">Duración total</th>
                                    <th scope="col">Horario</th>
                                    <th scope="col">Inicio</th>
                                    <th scope="col">Cierre</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                    <tr>
                                        <td scope="row" class="align-middle">{{ $course->id }}</td>
                                        <td scope="row" class="align-middle">{{ $course->course_name->name }}</td>
                                        <td scope="row" class="align-middle">
                                            @if (filter_var($course->inscription, FILTER_VALIDATE_URL))
                                                <div class="text-center"><a class="btn btn-info btn-sm" target="_blank"
                                                        href="{{ $course->inscription }}" role="button">Ver</a></div>
                                            @else
                                                {{ $course->inscription }}
                                            @endif
                                        </td>
                                        <td scope="row" class="align-middle">
                                            @if (filter_var($course->program, FILTER_VALIDATE_URL))
                                                <div class="text-center"><a class="btn btn-info btn-sm" target="_blank"
                                                        href="{{ $course->program }}" role="button">Ver</a></div>
                                            @else
                                                {{ $course->program }}
                                            @endif
                                        </td>
                                        <td scope="row" class="align-middle">{{ $course->type->name }}</td>
                                        <td scope="row" class="align-middle">{{ $course->state->name }}</td>
                                        <td scope="row" class="align-middle">{{ $course->campus->name }}</td>
                                        <td scope="row" class="align-middle">{{ $course->modality->name }}</td>
                                        <td scope="row" class="align-middle">{{ $course->course_teacher->name }}</td>
                                        <td scope="row" class="align-middle">{{ $course->target_audience->name }}</td>
                                        <td scope="row" class="align-middle">{{ $course->sessions }}</td>
                                        <td scope="row" class="align-middle">{{ $course->synchronous_hours }}</td>
                                        <td scope="row" class="align-middle">{{ $course->autonomous_hours }}</td>
                                        <td scope="row" class="align-middle">{{ $course->duration }}</td>
                                        <td scope="row" class="align-middle">{{ $course->schedule }}</td>
                                        <td scope="row" class="align-middle">{{ $course->start }}</td>
                                        <td scope="row" class="align-middle">{{ $course->end }}</td>
                                        <td scope="row" class="align-middle">
                                            <div class="text-center mb-1"><a class="btn btn-warning btn-sm" href="#"
                                                    role="button"><i class="bi bi-pencil-square"></i></a></div>
                                            <div class="text-center"><a class="btn btn-danger btn-sm" href="#"
                                                    role="button"><i class="bi bi-file-earmark-x"></i></a></div>
                                        </td>
                                    </tr>
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
