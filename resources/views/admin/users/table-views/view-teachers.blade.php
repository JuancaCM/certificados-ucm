@extends('base')

@section('content')
    <div class="col s12 m6">
        @if (null != session('insert') && session('insert'))
            <div class="alert alert-success text-center">
                Docente modificado correctamente
            @elseif (null != session('insert') && !session('insert'))
                <div class="alert alert-danger text-center">
                    Ha ocurrido un error al modificar al docente
                </div>
        @endif
    </div>
    <div class="row justify-content-center">
        <div class="card mt-3 mb-3 ml-3 mr-3">
            <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Docentes</h5>
            <div class="card-body">
                <ol class="list-group list-group-numbered">
                    <table id='table' class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">RUT</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Telefono</th>
                                <th scope="col">Sede</th>
                                <th scope="col">Carrera</th>
                                <th scope="col">Facultad</th>
                                <th scope="col">Tipo de contrato</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $teacher)
                                <tr>
                                    <td scope="row" class="align-middle">{{ $teacher->id }}</td>
                                    <td scope="row" class="align-middle">{{ $teacher->user->rut }}</td>
                                    <td scope="row" class="align-middle">{{ $teacher->user->name }}</td>
                                    <td scope="row" class="align-middle">{{ $teacher->user->mail }}</td>
                                    <td scope="row" class="align-middle">{{ $teacher->user->phone }}</td>
                                    <td scope="row" class="align-middle">{{ $teacher->campus->name }}</td>
                                    <td scope="row" class="align-middle">{{ $teacher->career->name }}</td>
                                    <td scope="row" class="align-middle">{{ $teacher->career->faculty->name }}</td>
                                    <td scope="row" class="align-middle">{{ $teacher->contract->name }}</td>
                                    <td scope="row" class="align-middle">
                                        <div class="text-center mb-1"><a class="btn btn-warning btn-sm"
                                                href="/editar-docente?id={{ $teacher->id }}" role="button">
                                                <i class="fa-solid fa-pen-to-square"></i></a>
                                        </div>
                                        <div class="text-center"><a class="btn btn-danger btn-sm" href="#"
                                                role="button"><i class="fa-solid fa-trash"></i></a></div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
