@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card shadow">
                <form method="POST">
                    @csrf
                    <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Registro
                        de relatores</h5>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <span class="text">
                                        <label>RUT del relator:</label>
                                        <input name="rut" type="text" class="form-control" aria-label="Rut"
                                            aria-describedby="basic-addon1" value="{{ $course_teacher->rut }}" required>
                                        <small class="form-text text-muted">Sin puntos y con guion</small>
                                    </span>
                                </div>
                            </div>
                            <div class="col s12 m6 mb-3">
                                <span class="text">
                                    <label>Nombre del relator:</label>
                                    <input name="name" type="text" class="form-control" aria-label="Nombre"
                                        aria-describedby="basic-addon1" value="{{ $course_teacher->name }}" required>
                                </span>
                            </div>
                        </div>
                        <div class="row">

                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <span class="text">
                                        <label>Telefono del relator:</label>
                                        <input name="phone" type="text" class="form-control" aria-label="Telefono"
                                            aria-describedby="basic-addon1" value="{{ $course_teacher->phone }}" required>
                                    </span>
                                </div>
                            </div>
                            <div class="col s12 m6">
                                <label>Correo del relator:</label>
                                <div class="input-group mb-3">
                                    <input name="mail" type="email" class="form-control" aria-label="Correo" value="{{ $course_teacher->mail }}" required>
                                </div>
                            </div>
                        </div>
                        <p style="color: red">*Todos los campos son obligatorios</p>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mb-3">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
