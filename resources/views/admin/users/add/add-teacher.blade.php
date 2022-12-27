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
                                        <label>RUT:</label>
                                        <input name="rut" type="text" class="form-control" aria-label="Rut"
                                            aria-describedby="basic-addon1" required>
                                        <small class="form-text text-muted">Sin puntos y con guion</small>
                                    </span>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <span class="text">
                                    <label>Nombre:</label>
                                    <input name="name" type="text" class="form-control"
                                        aria-label="Nombre" aria-describedby="basic-addon1" required>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <label>Correo:</label>
                                <div class="input-group mb-3">
                                    <input name="mail" type="email" class="form-control"
                                        aria-label="Correo" required>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <label>Carrera: <i class="bi bi-question-circle" data-toggle="tooltip"
                                    data-placement="right" title="Si no encuentra la carrera, vaya a la sección de registro de carreras."></i></label>
                                <select name="career" class="form-control mb-3" aria-label="Carrera" required>
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
                                        <label>Teléfono:</label>
                                        <input name="phone" type="text" class="form-control"
                                            aria-label="Telefono" aria-describedby="basic-addon1" required>
                                    </span>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <label>Sede: <i class="bi bi-question-circle" data-toggle="tooltip"
                                    data-placement="right" title="Si no encuentra la sede, vaya a la sección de registro de sedes."></i></label>
                                <select name="campus" class="form-control mb-3" aria-label="Sede" required>
                                    <option selected disabled>Sede</option>
                                    @foreach ($campuses as $campus)
                                        <option value="{{ $campus->id }}">{{ $campus->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <label>Tipo de contrato: <i class="bi bi-question-circle" data-toggle="tooltip"
                            data-placement="right" title="Si no encuentra el tipo de contrato, vaya a la sección de registro de tipos de contratos."></i></label>
                        <select name="contract" class="form-control mb-3" aria-label="Contrato" required>
                            <option selected disabled>Tipo de contrato</option>
                            @foreach ($contracts as $contract)
                                <option value="{{ $contract->id }}">{{ $contract->name }}</option>
                            @endforeach
                        </select>
                        <p style="color: red">*Todos los campos son obligatorios</p>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mb-3">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection
