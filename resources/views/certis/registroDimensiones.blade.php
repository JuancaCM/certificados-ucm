@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card border-info">
                <div class="col s12 m6 mt-3">
                    @if (null != session('insert') && session('insert'))
                        <div class="alert alert-success text-center">
                            Dimension registrada correctamente en la base de datos
                        </div>
                    @elseif (null != session('insert') && !session('insert'))
                        <div class="alert alert-danger text-center">
                            Ha ocurrido un error al registrar el taller
                        </div>
                    @endif
                </div>
                <form method="POST">
                    @csrf
                    <h5 class="card-header bg-transparent text-center text-dark font-weight-bold">Registro
                        de dimensiones</h5>
                    <div class="card-body">
                        <div class="form-label mb-3">
                            <input name="dimension" type="text" class="form-control" placeholder="Nombre dimensión"
                                aria-label="course_names" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-floating mb-3">
                            <textarea name="description" class="form-control" placeholder="Descripción" id="floatingTextarea2"
                                style="height: 100px"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="mb-3 btn btn-primary">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
