@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="card mt-3 mb-3 ml-3 mr-3">
            <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Docentes inscritos en
                "{{ $course->course_name->name }}"</h5>
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
                                    <th scope="col">Asistencia</th>
                                    <th scope="col">Horas</th>
                                    <th scope="col">Certificado</th>
                                    <th scope="col">Acciones</th>
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

                                        <td scope="row" class="align-middle">{{ $inscribed->attendance }}</td>
                                        <td scope="row" class="align-middle">
                                            {{ $inscribed->course->synchronous_hours }}</td>
                                        @if ($inscribed->authorization === 1)
                                            <td scope="row" class="align-middle">
                                                <div class="text-center"><a class="btn btn-info btn-sm" target="_blank"
                                                        href="/pdf?id={{ $inscribed->id }}" role="button">Ver</a>
                                            </td>
                                        @else
                                            <td scope="row" class="align-middle">
                                                <div class="text-center">No esta autorizado
                                            </td>
                                        @endif
                                        <td scope="row" class="align-middle">
                                            <div class="text-center mb-1"><button type="button"
                                                    class="btn btn-warning btn-sm" data-toggle="modal"
                                                    data-target="#modal{{ $inscribed->id }}">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button></div>
                                            <div class="text-center"><a class="btn btn-danger btn-sm" href="#"
                                                    role="button"><i class="bi bi-file-earmark-x"></i></a></div>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="modal{{ $inscribed->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form method="POST">
                                                @csrf
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modificar datos:</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <label><span style="color: red">*</span>Asistencia:</label>
                                                        <input name="attendance" type="text" class="form-control"
                                                            aria-label="course_names" aria-describedby="basic-addon1"
                                                            value="{{ $inscribed->attendance }}" required>
                                                        <label><span style="color: red">*</span>Autorizado para obtener
                                                            certificado:</label>
                                                        <select name="authorization" class="form-control mb-3"
                                                            aria-label="Authorization" required>
                                                            @if ($inscribed->authorization === 1)
                                                                <option selected value="1">Si</option>
                                                                <option value="0">No</option>
                                                            @elseif ($inscribed->authorization === 0)
                                                                <option value="1">Si</option>
                                                                <option selected value="0">No</option>
                                                            @endif
                                                        </select>
                                                        <input name="id" type="text" class="form-control"
                                                            value="{{ $inscribed->id }}" aria-label="course_names"
                                                            aria-describedby="basic-addon1" hidden required>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Cancelar</button>
                                                        <button type="submit" class="btn btn-primary">Guardar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
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
