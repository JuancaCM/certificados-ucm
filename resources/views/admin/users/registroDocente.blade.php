@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card shadow">
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
                                    <span class="text">
                                        <label for="rut">RUT:</label>
                                        <input name="rut" type="text" class="form-control" aria-label="Rut"
                                            aria-describedby="basic-addon1">
                                        <snall class="form-text text-muted">Sin puntos y con guion</small>
                                    </span>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <span class="text">
                                    <label for="name">Nombre:</label>
                                    <input name="name" type="text" class="form-control"
                                        aria-label="Nombre" aria-describedby="basic-addon1">
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <label for="rut">Correo:</label>
                                <div class="input-group mb-3">
                                    <input name="mail" type="email" class="form-control"
                                        aria-label="Correo">
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <label for="career">Carrera:</label>
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
                                    <span class="text">
                                        <label for="phone">Teléfono:</label>
                                        <input name="phone" type="text" class="form-control" placeholder="Telefono"
                                            aria-label="Telefono" aria-describedby="basic-addon1">
                                    </span>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <label for="campus">Sede:</label>
                                <select name="campus" class="form-control mb-3" aria-label="Sede">
                                    <option selected disabled>Sede</option>
                                    @foreach ($campuses as $campus)
                                        <option value="{{ $campus->id }}">{{ $campus->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <label for="contract">Tipo de contrato:</label>
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
