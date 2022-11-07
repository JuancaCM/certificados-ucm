@extends('base')

@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-6 ">
            <div class="card">
                <h5 class="card-header text-center">Registro de dimensiones</h5>
                <div class="card-body">
                    <div class="form-label mb-3">
                        <input type="text" class="form-control" placeholder="Nombre dimensión" aria-label="course_names"
                            aria-describedby="basic-addon1">
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Descripción" id="floatingTextarea2" style="height: 100px"></textarea>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="mb-3 btn btn-primary">Registrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
