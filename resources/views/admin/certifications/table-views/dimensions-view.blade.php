@extends('base')

@section('content')
    <div class="col s12 m6">
        @if (null != session('insert') && session('insert'))
            <div class="alert alert-success text-center">
                Dimensión modificada correctamente
            </div>
        @elseif (null != session('insert') && !session('insert'))
            <div class="alert alert-danger text-center">
                Ha ocurrido un error al modificar la dimensión
            </div>
        @endif
    </div>
    <div class="row justify-content-center">
        <div class="card mt-3 mb-3 ml-3 mr-3">
            <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Dimensiones</h5>
            <div class="card-body">
                <ol class="list-group list-group-numbered">
                    <div class="table-responsive">
                        <table id="table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dimensions as $dimension)
                                    <tr>
                                        <td scope="row" class="align-middle">{{ $dimension->id }}</td>
                                        <td scope="row" class="align-middle">{{ $dimension->name }}</td>
                                        <td scope="row" class="align-middle">{{ $dimension->description }}</td>
                                        <td scope="row" class="align-middle">
                                            <div class="text-center mb-1"><a class="btn btn-warning btn-sm" href="/editar-dimension?id={{ $dimension->id }}"
                                                    role="button"><i class="fa-solid fa-pen-to-square"></i></a></div>
                                            <div class="text-center"><a class="btn btn-danger btn-sm" href="#"
                                                    role="button"><i class="fa-solid fa-trash"></i></a></div>
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
