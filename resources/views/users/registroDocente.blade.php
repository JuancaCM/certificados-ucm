@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card border-info">
                <div class="card-header mb-3">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active">Docentes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/analistaUsers">Analista</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="carreraUniversity">Carrera</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/facultadUniversity">Facultad</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contratoUniversity">contrato</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/administradorUsers">Administrador</a>
                        </li>
                    </ul>
                </div>
                <div class="col s12 m6">
                    @if (null != session('insert') && session('insert'))
                        <div class="alert alert-success text-center">
                            Docente registrado correctamente en la base de datos
                        </div>
                    @elseif (null != session('insert') && !session('insert'))
                        <div class="alert alert-danger text-center">
                            Ha ocurrido un error al registrar al docente
                        </div>
                    @endif
                </div>

                <form method="POST">
                    @csrf
                    <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Registro
                        de docentes</h5>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <span class="text" </span>
                                        <input name="rut" type="text" class="form-control"
                                            placeholder="Rut sin puntos y con guión" aria-label="Rut"
                                            aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <span class="text" </span>
                                    <input name="name" type="text" class="form-control" placeholder="Nombre"
                                        aria-label="Nombre" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="input-group mb-3">
                                    <input name="mail" type="email" class="form-control" placeholder="Correo"
                                        aria-label="Correo">
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <select name="career" class="form-control mb-3" aria-label="Carrera">
                                    <option selected disabled>Carrera</option>
                                    @foreach ($careers as $career)
                                        <option value="{{ $career->id }}">{{ $career->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <span class="text" </span>
                                        <input name="phone" type="text" class="form-control" placeholder="Telefono"
                                            aria-label="Telefono" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <select name="campus" class="form-control mb-3" aria-label="Sede">
                                    <option selected disabled>Sede</option>
                                    @foreach ($campuses as $campus)
                                        <option value="{{ $campus->id }}">{{ $campus->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <select name="contract" class="form-control mb-3" aria-label="Contrato">
                            <option selected disabled>Tipo de contrato</option>
                            @foreach ($contracts as $contract)
                                <option value="{{ $contract->id }}">{{ $contract->name }}</option>
                            @endforeach
                        </select>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mb-3">Registrar</button>
                        </div>
                    </div>
                </form>

                {{-- <div class="card-footer text-muted">
                <h5 class="form-label">Subida Masiva</h5>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Subir</label>
                </div>
            </div> --}}

            </div>
        </div>
    </div>
@endsection
