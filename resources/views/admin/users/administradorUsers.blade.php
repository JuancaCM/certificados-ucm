@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card border-info">
                <div class="col s12 m6 mt-3">
                    @if (null != session('insert') && session('insert'))
                        <div class="alert alert-success text-center">
                            Administrador registrado correctamente en la base de datos
                        </div>
                    @elseif (null != session('insert') && !session('insert'))
                        <div class="alert alert-danger text-center">
                            Ha ocurrido un error al registrar Administrador
                        </div>
                    @endif
                </div>

                <form method="POST">
                    @csrf
                    <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Registro
                        de Administrador</h5>
                    <div class="card-body ">
                        <div class="row">
                            <div class="col s12 m6 mb-3">
                                <span class="text" </span>
                                    <input name="name" type="text" class="form-control" placeholder="Nombre"
                                        aria-label="Nombre" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="form-label mb-3">
                                    <span class="text" </span>
                                        <input name="rut" type="text" class="form-control"
                                            placeholder="Rut sin puntos y con guión" aria-label="Rut"
                                            aria-describedby="basic-addon1">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m6">
                                <div class="input-group mb-3">
                                    <input name="mail" type="email" class="form-control" placeholder="Correo"
                                        aria-label="Correo">
                                </div>
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
