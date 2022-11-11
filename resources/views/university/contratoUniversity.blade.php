@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card border-info">
                <div class="card-header mb-3">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="/registroDocente">Docentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/analistaUsers">Analista</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/carreraUniversity">Carrera</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/facultadUniversity">Facultad</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active">Contrato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/administradorUsers">Administrador</a>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m6">
                    @if (null != session('insert') && session('insert'))
                        <div class="alert alert-success text-center">
                            Contrato registrado correctamente en la base de datos
                        </div>
                    @elseif (null != session('insert') && !session('insert'))
                        <div class="alert alert-danger text-center">
                            Ha ocurrido un error al registrar Contrato
                        </div>
                    @endif
                </div>

                <form method="POST">
                    @csrf
                    <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Registro
                        de Contrato</h5>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col s12 m6">
                                <span class="text" </span>
                                    <input name="name" type="text" class="form-control" placeholder="Nombre"
                                        aria-label="Nombre" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea name="description" class="form-control" placeholder="Observación" id="floatingTextarea2"
                                style="height: 100px"></textarea>
                        </div>
                    </div>
                                            <div class="text-center">
                            <button type="submit" class="btn btn-primary mb-3">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
