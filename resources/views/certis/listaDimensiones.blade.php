@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card border-info">
                <div class="card-header mb-3">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="/listaUsuarios">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" >Dimensiones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/listaCertificaciones">Certificaciones</a>
                        </li>
                    </ul>
                </div>
                <div class="card mt-3 mb-3 ">
                    <div class="card-body">
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Nombre Dimensión</div>
                                    Descripción
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection