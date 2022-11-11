@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card border-info">
                <div class="col s12 m6">
                    @if (null != session('insert') && session('insert'))
                        <div class="alert alert-success text-center">
                            Carrera registrada correctamente en la base de datos
                        </div>
                    @elseif (null != session('insert') && !session('insert'))
                        <div class="alert alert-danger text-center">
                            Ha ocurrido un error al registrar Carrera
                        </div>
                    @endif
                </div>

                <form method="POST">
                    @csrf
                    <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Registro
                        de Carrera</h5>
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
                                <span class="text" </span>
                                    <input name="facultad" type="text" class="form-control" placeholder="Id_facultad"
                                        aria-label="Nombre" aria-describedby="basic-addon1">
                                    <div class="form-floating mt-3 mb-3">
                                        <textarea name="description" class="form-control" placeholder="Observación" id="floatingTextarea2"
                                            style="height: 100px"></textarea>
                                    </div>
                            </div>
                    </div>
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
