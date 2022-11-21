@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="card mt-3 mb-3 ml-3 mr-3">
            <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Talleres</h5>
            <div class="card-body">
                <ol class="list-group list-group-numbered">
                    <div class="table-responsive">
                        <table id="table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">RUT</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Carrera/Unidad</th>
                                    <th scope="col">Facultad/Dirección</th>
                                    <th scope="col">Tipo de contrato</th>
                                    <th scope="col">Año</th>
                                    <th scope="col">Taller</th>
                                    <th scope="col">Asistencia</th>
                                    <th scope="col">Horas</th>
                                    <th scope="col">Dimensión</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inscribeds as $inscribed)
                                    <tr>
                                        <td scope="row" class="align-middle">{{ $inscribed->id }}</td>
                                        <td scope="row" class="align-middle">{{ $inscribed->teacher->user->rut }}
                                        </td>
                                        <td scope="row" class="align-middle">{{ $inscribed->teacher->user->name }}
                                        </td>
                                        <td scope="row" class="align-middle">{{ $inscribed->teacher->user->mail }}
                                        </td>
                                        <td scope="row" class="align-middle">{{ $inscribed->teacher->career->name }}
                                        </td>
                                        <td scope="row" class="align-middle">
                                            {{ $inscribed->teacher->career->faculty->name }}</td>
                                        <td scope="row" class="align-middle">
                                            {{ $inscribed->teacher->contract->name }}</td>
                                        <td scope="row" class="align-middle">
                                            {{ date('Y', strtotime($inscribed->course->start)) }}</td>
                                        <td scope="row" class="align-middle">
                                            {{ $inscribed->course->course_name->name }}</td>
                                        <td scope="row" class="align-middle">{{ $inscribed->attendance }}</td>
                                        <td scope="row" class="align-middle">
                                            {{ $inscribed->course->synchronous_hours }}</td>
                                        <td scope="row" class="align-middle">
                                            {{ $inscribed->course->course_name->dimension->name }}</td>
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
